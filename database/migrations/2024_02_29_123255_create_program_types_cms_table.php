<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTypesCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_types_cms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_description')->nullable();
            $table->string('section_1_title')->nullable();
            $table->longText('section_1_description')->nullable();
            $table->string('section_1_image')->nullable();
            $table->string('section_2_title')->nullable();
            $table->longText('section_2_description')->nullable();
            $table->string('section_2_image')->nullable();
            $table->string('section_3_title')->nullable();
            $table->string('section_3_description')->nullable();
            $table->string('section_3_slider_title')->nullable();
            $table->longText('section_3_slider_description')->nullable();
            $table->string('section_3_slider_image')->nullable();
            $table->string('section_4_title')->nullable();
            $table->string('section_4_description')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
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
        Schema::dropIfExists('program_types_cms');
    }
}
