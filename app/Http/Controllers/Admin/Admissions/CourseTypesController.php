<?php

namespace App\Http\Controllers\Admin\Admissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseTypesController extends Controller
{
    public function index()
    {
        return view('admin.admissions.course_types.index');
    }
}
