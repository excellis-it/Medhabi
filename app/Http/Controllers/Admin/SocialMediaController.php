<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{

    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social_media = SocialMedia::orderBy('id', 'desc')->paginate(10);
        return view('admin.social-media.list', compact('social_media'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $social_media = SocialMedia::where('id', 'like', '%' . $query . '%')
                ->orWhere('university_name', 'like', '%' . $query . '%')
                ->orWhere('user_name', 'like', '%' . $query . '%')
                ->orWhere('link', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(10);

            return response()->json(['data' => view('admin.social-media.table', compact('social_media'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social-media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'university_name' => 'required',
            'university_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_name' => 'required',
            'link' => 'required',
            'icon' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $social_media = new SocialMedia();
        $social_media->university_name = $request->university_name;
        $social_media->user_name = $request->user_name;
        $social_media->link = $request->link;
        $social_media->icon = $request->icon;
        $social_media->image = $this->imageUpload($request->file('image'), 'social_media');
        $social_media->university_logo = $this->imageUpload($request->file('university_logo'), 'social_media');
        $social_media->save();
        return redirect()->route('social-media.index')->with('message', 'Social Media Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $social_media = SocialMedia::findOrFail($id);
        return view('admin.social-media.edit', compact('social_media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $social_media = SocialMedia::findOrFail($id);
        $request->validate([
            'university_name' => 'required',
            'university_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_name' => 'required',
            'link' => 'required',
            'icon' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $social_media->university_name = $request->university_name;
        $social_media->user_name = $request->user_name;
        $social_media->link = $request->link;
        $social_media->icon = $request->icon;
        if ($request->hasFile('image')) {
            $social_media->image = $this->imageUpload($request->file('image'), 'social_media');
        }
        if ($request->hasFile('university_logo')) {
            $social_media->university_logo = $this->imageUpload($request->file('university_logo'), 'social_media');
        }
        $social_media->save();
        return redirect()->route('social-media.index')->with('message', 'Social Media Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $social_media = SocialMedia::findOrFail($id);
        $social_media->delete();
        return redirect()->route('social-media.index')->with('message', 'Social Media Deleted Successfully');
    }
}
