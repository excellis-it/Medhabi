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
            $table->string('section_1_title')->nullable();
            $table->longText('section_1_description')->nullable();
            $table->string('section_2_title')->nullable();
            $table->string('section_2_left_image')->nullable();
            $table->string('section_2_right_image')->nullable();
            $table->string('section_3_title')->nullable();
            $table->string('section_4_title')->nullable();
            $table->string('section_4_step_1_title')->nullable();
            $table->longText('section_4_step_1_description')->nullable();
            $table->string('section_4_step_2_title')->nullable();
            $table->longText('section_4_step_2_description')->nullable();
            $table->string('section_4_step_3_title')->nullable();
            $table->longText('section_4_step_3_description')->nullable();
            $table->string('section_5_title')->nullable();
            $table->text('section_5_description')->nullable();
            $table->string('brochure')->nullable();
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
