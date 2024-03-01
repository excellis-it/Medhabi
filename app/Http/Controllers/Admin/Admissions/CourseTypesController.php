<?php

namespace App\Http\Controllers\Admin\Admissions;

use App\Http\Controllers\Controller;
use App\Models\CourseType;
use App\Models\ProgramType;
use Illuminate\Http\Request;

class CourseTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseTypes = CourseType::orderBy('id', 'desc')->paginate(10);
        return view('admin.admissions.course_types.list', compact('courseTypes'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $courseTypes = CourseType::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhereHas('programType', function ($q) use ($query) {
                    $q->where('name', 'like', '%' . $query . '%');
                })
                ->orderBy($sort_by, $sort_type)
                ->paginate(10);

            return response()->json(['data' => view('admin.admissions.course_types.table', compact('courseTypes'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programTypes = ProgramType::all();
        return view('admin.admissions.course_types.create', compact('programTypes'));
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
            'name' => 'required|unique:course_types',
            'program_type_id' => 'required'
        ]);

        $courseType = new CourseType();
        $courseType->program_type_id = $request->program_type_id;
        $courseType->name = $request->name;
        $courseType->save();

        return redirect()->route('course-types.index')->with('message', 'Course Type created successfully.');
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
        $courseType = CourseType::find($id);
        $programTypes = ProgramType::all();
        return view('admin.admissions.course_types.edit', compact('courseType', 'programTypes'));
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
        $courseType = CourseType::find($id);
        $request->validate([
            'name' => 'required|unique:course_types,name,' . $id,
            'program_type_id' => 'required'
        ]);

        $courseType->program_type_id = $request->program_type_id;
        $courseType->name = $request->name;
        $courseType->save();

        return redirect()->route('course-types.index')->with('message', 'Course Type updated successfully.');
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
