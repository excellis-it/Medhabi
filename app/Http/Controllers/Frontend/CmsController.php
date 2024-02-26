<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CareerCmsModule;
use App\Models\CareerPageCms;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function career()
    {
        $career = CareerPageCms::orderByDesc('id')->first();
        $careerModules = CareerCmsModule::all();
        return view('frontend.pages.career')->with(compact('career', 'careerModules'));
    }
}
