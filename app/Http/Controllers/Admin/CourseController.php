<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\JobOpportunity;
use App\Models\ProgramType;
use App\Traits\CreateSlug;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    use ImageTrait, CreateSlug;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.courses.list')->with(compact('courses'));
    }

    public function fetchData(Request $request)
    {
        if ($request->ajax()) {

            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $courses = Course::where('id', 'like', '%' . $query . '%')
                ->orWhere('name', 'like', '%' . $query . '%')
                ->orWhere('slug', 'like', '%' . $query . '%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(10);

            return response()->json(['data' => view('admin.pages.courses.table', compact('courses'))->render()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program_types = ProgramType::orderBy('name', 'desc')->get();
        return view('admin.pages.courses.create')->with(compact('program_types'));
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
            'program_type_id' => 'required',
            'course_type_id' => 'required',
            'name' => 'required',
            'banner_title' => 'required',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'section_1_title' => 'required',
            'section_1_description' => 'required',
            'section_2_title' => 'required',
            'section_2_left_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'section_2_right_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'section_3_title' => 'required',
            'section_4_title' => 'required',
            'section_4_step_1_title' => 'required',
            'section_4_step_1_description' => 'nullable',
            'section_4_step_2_title' => 'required',
            'section_4_step_2_description' => 'nullable',
            'section_4_step_3_title' => 'required',
            'section_4_step_3_description' => 'nullable',
            'brochure' => 'required|file|mimes:pdf',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
            'job_opportunity_title.*' => 'required',
            'job_opportunity_description.*' => 'required',
        ], [
            'program_type_id.required' => 'The program type field is required.',
            'course_type_id.required' => 'The course type field is required.',
            'name.required' => 'The name field is required.',
            'banner_title.required' => 'The banner title field is required.',
            'banner_image.required' => 'The banner image field is required.',
            'section_1_title.required' => 'The section 1 title field is required.',
            'section_1_description.required' => 'The section 1 description field is required.',
            'section_2_title.required' => 'The section 2 title field is required.',
            'section_2_left_image.required' => 'The section 2 left image field is required.',
            'section_2_right_image.required' => 'The section 2 right image field is required.',
            'section_3_title.required' => 'The section 3 title field is required.',
            'section_4_title.required' => 'The section 4 title field is required.',
            'section_4_step_1_title.required' => 'The section 4 step 1 title field is required.',
            'section_4_step_2_title.required' => 'The section 4 step 2 title field is required.',
            'section_4_step_3_title.required' => 'The section 4 step 3 title field is required.',
            'section_5_title.required' => 'The section 5 title field is required.',
            'section_5_description.required' => 'The section 5 description field is required.',
            'brochure.required' => 'The brochure field is required.',
            'brochure.file' => 'The brochure must be a file.',
            'brochure.mimes' => 'The brochure must be a file of type: pdf.',
            'job_opportunity_title.*.required' => 'The job opportunity title field is required.',
            'job_opportunity_description.*.required' => 'The job opportunity description field is required.',
        ]);

        $slug = $this->createSlug($request->name);
        // check slug is already exist or not
        $is_slug_exist = Course::where('slug', $slug)->first();
        if ($is_slug_exist) {
            $slug = $slug . '-' . time();
        }

        $course = new Course();
        $course->program_type_id = $request->program_type_id;
        $course->course_type_id = $request->course_type_id;
        $course->name = $request->name;
        $course->slug = $slug;
        $course->banner_title = $request->banner_title;
        $course->banner_image = $this->imageUpload($request->file('banner_image'), 'courses');
        $course->section_1_title = $request->section_1_title;
        $course->section_1_description = $request->section_1_description;
        $course->section_2_title = $request->section_2_title;
        $course->section_2_left_image = $this->imageUpload($request->file('section_2_left_image'), 'courses');
        $course->section_2_right_image = $this->imageUpload($request->file('section_2_right_image'), 'courses');
        $course->section_3_title = $request->section_3_title;
        $course->section_4_title = $request->section_4_title;
        $course->section_4_step_1_title = $request->section_4_step_1_title;
        $course->section_4_step_1_description = $request->section_4_step_1_description;
        $course->section_4_step_2_title = $request->section_4_step_2_title;
        $course->section_4_step_2_description = $request->section_4_step_2_description;
        $course->section_4_step_3_title = $request->section_4_step_3_title;
        $course->section_4_step_3_description = $request->section_4_step_3_description;
        $course->section_5_title = $request->section_5_title;
        $course->section_5_description = $request->section_5_description;
        $course->brochure = $this->imageUpload($request->file('brochure'), 'courses');
        $course->seo_title = $request->seo_title;
        $course->seo_description = $request->seo_description;
        $course->seo_keywords = $request->seo_keywords;
        $course->save();

        if ($request->job_opportunity_title) {
            foreach ($request->job_opportunity_title as $key => $value) {
                $job_opportunity = new JobOpportunity();
                $job_opportunity->course_id = $course->id;
                $job_opportunity->name = $value;
                $job_opportunity->description = $request->job_opportunity_description[$key];
                $job_opportunity->save();
            }
        }

        session()->flash('message', 'Course created successfully.');
        return response()->json(['status' => 'success', 'message' => 'Course created successfully.']);
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
        // return $id;
        $course = Course::find($id);
        $program_types = ProgramType::orderBy('name', 'desc')->get();
        $jobOpportunities = JobOpportunity::where('course_id', $id)->get();
        return view('admin.pages.courses.edit')->with(compact('course', 'program_types','jobOpportunities'));
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
        // return $request->all();
        $request->validate([
            'program_type_id' => 'required',
            'course_type_id' => 'required',
            'name' => 'required',
            'banner_title' => 'required',
            'section_1_title' => 'required',
            'section_1_description' => 'required',
            'section_2_title' => 'required',
            'section_3_title' => 'required',
            'section_4_title' => 'required',
            'section_4_step_1_title' => 'required',
            'section_4_step_1_description' => 'nullable',
            'section_4_step_2_title' => 'required',
            'section_4_step_2_description' => 'nullable',
            'section_4_step_3_title' => 'required',
            'section_4_step_3_description' => 'nullable',
            'section_5_title' => 'required',
            'section_5_description' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
            'job_opportunity_title.*' => 'required',
            'job_opportunity_description.*' => 'required',
        ], [
            'program_type_id.required' => 'The program type field is required.',
            'course_type_id.required' => 'The course type field is required.',
            'name.required' => 'The name field is required.',
            'banner_title.required' => 'The banner title field is required.',
            'section_1_title.required' => 'The section 1 title field is required.',
            'section_1_description.required' => 'The section 1 description field is required.',
            'section_2_title.required' => 'The section 2 title field is required.',
            'section_3_title.required' => 'The section 3 title field is required.',
            'section_4_title.required' => 'The section 4 title field is required.',
            'section_4_step_1_title.required' => 'The section 4 step 1 title field is required.',
            'section_4_step_2_title.required' => 'The section 4 step 2 title field is required.',
            'section_4_step_3_title.required' => 'The section 4 step 3 title field is required.',
            'job_opportunity_title.*.required' => 'The job opportunity title field is required.',
            'job_opportunity_description.*.required' => 'The job opportunity description field is required.',
        ]);

        $course = Course::find($id);
        if ($course->name != $request->name) {
            $slug = $this->createSlug($request->name);
            $is_slug_exist = Course::where('slug', $slug)->first();
            if ($is_slug_exist) {
                $slug = $slug . '-' . time();
            }
            $course->slug = $slug;
        }
        $course->program_type_id = $request->program_type_id;
        $course->course_type_id = $request->course_type_id;
        $course->name = $request->name;
        $course->banner_title = $request->banner_title;
        if ($request->file('banner_image')) {
            $request->validate([
                'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $course->banner_image = $this->imageUpload($request->file('banner_image'), 'courses');
        }
        $course->section_1_title = $request->section_1_title;
        $course->section_1_description = $request->section_1_description;
        $course->section_2_title = $request->section_2_title;
        if ($request->file('section_2_left_image')) {
            $request->validate([
                'section_2_left_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $course->section_2_left_image = $this->imageUpload($request->file('section_2_left_image'), 'courses');
        }

        if ($request->file('section_2_right_image')) {
            $request->validate([
                'section_2_right_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $course->section_2_right_image = $this->imageUpload($request->file('section_2_right_image'), 'courses');
        }

        $course->section_3_title = $request->section_3_title;
        $course->section_4_title = $request->section_4_title;
        $course->section_4_step_1_title = $request->section_4_step_1_title;
        $course->section_4_step_1_description = $request->section_4_step_1_description;
        $course->section_4_step_2_title = $request->section_4_step_2_title;
        $course->section_4_step_2_description = $request->section_4_step_2_description;
        $course->section_4_step_3_title = $request->section_4_step_3_title;
        $course->section_4_step_3_description = $request->section_4_step_3_description;
        $course->section_5_title = $request->section_5_title;
        $course->section_5_description = $request->section_5_description;
        if ($request->file('brochure')) {
            $request->validate([
                'brochure' => 'required|file|mimes:pdf',
            ]);
            $course->brochure = $this->imageUpload($request->file('brochure'), 'courses');
        }

        $course->seo_title = $request->seo_title;
        $course->seo_description = $request->seo_description;
        $course->seo_keywords = $request->seo_keywords;
        $course->save();

        if ($request->job_opportunity_title) {
            JobOpportunity::where('course_id', $id)->delete();
            foreach ($request->job_opportunity_title as $key => $value) {
                $job_opportunity = new JobOpportunity();
                $job_opportunity->course_id = $course->id;
                $job_opportunity->name = $value;
                $job_opportunity->description = $request->job_opportunity_description[$key];
                $job_opportunity->save();
            }
        }

        session()->flash('message', 'Course updated successfully.');
        return response()->json(['status' => 'success', 'message' => 'Course updated successfully.']);

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
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index')->with('message', 'Course deleted successfully.');
    }

    public function getCourseTypes(Request $request)
    {
        $program_type_id = $request->program_type_id;
        $course_types = ProgramType::find($program_type_id)->courseTypes;
        return response()->json(['course_types' => $course_types]);
    }
}
