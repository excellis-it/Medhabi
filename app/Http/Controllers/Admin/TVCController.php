<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TVC;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class TVCController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tvcs = TVC::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.tvc.list', compact('tvcs'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $tvcs = TVC::where('id', 'like', '%' . $query . '%')
                ->orWhere('title', 'like', '%' . $query . '%')
                ->orWhere('url', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(10);

            return response()->json(['data' => view('admin.pages.tvc.table', compact('tvcs'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tvc.create');
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
            'url' => 'required|url',
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->all();
        $tvc = new TVC();
        $tvc->title = $data['title'];
        $tvc->url = $data['url'];
        $tvc->thumbnail = $this->imageUpload($request->file('thumbnail'), 'tvc');
        $tvc->save();

        return redirect()->route('tvc.index')->with('message', 'TVC created successfully');
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
        $tvc = TVC::findOrFail($id);
        return view('admin.pages.tvc.edit', compact('tvc'));
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
        $tvc = TVC::findOrFail($id);
        $request->validate([
            'url' => 'required|url',
            'title' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->all();
        $tvc->title = $data['title'];
        $tvc->url = $data['url'];
        if ($request->hasFile('thumbnail')) {
            $tvc->thumbnail = $this->imageUpload($request->file('thumbnail'), 'tvc');
        }
        $tvc->save();

        return redirect()->route('tvc.index')->with('message', 'TVC updated successfully');
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
        $tvc = TVC::findOrFail($request->id);
        $tvc->delete();
        return redirect()->route('tvc.index')->with('message', 'TVC deleted successfully');
    }
}
