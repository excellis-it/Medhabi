<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurCoreValue;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class OurCoreValuesController extends Controller
{

    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $our_core_values = OurCoreValue::orderBy('id', 'desc')->paginate(15);
        return view('admin.our_core_values.list', compact('our_core_values'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $our_core_values = OurCoreValue::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(15);

            return response()->json(['data' => view('admin.our_core_values.table', compact('our_core_values'))->render()]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.our_core_values.create');
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
            'image' => "required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048",
            'description' => 'required',
        ]);

        $our_core_values = new OurCoreValue();
        $our_core_values->name = $request->name;
        $our_core_values->description = $request->description;
        $our_core_values->image = $this->imageUpload($request->file('image'), 'our_core_values');
        $our_core_values->save();

        return redirect()->route('our-core-values.index')->with('message', 'Our core value created successfully.');
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
        $our_core_value = OurCoreValue::findOrFail($id);
        return view('admin.our_core_values.edit')->with(compact('our_core_value'));
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
            'description' => 'required',
        ]);

        $our_core_values = OurCoreValue::findOrFail($id);
        $our_core_values->name = $request->name;
        $our_core_values->description = $request->description;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => "image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048",
            ]);
            $our_core_values->image = $this->imageUpload($request->file('image'), 'our_core_values');
        }
        $our_core_values->save();

        return redirect()->route('our-core-values.index')->with('message', 'Our core value updated successfully.');
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
        $our_core_values = OurCoreValue::findOrFail($id);
        $our_core_values->delete();
        return redirect()->route('our-core-values.index')->with('error', 'Our Core Value has been deleted successfully.');
    }
}
