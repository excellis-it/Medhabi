<?php

namespace App\Http\Controllers\Admin\Admissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramTypesCMS;
use App\Models\ProgramType;
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
        return view('admin.pages.program_types.list', compact('programtypes', 'programtypescms'));
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

        ], [
            'banner_image.required' => 'The banner image field is required.',
            'banner_image.image' => 'The banner image must be an image.',
            'banner_image.mimes' => 'The banner image must be a file of type: jpeg, png, jpg, gif, svg.',
            'section_1_image.required' => 'The section 1 image field is required.',
            'section_1_image.image' => 'The section 1 image must be an image.',
            'section_1_image.mimes' => 'The section 1 image must be a file of type: jpeg, png, jpg, gif, svg.',
            'section_2_image.required' => 'The section 2 image field is required.',
            'section_2_image.image' => 'The section 2 image must be an image.',
            'section_2_image.mimes' => 'The section 2 image must be a file of type: jpeg, png, jpg, gif, svg.',
            'name.required' => 'The name field is required.',
            'banner_title.required' => 'The banner title field is required.',
            'section_1_title.required' => 'The section 1 title field is required.',
            'section_1_description.required' => 'The section 1 description field is required.',
            'section_2_title.required' => 'The section 2 title field is required.',
            'section_2_description.required' => 'The section 2 description field is required.',
            'section_4_title.required' => 'The section 4 title field is required.',
            'section_4_description.required' => 'The section 4 description field is required.',
        ]);

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
        if ($request->section_3_slider_title) {
            $programtypescms->section_3_slider_title = json_encode($request->section_3_slider_title);
        }
        if ($request->section_3_slider_description) {
            $programtypescms->section_3_slider_description = json_encode($request->section_3_slider_description);
        }
        if ($request->section_3_slider_image) {
            $programtypescms->section_3_slider_image = json_encode($this->storeMultipleFiles($request->section_3_slider_image, 'program_types_cms'));
        }

        // foreach($request->section_3_slider_title as $key => $title){
        //     $programtypescms->section_3_slider_title = ($key + 1) . ' '. $title . ',';
        // }
        // foreach($request->section_3_slider_description as $key1 => $description){
        //     $programtypescms->section_3_slider_description = ($key1 + 1) . ' '. $description . ',';
        // }
        // foreach($request->section_3_slider_image as $imagekey => $image){
        //     $name = date('YmdHi') . $image->getClientOriginalName();
        //     $image_path = $image->store('program_types_cms', 'public');

        //     $programtypescms->section_3_slider_image = ($imagekey + 1) . ' '. $image_path . ',';
        // }
        $programtypescms->section_4_title = $request->section_4_title;
        $programtypescms->section_4_description = $request->section_4_description;
        $programtypescms->seo_title = $request->seo_title;
        $programtypescms->seo_description = $request->seo_description;
        $programtypescms->seo_keywords = $request->seo_keywords;
        $programtypescms->save();

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
        $programtypes = ProgramType::all();
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
        if($programtypescms->name != $request->name){
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
        $programtypescms->seo->description = $request->seo_description;
        $programtypescms->seo_keywords = $request->seo_keywords;

        if($request->hasFile('banner_image')){
            $programtypescms->banner_image = $this->imageUpload($request->banner_image, 'program_types_cms');
        }
        if($request->hasFile('section_1_image')){
            $programtypescms->section_1_image = $this->imageUpload($request->section_1_image, 'program_types_cms');
        }
        if($request->hasFile('section_2_image')){
            $programtypescms->section_2_image = $this->imageUpload($request->section_2_image, 'program_types_cms');
        }

        $programtypescms->save();

        return redirect()->route('program-types-cms.index')->with('success', 'Program Type CMS updated successfully.');
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
