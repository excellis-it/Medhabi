<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\School;
use App\Models\SchoolCourse;
use App\Models\SchoolMedhaviEdge;
use App\Traits\CreateSlug;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    use ImageTrait, CreateSlug;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.schools.list')->with(compact('schools'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $schools = School::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhere('slug', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(10);

            return response()->json(['data' => view('admin.pages.schools.table', compact('schools'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::orderBy('name', 'asc')->get();
        return view('admin.pages.schools.create')->with(compact('courses'));
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
        $request->validate([
            'course_id.*' => 'required',
            'name' => 'required',
            'banner_title' => 'required',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'section_1_description' => 'required',
            'section_2_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'section_2_url' => 'required',
            'medhavi_edge_title' => 'required',
            'program_levels_title' => 'required',
            'program_levels_description' => 'required',
            'expert_speak_title' => 'required',
            'gallery_title' => 'required',
            'gallery_description' => 'required',
            'our_partners_title' => 'required',
            'our_partners_description' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
        ]);

        $slug = $this->createSlug($request->name);
        // check slug is already exist or not
        $is_slug_exist = School::where('slug', $slug)->first();
        if ($is_slug_exist) {
            $slug = $slug . '-' . time();
        }

        $school = new School();
        $school->name = $request->name;
        $school->banner_title = $request->banner_title;
        $school->slug = $slug;
        $school->banner_image = $this->imageUpload($request->file('banner_image'), 'schools');
        $school->section_1_description = $request->section_1_description;
        $school->section_2_image = $this->imageUpload($request->file('section_2_image'), 'schools');
        $school->section_2_url = $request->section_2_url;
        $school->medhavi_edge_title = $request->medhavi_edge_title;
        $school->program_levels_title = $request->program_levels_title;
        $school->program_levels_description = $request->program_levels_description;
        $school->expert_speak_title = $request->expert_speak_title;
        $school->gallery_title = $request->gallery_title;
        $school->gallery_description = $request->gallery_description;
        $school->our_partners_title = $request->our_partners_title;
        $school->our_partners_description = $request->our_partners_description;
        $school->seo_title = $request->seo_title;
        $school->seo_description = $request->seo_description;
        $school->seo_keywords = $request->seo_keywords;
        $school->save();

        if ($request->course_id) {
            foreach ($request->course_id as $course_id) {
                $schoolCourse = new SchoolCourse();
                $schoolCourse->school_id = $school->id;
                $schoolCourse->course_id = $course_id;
                $schoolCourse->save();
            }
        }

        if ($request->school_medhavi_edges_title) {
            foreach ($request->school_medhavi_edges_title as $key => $title) {
                $schoolMedhaviEdge = new SchoolMedhaviEdge();
                $schoolMedhaviEdge->school_id = $school->id;
                $schoolMedhaviEdge->title = $title;
                $schoolMedhaviEdge->description = $request->school_medhavi_edges_description[$key];
                if (isset($request->school_medhavi_edges_image[$key]) && $request->school_medhavi_edges_image[$key] != null) {
                    $schoolMedhaviEdge->image = $this->imageUpload($request->school_medhavi_edges_image[$key], 'schools');
                }
                $schoolMedhaviEdge->save();
            }
        }

        return redirect()->route('schools.index')->with('message', 'School created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = School::find($id);
        $courses = Course::orderBy('name', 'asc')->get();
        return view('admin.pages.schools.edit')->with(compact('school', 'courses'));
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
            'course_id.*' => 'required',
            'name' => 'required',
            'banner_title' => 'required',
            'section_1_description' => 'required',
            'section_2_url' => 'required',
            'medhavi_edge_title' => 'required',
            'program_levels_title' => 'required',
            'program_levels_description' => 'required',
            'expert_speak_title' => 'required',
            'gallery_title' => 'required',
            'gallery_description' => 'required',
            'our_partners_title' => 'required',
            'our_partners_description' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
        ]);

        $school = School::find($id);
        if ($school->name != $request->name) {
            $slug = $this->createSlug($request->name);
            $is_slug_exist = school::where('slug', $slug)->first();
            if ($is_slug_exist) {
                $slug = $slug . '-' . time();
            }
            $school->slug = $slug;
        }
        $school->name = $request->name;
        $school->banner_title = $request->banner_title;
        $school->section_1_description = $request->section_1_description;
        $school->section_2_url = $request->section_2_url;
        $school->medhavi_edge_title = $request->medhavi_edge_title;
        $school->program_levels_title = $request->program_levels_title;
        $school->program_levels_description = $request->program_levels_description;
        $school->expert_speak_title = $request->expert_speak_title;
        $school->gallery_title = $request->gallery_title;
        $school->gallery_description = $request->gallery_description;
        $school->our_partners_title = $request->our_partners_title;
        $school->our_partners_description = $request->our_partners_description;
        $school->seo_title = $request->seo_title;
        $school->seo_description = $request->seo_description;
        $school->seo_keywords = $request->seo_keywords;
        if ($request->hasFile('banner_image')) {
            $school->banner_image = $this->imageUpload($request->file('banner_image'), 'schools');
        }
        if ($request->hasFile('section_2_image')) {
            $school->section_2_image = $this->imageUpload($request->file('section_2_image'), 'schools');
        }
        $school->save();

        if ($request->course_id) {
            SchoolCourse::where('school_id', $id)->delete();
            foreach ($request->course_id as $course_id) {
                $schoolCourse = new SchoolCourse();
                $schoolCourse->school_id = $school->id;
                $schoolCourse->course_id = $course_id;
                $schoolCourse->save();
            }
        }

        if ($request->school_medhavi_edges_title) {
            foreach ($request->school_medhavi_edges_title as $key => $title) {
               if (isset($request->school_medhavi_edges_id[$key]) && $request->school_medhavi_edges_id[$key] != null) {
                    $schoolMedhaviEdge = SchoolMedhaviEdge::find($request->school_medhavi_edges_id[$key]);
                    $schoolMedhaviEdge->school_id = $school->id;
                    $schoolMedhaviEdge->title = $title;
                    $schoolMedhaviEdge->description = $request->school_medhavi_edges_description[$key];
                    if (isset($request->school_medhavi_edges_image[$key]) && $request->school_medhavi_edges_image[$key] != null) {
                        $schoolMedhaviEdge->image = $this->imageUpload($request->school_medhavi_edges_image[$key], 'schools');
                    }
                    $schoolMedhaviEdge->save();
                } else {
                    $schoolMedhaviEdge = new SchoolMedhaviEdge();
                    $schoolMedhaviEdge->school_id = $school->id;
                    $schoolMedhaviEdge->title = $title;
                    $schoolMedhaviEdge->description = $request->school_medhavi_edges_description[$key];
                    if (isset($request->school_medhavi_edges_image[$key]) && $request->school_medhavi_edges_image[$key] != null) {
                        $schoolMedhaviEdge->image = $this->imageUpload($request->school_medhavi_edges_image[$key], 'schools');
                    }
                    $schoolMedhaviEdge->save();
               }
            }
        }

        return redirect()->route('schools.index')->with('message', 'School updated successfully.');
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
        $school = School::findOrfail($request->id);
        $school->delete();
        return redirect()->route('schools.index')->with('message', 'School deleted successfully.');
    }
}
