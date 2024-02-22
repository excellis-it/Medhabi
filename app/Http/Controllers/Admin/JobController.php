<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $jobs = Job::orderByDesc('id')->paginate(15);
        return view('admin.jobs.list', compact('jobs'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $jobs = Job::where('id', 'like', '%' . $query . '%')
                ->orWhere('title', 'like', '%' . $query . '%')
                ->orWhere('eligibility', 'like', '%' . $query . '%')
                ->orWhere('opening_for', 'like', '%' . $query . '%')
                ->orWhere('location', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(15);

            return response()->json(['data' => view('admin.jobs.table', compact('jobs'))->render()]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
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
            'title' => "required|string|max:255",
            'description' => 'required',
            'eligibility' => 'required',
            'opening_for' => 'required',
            'location' => 'required',
            'status' => 'required',
        ]);

        $jobs = new Job();
        $jobs->title = $request->title;
        $jobs->status = $request->status;
        $jobs->eligibility = $request->eligibility;
        $jobs->opening_for = $request->opening_for;
        $jobs->location = $request->location;
        $jobs->description = $request->description;
        $jobs->save();

        return redirect()->route('jobs.index')->with('message', 'Job created successfully.');
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
        $job = Job::findOrFail($id);
        return view('admin.jobs.edit')->with(compact('job'));
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
            'title' => "required|string|max:255",
            'description' => 'required',
            'eligibility' => 'required',
            'opening_for' => 'required',
            'location' => 'required',
            'status' => 'required',
        ]);

        $jobs = Job::findOrFail($id);
        $jobs->title = $request->title;
        $jobs->status = $request->status;
        $jobs->eligibility = $request->eligibility;
        $jobs->opening_for = $request->opening_for;
        $jobs->location = $request->location;
        $jobs->description = $request->description;
        $jobs->save();

        return redirect()->route('jobs.index')->with('message', 'Job updated successfully.');
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

    public function changeStatus(Request $request)
    {
        // return $request;
        if ($request->ajax()) {
            $job = Job::findOrFail($request->job_id);
            $job->status = $request->status;
            $job->save();
            return response()->json(['message' => 'Job status updated successfully.']);
        }
    }

    public function delete($id)
    {
        $jobs = Job::findOrFail($id);
        $jobs->delete();
        return redirect()->route('jobs.index')->with('error', 'Job has been deleted successfully.');
    }
}
