<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerPageCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_page_cms', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->string('banner_title')->nullable();
            $table->text('banner_description')->nullable();
            $table->string('section_1_title')->nullable();
            $table->text('section_1_description')->nullable();
            $table->string('section_1_image')->nullable();
            $table->string('section_1_url')->nullable();
            $table->string('section_2_title')->nullable();
            $table->string('section_2_description')->nullable();
            $table->string('section_3_image_1')->nullable();
            $table->string('section_3_title_1')->nullable();
            $table->text('section_3_description_1')->nullable();
            $table->string('section_3_image_2')->nullable();
            $table->string('section_3_title_2')->nullable();
            $table->text('section_3_description_2')->nullable();
            $table->string('section_3_image_3')->nullable();
            $table->string('section_3_title_3')->nullable();
            $table->text('section_3_description_3')->nullable();
            $table->string('section_4_title')->nullable();
            $table->text('section_4_description')->nullable();
            $table->string('section_4_image')->nullable();
            $table->string('section_5_title')->nullable();
            $table->text('section_5_description')->nullable();
            $table->string('section_6_title')->nullable();
            $table->text('section_6_description')->nullable();
            $table->string('section_6_image')->nullable();
            $table->string('section_7_title')->nullable();
            $table->text('section_7_description')->nullable();
            $table->string('section_8_title')->nullable();
            $table->text('section_8_description')->nullable();
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
        Schema::dropIfExists('career_page_cms');
    }
}
