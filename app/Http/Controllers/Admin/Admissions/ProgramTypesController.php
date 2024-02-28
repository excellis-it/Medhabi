<?php

namespace App\Http\Controllers\Admin\Admissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramType;

class ProgramTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programtypes = ProgramType::paginate(5);
        return view('admin.admissions.program_types.list', compact('programtypes'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $programtypes = ProgramType::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);

            return response()->json(['data' => view('admin.admissions.program_types.table', compact('programtypes'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admissions.program_types.create');
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
            'name' => 'required'
        ]);

        $programtype = new ProgramType();
        $programtype->name = $request->name;
        $programtype->save();

        return redirect()->route('programTypes.index')->with('message', 'Program Type created successfully.');
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
        $programtype = ProgramType::find($id);
        return view('admin.admissions.program_types.edit', compact('programtype'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProgramType::find($id)->delete();
        return redirect()->route('programTypes.index')->with('message', 'Program Type deleted successfully.');
    }

    public function delete($id)
    {
        $jobs = ProgramType::findOrFail($id);
        $jobs->delete();
        return redirect()->route('programTypes.index')->with('error', 'Program type has been deleted successfully.');
    }
}
