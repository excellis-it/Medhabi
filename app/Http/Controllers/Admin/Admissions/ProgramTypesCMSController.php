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
            'section_1_title' => 'required',
            'section_1_description' => 'required',
            'section_1_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'section_2_title' => 'required',
            'section_2_description' => 'required',
            'section_2_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'section_4_title' => 'required',
            'section_4_description' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
        ]);
        dd($request->all());
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
        $programtypescms->banner_description = $request->banner_description;
        $programtypescms->section_1_title = $request->section_1_title;
        $programtypescms->section_1_description = $request->section_1_description;
        $programtypescms->section_1_image = $this->imageUpload($request->section_1_image, 'program_types_cms');
        $programtypescms->section_2_title = $request->section_2_title;
        $programtypescms->section_2_description = $request->section_2_description;
        $programtypescms->section_2_image = $this->imageUpload($request->section_2_image, 'program_types_cms');
        $programtypescms->section_3_title = $request->section_3_title;
        $programtypescms->section_3_description = $request->section_3_description;
        $programtypescms->section_4_title = $request->section_4_title;
        $programtypescms->section_4_description = $request->section_4_description;
        $programtypescms->seo_title = $request->seo_title;
        $programtypescms->seo_description = $request->seo_description;
        $programtypescms->seo_keywords = $request->seo_keywords;
        $programtypescms->save();

        if ($request->section_3_slider_title) {
            foreach ($request->section_3_slider_title as $key => $value) {
               if ($value != null) {
                $bachelorDurations = new BachelorDurationsCMS();
                $bachelorDurations->program_type_cms_id = $programtypescms->id;
                $bachelorDurations->duration_title = $value;
                $bachelorDurations->duration_desc = $request->section_3_slider_description[$key];
                if (isset($request->file('section_3_slider_image')[$key]) && $request->hasFile('section_3_slider_image') && $request->file('section_3_slider_image')[$key]) {
                    $bachelorDurations->duration_image = $this->imageUpload($request->file('section_3_slider_image')[$key], 'program_types_cms');
                }
                $bachelorDurations->save();
               }
            }
        }

        return redirect()->route('program-types-cms.index')->with('success', 'Program Type CMS created successfully.');
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
            'section_1_title' => 'required',
            'section_1_description' => 'required',
            'section_2_title' => 'required',
            'section_2_description' => 'required',
            'section_4_title' => 'required',
            'section_4_description' => 'required',
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
        $programtypescms->banner_description = $request->banner_description;
        $programtypescms->section_1_title = $request->section_1_title;
        $programtypescms->section_1_description = $request->section_1_description;
        $programtypescms->section_2_title = $request->section_2_title;
        $programtypescms->section_2_description = $request->section_2_description;
        $programtypescms->section_3_title = $request->section_3_title;
        $programtypescms->section_3_description = $request->section_3_description;
        $programtypescms->section_4_title = $request->section_4_title;
        $programtypescms->section_4_description = $request->section_4_description;
        $programtypescms->seo_title = $request->seo_title;
        $programtypescms->seo_description = $request->seo_description;
        $programtypescms->seo_keywords = $request->seo_keywords;

        if ($request->hasFile('banner_image')) {
            $programtypescms->banner_image = $this->imageUpload($request->banner_image, 'program_types_cms');
        }
        if ($request->hasFile('section_1_image')) {
            $programtypescms->section_1_image = $this->imageUpload($request->section_1_image, 'program_types_cms');
        }
        if ($request->hasFile('section_2_image')) {
            $programtypescms->section_2_image = $this->imageUpload($request->section_2_image, 'program_types_cms');
        }

        $programtypescms->save();

        if ($request->section_3_slider_title) {
            foreach ($request->section_3_slider_title as $key => $value) {
                if ($value != null) {
                    if (isset($request->section_3_slider_image_id[$key])) {
                        $bachelorDurations = BachelorDurationsCMS::find($request->section_3_slider_image_id[$key]);
                    } else {
                        $bachelorDurations = new BachelorDurationsCMS();
                    }
                    $bachelorDurations->program_type_cms_id = $programtypescms->id ?? null;
                    $bachelorDurations->duration_title = $value ?? null;
                    $bachelorDurations->duration_desc = $request->section_3_slider_description[$key] ?? null;
                    if (isset($request->file('section_3_slider_image')[$key]) && $request->hasFile('section_3_slider_image') && $request->file('section_3_slider_image')[$key]) {
                        $bachelorDurations->duration_image = $this->imageUpload($request->file('section_3_slider_image')[$key], 'program_types_cms');
                    }
                    $bachelorDurations->save();
                }

            }
        }

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
        return redirect()->route('program-types-cms.index')->with('success', 'Program Type CMS deleted successfully.');
    }
}
