<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('banner_image')->nullable();
            $table->string('section_1_title')->nullable();
            $table->string('section_1_description')->nullable();
            $table->string('section_2_title')->nullable();
            $table->longText('section_2_description')->nullable();
            $table->string('section_2_image')->nullable();
            $table->string('section_3_title')->nullable();
            $table->longText('section_3_description')->nullable();
            $table->string('section_4_title')->nullable();
            $table->string('section_5_title')->nullable();
            $table->longText('section_5_description')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
