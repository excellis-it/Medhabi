<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\ApplicationProcess;
use App\Models\Blog;
use App\Models\CareerCmsModule;
use App\Models\CareerPageCms;
use App\Models\Course;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Job;
use App\Models\JobOpportunity;
use App\Models\KeyMilestone;
use App\Models\Media;
use App\Models\News;
use App\Models\OurCoreValue;
use App\Models\OurPartnership;
use App\Models\ProgramTypesCMS;
use App\Models\School;
use App\Models\SocialMedia;
use App\Models\StaticPage;
use App\Models\Testimonial;
use App\Models\TVC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CmsController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();
        $testimonials = Testimonial::where('type', 'Student')->orderBy('id', 'desc')->get();
        $achievements = Achievement::orderBy('id', 'desc')->get();
        $key_milestones = KeyMilestone::orderBy('id', 'desc')->get();
        $partnerships['digital'] = OurPartnership::where('type', 'Digital')->orderBy('id', 'desc')->get();
        $partnerships['industry'] = OurPartnership::where('type', 'Industry')->orderBy('id', 'desc')->get();
        $partnerships['knowledge'] = OurPartnership::where('type', 'Knowledge')->orderBy('id', 'desc')->get();
        $events = Event::orderBy('id', 'desc')->limit(4)->get();
        $medias = Media::orderBy('id', 'desc')->limit(4)->get();
        $tvcs = TVC::orderBy('id', 'desc')->limit(4)->get();
        $schools = School::orderBy('id', 'desc')->get();
        $social_media = SocialMedia::orderBy('id', 'desc')->get();
        return view('frontend.home')->with(compact('blogs', 'testimonials', 'achievements', 'key_milestones', 'partnerships', 'events', 'medias', 'tvcs', 'schools', 'social_media'));
    }
    public function career()
    {
        $career = CareerPageCms::orderByDesc('id')->first();
        $careerModules = CareerCmsModule::all();
        $testimonials = Testimonial::where('type', 'Student')->orderBy('id', 'desc')->get();
        $faqs = Faq::orderBy('id', 'desc')->get();
        $our_core_values = OurCoreValue::get();
        $jobs = Job::orderBy('id', 'desc')->where('status', 1)->get();
        return view('frontend.pages.career')->with(compact('career', 'careerModules', 'testimonials', 'faqs', 'our_core_values', 'jobs'));
    }

    public function jobSearch(Request $request)
    {
        $jobs = Job::orderBy('id', 'desc')->where('status', 1);
        if ($request->has('search')) {
            $jobs->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('location', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%')
                ->orWhere('opening_for', 'like', '%' . $request->search . '%');
        }
        $jobs = $jobs->get();
        return response()->json(['data' => view('frontend.pages.filter.career-job-list-filter', compact('jobs'))->render()]);
    }

    public function school($slug)
    {
        $school = School::where('slug', $slug)->first();
        $partnerships = OurPartnership::orderBy('id', 'desc')->get();
        $testimonials = Testimonial::where('type', 'Student')->orderBy('id', 'desc')->get();
        $achievements = Achievement::orderBy('id', 'desc')->get();
        $key_milestones = KeyMilestone::orderBy('id', 'desc')->get();
        // group by program name school courses
        $school_courses = $school->schoolCourses()
        ->with(['course' => function ($query) {
            $query->with(['programType' => function ($query) {
                $query->select('id', 'name');
            }]);
        }])
        ->get()
        ->map(function ($item) {
            if (isset($item['course']['programType'])) {
                $item['program_type_name'] = $item['course']['programType']['name'];
            } else {
                $item['program_type_name'] = null;
            }
            return $item;
        })
        ->groupBy('program_type_name')
        ->toArray();

        // dd($school_courses);
        return view('frontend.pages.school')->with(compact('school', 'partnerships', 'testimonials', 'achievements', 'key_milestones', 'school_courses'));
    }

    public function schoolCourses($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $our_partnerships = OurPartnership::orderBy('id', 'desc')->get();
        $other_courses = Course::where('id', '!=', $course->id)->orderBy('name', 'asc')->get();
        return view('frontend.pages.course')->with(compact('course', 'our_partnerships', 'other_courses'));
    }

    public function downloadBrochure($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $file = Storage::disk('public')->path($course->brochure);
        return response()->download($file);
    }

    public function tvc()
    {
        $tvcs = TVC::orderBy('id', 'desc')->get();
        return view('frontend.pages.tvc')->with(compact('tvcs'));
    }

    public function media()
    {
        $medias = Media::orderBy('id', 'desc')->get();
        return view('frontend.pages.media')->with(compact('medias'));
    }

    public function event()
    {
        $events = Event::orderBy('id', 'desc')->get();
        return view('frontend.pages.event')->with(compact('events'));
    }

    public function admission()
    {
        $url = url()->current();
        $slug = explode('/', $url);
        $slug = end($slug);
        $program = ProgramTypesCMS::where('slug', $slug)->first();
        $achievements = Achievement::orderBy('id', 'desc')->get();
        $key_milestones = KeyMilestone::orderBy('id', 'desc')->get();
        $application_process = ApplicationProcess::orderBy('id', 'desc')->get();
        $courses = Course::where('program_type_id', $program->program_type_id)->orderBy('name', 'asc')->get();
        // dd($courses);
        return view('frontend.pages.admission')->with(compact('program', 'achievements', 'key_milestones', 'application_process', 'courses'));
    }

    public function courseListFilter(Request $request)
    {
        if ($request->ajax()) {
            $search = $request->get('search');
            $program_type_id = $request->get('program_type');
            $course_id = $request->get('course_type');

            $courses = Course::orderBy('id', 'desc');

            if ($search) {
                $courses->where('name', 'like', '%' . $search . '%');
            }

            if ($program_type_id) {
                $courses->where('program_type_id', $program_type_id);
            }

            if ($course_id) {
                $courses->where('course_type_id', $course_id);
            }

            $courses = $courses->get();

            return response()->json(['status' => true, 'data' => view('frontend.pages.filter.course-list', compact('courses'))->render()]);
        }
    }

    public function page(Request $request, $slug = null)
    {
        // return $slug;
        $page = StaticPage::whereHas('menu', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->first();
        if (!$page) {
            abort(404);
        }
        return view('frontend.pages.static-page')->with(compact('page'));
    }

    public function internationalProgramme()
    {
        return view('frontend.pages.international-programme');
    }
    public function thankyou()
    {
        return view('frontend.pages.thank-you');
    }

    public function fromTheChancellorDesk()
    {
        return view('frontend.pages.from-the-chancellor-desk');
    }

    public function healthScience()
    {
        return view('frontend.pages.health-science');
    }

    public function bTech()
    {
        return view('frontend.pages.b-tech');
    }

    public function mba()
    {
        return view('frontend.pages.mba');
    }

    public function mca()
    {
        return view('frontend.pages.mca');
    }
    public function bdes()
    {
        return view('frontend.pages.b-des');
    }
    public function appliedscience()
    {
        return view('frontend.pages.applied-science-technology');
    }
    public function hospitality()
    {
        return view('frontend.pages.hospitality-tourism');
    }

    public function courses()
    {
        return view('frontend.pages.courses');
    }

    public function application()
    {
        return view('frontend.pages.application');
    }

    public function contactUs()
    {
        return view('frontend.pages.contact-us');
    }

    public function news()
    {
        $newses = News::orderBy('id', 'desc')->get();
        return view('frontend.pages.news')->with(compact('newses'));
    }

    public function newsDetails($slug)
    {
        $news = News::where('slug', $slug)->first();
        if (!$news) {
            return redirect()->route('news');
        }
        return view('frontend.pages.news-detail')->with(compact('news'));
    }

    public function wise()
    {
        return view('frontend.pages.wise');
    }
    public function partnarPage()
    {
        return view('frontend.pages.partnar');
    }
    public function thankYouNew()
    {
        return view('frontend.pages.thank_you_by_taslim');
    }
}
