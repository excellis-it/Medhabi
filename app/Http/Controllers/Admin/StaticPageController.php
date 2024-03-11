<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StaticPage;
use App\Traits\CreateSlug;

class StaticPageController extends Controller
{
    use CreateSlug;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $static_pages = StaticPage::orderBy('id', 'desc')->paginate(10);
        return view('admin.static-page.list')->with(compact('static_pages'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $static_pages = StaticPage::where('id', 'like', '%' . $query . '%')
                ->orWhere('title', 'like', '%' . $query . '%')
                ->orWhere('slug', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(10);

            return response()->json(['data' => view('admin.static-page.table', compact('static_pages'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.static-page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation 
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $slug = $this->createSlug($request->title);
        // check slug is already exist or not
        $is_slug_exist = StaticPage::where('slug', $slug)->first();
        if ($is_slug_exist) {
            $slug = $slug . '-' . time();
        }


        $static_page = new StaticPage();
        $static_page->title = $request->title;
        $static_page->slug = $slug;
        $static_page->content = $request->content;
        $static_page->save();

        return redirect()->route('static-pages.index')->with('message', 'Static Page created successfully');

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
        //
        $static_page = StaticPage::findOrFail($id);
        return view('admin.static-page.edit')->with(compact('static_page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $static_page = StaticPage::findOrFail($request->id);
        $static_page->title = $request->title;
        $static_page->content = $request->content;
        $static_page->update();

        return redirect()->route('static-pages.index')->with('message', 'Static Page updated successfully');
    }

    public function delete($id)
    {
        $static_page = StaticPage::findOrFail($id);
        $static_page->delete();
        return redirect()->route('static-pages.index')->with('error', 'Static Page has been deleted successfully.');
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
}
