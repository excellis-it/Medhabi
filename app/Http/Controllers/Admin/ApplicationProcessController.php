<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicationProcess;
use App\Traits\ImageTrait;

class ApplicationProcessController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicationProcess = ApplicationProcess::orderBy('id', 'desc')->paginate(5);
        return view('admin.application-process.list', compact('applicationProcess'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $applicationProcess = ApplicationProcess::where('id', 'like', '%' . $query . '%')
                ->orWhere('process_desc', 'like', '%' . $query . '%')
                ->orWhere('button_text', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);

            return response()->json(['data' => view('admin.application_process.table', compact('applicationProcess'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.application-process.create');
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
            'process_desc' => 'required',
        ], [
            'process_desc.required' => 'Process Text field is required.',
        ]);

        $applicationProcess = new ApplicationProcess();
        // if($request->hasFile('process_image')){
        //     $applicationProcess->process_image = $this->imageUpload($request->file('process_image'), 'application-process');
        // }
        $applicationProcess->process_image = $this->imageUpload($request->process_image, 'application_process');
        $applicationProcess->process_desc = $request->process_desc;
        $applicationProcess->save();

        return redirect()->route('application-process.index')->with('success', 'Application Process added successfully.');
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
        $applicationProcess = ApplicationProcess::find($id);
        return view('admin.application-process.edit', compact('applicationProcess'));
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
        $applicationProcess = ApplicationProcess::find($id);
        $request->validate([
            'process_desc' => 'required',
        ], [
            'process_desc.required' => 'Process Description field is required.',
        ]);

        $applicationProcess->title = $request->title;
        $applicationProcess->description = $request->description;
        if($request->hasFile('process_image')){
            $applicationProcess->process_image = $this->imageUpload($request->file('process_image'), 'application-process');
        }
        // $applicationProcess->process_image = $request->process_image;
        $applicationProcess->process_desc = $request->process_desc;
        $applicationProcess->save();

        return redirect()->route('admin.application-process.index')->with('success', 'Application Process updated successfully.');
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
        $applicationProcess = ApplicationProcess::findOrFail($id);
        $applicationProcess->delete();
        return redirect()->route('program-types.index')->with('error', 'Application Process has been deleted successfully.');
    }
}
