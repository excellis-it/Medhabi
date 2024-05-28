<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Traits\CreateSlug;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use ImageTrait, CreateSlug;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $newses = News::orderByDesc('id')->paginate(15);
        return view('admin.news.list', compact('newses'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $newses = News::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhere('slug', 'like', '%' . $query . '%')
                ->orWhere('short_description', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(15);

            return response()->json(['data' => view('admin.news.table', compact('newses'))->render()]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'name' => "required|string|max:255",
            'status' => "required",
            'image' => "required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048",
            'description' => 'required',
            'short_description' => 'required',
            'google_analytics' => 'nullable',
            'slug' => 'required|unique:newses,slug'
        ]);

        $news = new News();
        $news->name = $request->name;
        $news->status = $request->status;
        $news->description = $request->description;
        $news->short_description = $request->short_description;
        $news->meta_title = $request->meta_title;
        $news->meta_keyword = $request->meta_keyword;
        $news->meta_description = $request->meta_description;
        $news->google_analytics = $request->google_analytics;
        $news->slug = $request->slug;
        $news->image = $this->imageUpload($request->file('image'), 'news');
        $news->save();

        return redirect()->route('newses.index')->with('message', 'News created successfully.');
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
        $news = News::findOrFail($id);
        return view('admin.news.edit')->with(compact('news'));
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
        $request->validate([
            'name' => "required|string|max:255",
            'status' => "required",
            'description' => 'required',
            'short_description' => 'required',
            'slug' => 'required|unique:newses,slug,' . $id
        ]);

        $news = News::findOrFail($id);
        $news->name = $request->name;
        $news->status = $request->status;
        $news->description = $request->description;
        $news->short_description = $request->short_description;
        $news->meta_title = $request->meta_title;
        $news->meta_keyword = $request->meta_keyword;
        $news->meta_description = $request->meta_description;
        $news->google_analytics = $request->google_analytics;
        $news->slug = $request->slug;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => "image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048",
            ]);
            $news->image = $this->imageUpload($request->file('image'), 'news');
        }
        $news->save();

        return redirect()->route('newses.index')->with('message', 'News updated successfully.');
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

    public function changeBlogStatus(Request $request)
    {
        // return $request;
        if ($request->ajax()) {
            $news = News::findOrFail($request->blog_id);
            $news->status = $request->status;
            $news->save();
            return response()->json(['message' => 'News status updated successfully.']);
        }
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('newses.index')->with('error', 'News has been deleted successfully.');
    }
}
