<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseAcademicFramework;
use App\Models\CourseIndustryLearning;
use App\Models\CourseLearningDoing;
use App\Models\CourseProgrammeOutcome;
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
            'section_1_description' => 'required',
            'duration_title' => 'required',
            'duration_description' => 'required',
            'eligibility_title' => 'required',
            'industry_led_learning_title' => 'required',
            'industry_led_learning_description' => 'required',
            'academic_framework_title' => 'required',
            'academic_framework_description' => 'required',
            'programme_outcomes_title' => 'required',
            'learning_by_doing_title' => 'required',
            'industry_partners_title' => 'required',
            'programs_to_explore_title' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
            'industry_led_learning_category_title.*' => 'required',
            'industry_led_learning_category_description.*' => 'required',
            'academic_framework_category_title.*' => 'required',
            'academic_framework_category_description.*' => 'required',
            'programme_category_title.*' => 'required',
            'programme_category_description.*' => 'required',
            'learning_by_doing_image' => 'required',
        ],[
            'industry_led_learning_category_title.*.required' => 'The industry led learning category title field is required.',
            'industry_led_learning_category_description.*.required' => 'The industry led learning category description field is required.',
            'academic_framework_category_title.*.required' => 'The academic framework category title field is required.',
            'academic_framework_category_description.*.required' => 'The academic framework category description field is required.',
            'programme_category_title.*.required' => 'The programme category title field is required.',
            'programme_category_description.*.required' => 'The programme category description field is required.',
            'learning_by_doing_image.required' => 'The learning by doing image field is required.',
            'learning_by_doing_image.image' => 'The learning by doing image must be an image.',
            'learning_by_doing_image.mimes' => 'The learning by doing image must be a file of type: jpeg, png, jpg, gif, svg.',
            'banner_image.required' => 'The banner image field is required.',
            'banner_image.image' => 'The banner image must be an image.',
            'banner_image.mimes' => 'The banner image must be a file of type: jpeg, png, jpg, gif, svg.',
            'program_type_id.required' => 'The program type field is required.',
            'course_type_id.required' => 'The course type field is required.',
            'name.required' => 'The name field is required.',
            'banner_title.required' => 'The banner title field is required.',
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
        $course->section_1_description = $request->section_1_description;
        $course->duration_title = $request->duration_title;
        $course->duration_description = $request->duration_description;
        $course->eligibility_title = $request->eligibility_title;
        $course->industry_led_learning_title = $request->industry_led_learning_title;
        $course->industry_led_learning_description = $request->industry_led_learning_description;
        $course->academic_framework_title = $request->academic_framework_title;
        $course->academic_framework_description = $request->academic_framework_description;
        $course->programme_outcomes_title = $request->programme_outcomes_title;
        $course->learning_by_doing_title = $request->learning_by_doing_title;
        $course->industry_partners_title = $request->industry_partners_title;
        $course->programs_to_explore_title = $request->programs_to_explore_title;
        $course->seo_title = $request->seo_title;
        $course->seo_description = $request->seo_description;
        $course->seo_keywords = $request->seo_keywords;
        $course->save();

        if ($request->industry_led_learning_category_title) {
            foreach ($request->industry_led_learning_category_title as $key => $value) {
                $industry_led_learning_category = new CourseIndustryLearning();
                $industry_led_learning_category->course_id = $course->id;
                $industry_led_learning_category->title = $value;
                $industry_led_learning_category->description = $request->industry_led_learning_category_description[$key];
                if ($request->file('industry_led_learning_category_image') && $request->file('industry_led_learning_category_image')[$key]) {
                    $industry_led_learning_category->image = $this->imageUpload($request->file('industry_led_learning_category_image')[$key], 'courses');
                }
                $industry_led_learning_category->save();
            }
        }

        if ($request->academic_framework_category_title) {
            foreach ($request->academic_framework_category_title as $key => $value) {
                $academic_framework_category = new CourseAcademicFramework();
                $academic_framework_category->course_id = $course->id;
                $academic_framework_category->title = $value;
                $academic_framework_category->description = $request->academic_framework_category_description[$key];
                if ($request->file('academic_framework_category_image') && $request->file('academic_framework_category_image')[$key]) {
                    $academic_framework_category->image = $this->imageUpload($request->file('academic_framework_category_image')[$key], 'courses');
                }
                $academic_framework_category->save();
            }
        }

        if ($request->programme_category_title) {
            foreach ($request->programme_category_title as $key => $value) {
                $programme_category = new CourseProgrammeOutcome();
                $programme_category->course_id = $course->id;
                $programme_category->title = $value;
                $programme_category->description = $request->programme_category_description[$key];
                $programme_category->type = $request->programme_category_type[$key];
                $programme_category->save();
            }
        }

        if ($request->file('learning_by_doing_image')) {
            foreach ($request->file('learning_by_doing_image') as $key => $value) {
                $learning_by_doing_image = new CourseLearningDoing();
                $learning_by_doing_image->course_id = $course->id;
                $learning_by_doing_image->image = $this->imageUpload($request->file('learning_by_doing_image')[$key], 'courses');
                $learning_by_doing_image->save();
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
        return view('admin.pages.courses.edit')->with(compact('course', 'program_types', 'jobOpportunities'));
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
            'program_type_id' => 'required',
            'course_type_id' => 'required',
            'name' => 'required',
            'banner_title' => 'required',
            'section_1_description' => 'required',
            'duration_title' => 'required',
            'duration_description' => 'required',
            'eligibility_title' => 'required',
            'industry_led_learning_title' => 'required',
            'industry_led_learning_description' => 'required',
            'academic_framework_title' => 'required',
            'academic_framework_description' => 'required',
            'programme_outcomes_title' => 'required',
            'learning_by_doing_title' => 'required',
            'industry_partners_title' => 'required',
            'programs_to_explore_title' => 'required',
            'seo_title' => 'nullable',
            'seo_description' => 'nullable',
            'seo_keywords' => 'nullable',
            'industry_led_learning_category_title.*' => 'required',
            'industry_led_learning_category_description.*' => 'required',
            'academic_framework_category_title.*' => 'required',
            'academic_framework_category_description.*' => 'required',
            'programme_category_title.*' => 'required',
            'programme_category_description.*' => 'required',
        ],[
            'industry_led_learning_category_title.*.required' => 'The industry led learning category title field is required.',
            'industry_led_learning_category_description.*.required' => 'The industry led learning category description field is required.',
            'academic_framework_category_title.*.required' => 'The academic framework category title field is required.',
            'academic_framework_category_description.*.required' => 'The academic framework category description field is required.',
            'programme_category_title.*.required' => 'The programme category title field is required.',
            'programme_category_description.*.required' => 'The programme category description field is required.',
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
        $course->section_1_description = $request->section_1_description;
        $course->duration_title = $request->duration_title;
        $course->duration_description = $request->duration_description;
        $course->eligibility_title = $request->eligibility_title;
        $course->industry_led_learning_title = $request->industry_led_learning_title;
        $course->industry_led_learning_description = $request->industry_led_learning_description;
        $course->academic_framework_title = $request->academic_framework_title;
        $course->academic_framework_description = $request->academic_framework_description;
        $course->programme_outcomes_title = $request->programme_outcomes_title;
        $course->learning_by_doing_title = $request->learning_by_doing_title;
        $course->industry_partners_title = $request->industry_partners_title;
        $course->programs_to_explore_title = $request->programs_to_explore_title;
        $course->seo_title = $request->seo_title;
        $course->seo_description = $request->seo_description;
        $course->seo_keywords = $request->seo_keywords;
        $course->save();

        if ($request->industry_led_learning_category_title) {
            foreach ($request->industry_led_learning_category_title as $key => $value) {
                if ($request->industry_led_learning_category_id[$key] && $request->industry_led_learning_category_id[$key]) {
                    $industry_led_learning_category = CourseIndustryLearning::find($request->industry_led_learning_category_id[$key]);
                } else {
                    $industry_led_learning_category = new CourseIndustryLearning();
                }
                $industry_led_learning_category->course_id = $course->id;
                $industry_led_learning_category->title = $value;
                $industry_led_learning_category->description = $request->industry_led_learning_category_description[$key];
                if ($request->file('industry_led_learning_category_image') && $request->file('industry_led_learning_category_image')[$key]) {
                    $industry_led_learning_category->image = $this->imageUpload($request->file('industry_led_learning_category_image')[$key], 'courses');
                }
                $industry_led_learning_category->save();
            }
        }

        if ($request->academic_framework_category_title) {
            foreach ($request->academic_framework_category_title as $key => $value) {
                if (isset($request->academic_framework_category_id[$key]) && $request->academic_framework_category_id[$key]) {
                    $academic_framework_category = CourseAcademicFramework::find($request->academic_framework_category_id[$key]);
                } else {
                    $academic_framework_category = new CourseAcademicFramework();
                }

                $academic_framework_category->course_id = $course->id;
                $academic_framework_category->title = $value;
                $academic_framework_category->description = $request->academic_framework_category_description[$key];
                if ($request->file('academic_framework_category_image') && $request->file('academic_framework_category_image')[$key]) {
                    $academic_framework_category->image = $this->imageUpload($request->file('academic_framework_category_image')[$key], 'courses');
                }
                $academic_framework_category->save();
            }
        }

        if ($request->programme_category_title) {
            CourseProgrammeOutcome::where('course_id', $course->id)->delete();
            foreach ($request->programme_category_title as $key => $value) {
                $programme_category = new CourseProgrammeOutcome();
                $programme_category->course_id = $course->id;
                $programme_category->title = $value;
                $programme_category->description = $request->programme_category_description[$key];
                $programme_category->type = $request->programme_category_type[$key];
                $programme_category->save();
            }
        }

        if ($request->file('learning_by_doing_image')) {
            foreach ($request->file('learning_by_doing_image') as $key => $value) {
                $learning_by_doing_image = new CourseLearningDoing();
                $learning_by_doing_image->course_id = $course->id;
                $learning_by_doing_image->image = $this->imageUpload($request->file('learning_by_doing_image')[$key], 'courses');
                $learning_by_doing_image->save();
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

    public function deleteLearningByDoingImage(Request $request)
    {
        $course_learning_doing = CourseLearningDoing::find($request->id);
        $course_learning_doing->delete();
        return response()->json(['status' => 'success', 'message' => 'Image deleted successfully.']);
    }
}
