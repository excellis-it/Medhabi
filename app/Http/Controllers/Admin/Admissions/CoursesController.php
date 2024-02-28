<?php

namespace App\Http\Controllers\Admin\Admissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return view('admin.admissions.courses.index');
    }
}
