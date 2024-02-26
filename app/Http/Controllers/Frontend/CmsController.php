<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CareerCmsModule;
use App\Models\CareerPageCms;
use App\Models\Faq;
use App\Models\Job;
use App\Models\OurCoreValue;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class CmsController extends Controller
{
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
}
