<?php

namespace App\Http\Controllers\Admin\Admissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramTypesCMS;
use App\Models\ProgramType;
use App\Models\BachelorDurationsCMS;
use App\Traits\CreateSlug;
use App\Traits\ImageTrait;

class ProgramTypesCMSController extends Controller
{
    use ImageTrait, CreateSlug;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programtypescms = ProgramTypesCMS::paginate(5);
        $programtypes = ProgramType::all();
        $bachelorDurations = BachelorDurationsCMS::all();
        return view('admin.pages.program_types.list', compact('programtypes', 'programtypescms', 'bachelorDurations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programtypes = ProgramType::orderBy('name', 'desc')->get();
        return view('admin.pages.program_types.create', compact('programtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'program_type_id' => 'required',
            'name' => 'required',
            'banner_title' => 'required',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'section_1_description' => 'required',
            'section_2_title' => 'required',
            'section_2_description' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
        ]);
        // dd($request->all());
        $slug = $this->createSlug($request->name);
        $is_slug_exists = ProgramTypesCMS::where('slug', $slug)->first();
        if ($is_slug_exists) {
            $slug = $slug . '-' . time();
        }

        $programtypescms = new ProgramTypesCMS();
        $programtypescms->program_type_id = $request->program_type_id;
        $programtypescms->name = $request->name;
        $programtypescms->slug = $slug;
        $programtypescms->banner_image = $this->imageUpload($request->banner_image, 'program_types_cms');
        $programtypescms->banner_title = $request->banner_title;
        $programtypescms->section_1_description = $request->section_1_description;
        $programtypescms->section_2_title = $request->section_2_title;
        $programtypescms->section_2_description = $request->section_2_description;
        $programtypescms->seo_title = $request->seo_title;
        $programtypescms->seo_description = $request->seo_description;
        $programtypescms->seo_keywords = $request->seo_keywords;
        $programtypescms->save();

        return redirect()->route('program-types-cms.index')->with('message', 'Program Type CMS created successfully.');
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
        $programtypes = ProgramType::orderBy('name', 'desc')->get();
        $programtypescms = ProgramTypesCMS::find($id);
        return view('admin.pages.program_types.edit', compact('programtypescms', 'programtypes'));
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
        // dd($request->all());
        $request->validate([
            'program_type_id' => 'required',
            'name' => 'required',
            'banner_title' => 'required',
            'section_1_description' => 'required',
            'section_2_title' => 'required',
            'section_2_description' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
        ]);

        $programtypescms = ProgramTypesCMS::find($id);
        if ($programtypescms->name != $request->name) {
            $slug = $this->createSlug($request->name);
            $is_slug_exists = ProgramTypesCMS::where('slug', $slug)->first();
            if ($is_slug_exists) {
                $slug = $slug . '-' . time();
            }
            $programtypescms->slug = $slug;
        }
        $programtypescms->program_type_id = $request->program_type_id;
        $programtypescms->name = $request->name;
        $programtypescms->banner_title = $request->banner_title;
        $programtypescms->section_1_description = $request->section_1_description;
        $programtypescms->section_2_title = $request->section_2_title;
        $programtypescms->section_2_description = $request->section_2_description;
        $programtypescms->seo_title = $request->seo_title;
        $programtypescms->seo_description = $request->seo_description;
        $programtypescms->seo_keywords = $request->seo_keywords;

        if ($request->hasFile('banner_image')) {
            $programtypescms->banner_image = $this->imageUpload($request->banner_image, 'program_types_cms');
        }

        $programtypescms->save();
        return redirect()->route('program-types-cms.index')->with('message', 'Program Type CMS updated successfully.');
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
        $programtypescms = ProgramTypesCMS::findOrFail($request->id);
        $programtypescms->delete();
        return redirect()->route('program-types-cms.index')->with('message', 'Program Type CMS deleted successfully.');
    }
}
