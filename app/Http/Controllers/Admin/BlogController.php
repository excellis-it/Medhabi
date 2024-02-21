<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Traits\CreateSlug;
use App\Traits\ImageTrait;

class BlogController extends Controller
{
    use ImageTrait, CreateSlug;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $blogs = Blog::orderByDesc('id')->paginate(15);
        return view('admin.blog.list', compact('blogs'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {
            
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $blogs = Blog::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhere('slug', 'like', '%' . $query . '%')
                ->orWhere('short_description', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(15);

            return response()->json(['data' => view('admin.blog.table', compact('blogs'))->render()]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
        ]);

        $slug = $this->createSlug($request->name);
        // check slug is already exist or not
        $is_slug_exist = Blog::where('slug', $slug)->first();
        if ($is_slug_exist) {
            $slug = $slug . '-' . time();
        }

        $blog = new Blog();
        $blog->name = $request->name;
        $blog->status = $request->status;
        $blog->description = $request->description;
        $blog->short_description = $request->short_description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_keyword = $request->meta_keyword;
        $blog->meta_description = $request->meta_description;
        $blog->slug = $slug;
        $blog->image = $this->imageUpload($request->file('image'), 'blog');
        $blog->save();

        return redirect()->route('blogs.index')->with('message', 'Blog created successfully.');
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
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit')->with(compact('blog'));
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
        ]);

        $blog = Blog::findOrFail($id);
        $blog->name = $request->name;
        $blog->status = $request->status;
        $blog->description = $request->description;
        $blog->short_description = $request->short_description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_keyword = $request->meta_keyword;
        $blog->meta_description = $request->meta_description;
        if ($blog->name != $request->name) {
            $slug = $this->createSlug($request->name);
            $is_slug_exist = Blog::where('slug', $slug)->first();
            if ($is_slug_exist) {
                $slug = $slug . '-' . time();
            }
            $blog->slug = $slug;
        }

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => "image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048",
            ]);
            $blog->image = $this->imageUpload($request->file('image'), 'blog');
        }
        $blog->save();

        return redirect()->route('blogs.index')->with('message', 'Blog updated successfully.');
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
            $blog = Blog::findOrFail($request->blog_id);
            $blog->status = $request->status;
            $blog->save();
            return response()->json(['message' => 'Blog status updated successfully.']);
        }
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('error', 'Blog has been deleted successfully.');
    }
}
