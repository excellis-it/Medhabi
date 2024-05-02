<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function schoolCourses()
    {
        return $this->hasMany(SchoolCourse::class);
    }

    public function medhaviEdges()
    {
        return $this->hasMany(SchoolMedhaviEdge::class);
    }
}
