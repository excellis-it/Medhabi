<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galary;
use App\Traits\ImageTrait;

class GalaryController extends Controller
{

    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galaries = Galary::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.schools.galaries.list')->with(compact('galaries'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $galaries = Galary::where('id', 'like', '%' . $query . '%')
                ->orWhere('title', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(10);

            return response()->json(['data' => view('admin.pages.schools.galaries.table', compact('galaries'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.schools.galaries.create');
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
            'title' => 'required|unique:galaries,title',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:50000',
        ]);

        // store image
        $galary = new Galary();
        $galary->title = $request->title;
        $galary->image = $this->imageUpload($request->file('image'), 'galary');
        $galary->save();

        return redirect()->route('galaries.index')->with('message', 'Galary Image Added Successfully');


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
        $galary = Galary::findOrFail($id);
        return view('admin.pages.schools.galaries.edit', compact('galary'));
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

        // validation
        $request->validate([
            'title' => 'required',
        ]);

        // store image
        $galary = Galary::findOrFail($id);
        $galary->title = $request->title;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:50000',
            ]);
            $galary->image = $this->imageUpload($request->file('image'), 'galary');
        }

        $galary->update();

        return redirect()->route('galaries.index')->with('message', 'Galary Image Updated Successfully');

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
        $galary = Galary::findOrFail($id);
        $galary->delete();

        return redirect()->route('galaries.index')->with('error', 'Galary Image Deleted Successfully');

    }
}
