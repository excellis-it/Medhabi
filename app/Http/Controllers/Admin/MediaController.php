<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class MediaController extends Controller
{

    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.medias.list', compact('medias'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $medias = Media::where('id', 'like', '%' . $query . '%')
                ->orWhere('media_channel_name', 'like', '%' . $query . '%')
                ->orWhere('media_channel_url', 'like', '%' . $query . '%')
                ->orWhere('news_title', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(10);

            return response()->json(['data' => view('admin.pages.medias.table', compact('medias'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.medias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'media_channel_name' => 'required',
            'media_channel_url' => 'required|url',
            'news_title' => 'required',
            'media_channel_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $media = new Media();
        $media->media_channel_name = $request->media_channel_name;
        $media->media_channel_url = $request->media_channel_url;
        $media->news_title = $request->news_title;
        $media->media_channel_thumbnail = $this->imageUpload($request->file('media_channel_thumbnail'), 'media');
        $media->save();
        return redirect()->route('media.index')->with('message', 'Media added successfully');
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
        // return $id;
        $media = Media::findOrFail($id);
        return view('admin.pages.medias.edit', compact('media'));
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
        // return $request;
        $request->validate([
            'media_channel_name' => 'required',
            'media_channel_url' => 'required|url',
            'news_title' => 'required',
        ]);

        $media = Media::findOrFail($id);
        $media->media_channel_name = $request->media_channel_name;
        $media->media_channel_url = $request->media_channel_url;
        $media->news_title = $request->news_title;
        if ($request->hasFile('media_channel_thumbnail')) {
            $media->media_channel_thumbnail = $this->imageUpload($request->file('media_channel_thumbnail'), 'media');
        }
        $media->save();
        return redirect()->route('media.index')->with('message', 'Media updated successfully');
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

    public function delete(Request $request)
    {
        $media = Media::findOrFail($request->id);
        $media->delete();
        return redirect()->route('media.index')->with('message', 'Media deleted successfully');
    }

}
