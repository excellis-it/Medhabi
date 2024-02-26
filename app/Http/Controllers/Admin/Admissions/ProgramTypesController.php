<?php

namespace App\Http\Controllers\Admin\Admissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramTypesController extends Controller
{
    public function index()
    {
        return view('admin.admissions.program_types.index');
    }
}
