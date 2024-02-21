<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::where('status', 1)->orderByDesc('id')->paginate(1); // Limit to 6 blogs per page
        return view('frontend.blog')->with(compact('blogs'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if (!$blog) {
            return redirect()->route('blogs');
        }
        return view('frontend.blog-detail')->with(compact('blog'));
    }

    public function loadMore(Request $request)
    {
        $offset = $request->input('offset');
        $limit = $request->input('limit');

        $blogs = Blog::where('status', 1)->orderByDesc('id')->skip($offset)->take($limit)->get();

        return response()->json($blogs);
    }
}
