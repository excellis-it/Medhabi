<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function programType()
    {
        return $this->belongsTo(ProgramType::class);
    }

    public function jobOpportunities()
    {
        return $this->hasMany(JobOpportunity::class);
    }

    public function courseLearningDoings()
    {
        return $this->hasMany(CourseLearningDoing::class);
    }

    public function courseAcademicFrameworks()
    {
        return $this->hasMany(CourseAcademicFramework::class);
    }

    public function courseIndustryLearnings()
    {
        return $this->hasMany(CourseIndustryLearning::class);
    }

    public function courseProgramOutcomesGenerics()
    {
        return $this->hasMany(CourseProgrammeOutcome::class)->where('type', 'generic_programme_outcome');
    }

    public function courseProgramOutcomesSpecifics()
    {
        return $this->hasMany(CourseProgrammeOutcome::class, 'course_id')->where('type', 'programme_specific_outcome');
    }

    public function courseProgrammeOutcomes()
    {
        return $this->hasMany(CourseProgrammeOutcome::class);
    }

}
