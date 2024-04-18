<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('program_type_id')->nullable();
            $table->bigInteger('course_type_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_image')->nullable();
            $table->longText('section_1_description')->nullable();
            $table->string('duration_title')->nullable();
            $table->text('duration_description')->nullable();
            $table->string('eligibility_title')->nullable();
            $table->string('industry_led_learning_title')->nullable();
            $table->text('industry_led_learning_description')->nullable();
            $table->text('academic_framework_title')->nullable();
            $table->text('academic_framework_description')->nullable();
            $table->string('programme_outcomes_title')->nullable();
            $table->string('learning_by_doing_title')->nullable();
            $table->string('industry_partners_title')->nullable();
            $table->string('programs_to_explore_title')->nullable();
            $table->string('seo_title')->nullable();
            $table->longText('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
