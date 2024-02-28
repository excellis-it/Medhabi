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
        $courseTypes = CourseType::paginate(5);
        return view('admin.admissions.course_types.list', compact('courseTypes'));
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
            'name' => 'required',
            'program_type_id' => 'required'
        ]);

        $courseType = new CourseType();
        $courseType->program_type_id = $request->program_type_id;
        $courseType->name = $request->name;
        $courseType->save();

        return redirect()->route('courseTypes.index')->with('message', 'Course Type created successfully.');
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
        //
    }
}
