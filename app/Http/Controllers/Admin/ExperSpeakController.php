<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolExperSpeak;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class ExperSpeakController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $experSpeaks = SchoolExperSpeak::orderBy('id', 'desc')->where('school_id', $request->school_id)->get();
        $school_id = $request->school_id;
        return view('admin.pages.schools.exper_speaks.list')->with(compact('experSpeaks', 'school_id'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // validation
        $request->validate([
            'image' => 'required',
        ]);

        foreach ($request->file('image') as $key => $image) {
            $experSpeak = new SchoolExperSpeak();
            $experSpeak->school_id = $request->school_id;
            $experSpeak->image = $this->imageUpload($image, 'exper_speak');
            $experSpeak->save();
        }

        return redirect()->route('expert-speaks.index', ['school_id' => $request->school_id])->with('message', 'Expert Speak Added Successfully');
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
    public function edit(Request $request, $id)
    {

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
        $experSpeak = SchoolExperSpeak::findOrFail($request->id);
        $experSpeak->delete();
        return response()->json(['message' => 'Expert Speak Deleted Successfully']);
    }
}
