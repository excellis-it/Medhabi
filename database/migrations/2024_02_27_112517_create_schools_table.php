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
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_image')->nullable();
            
            $table->string('section_1_description')->nullable();
            $table->string('section_2_image')->nullable();
            $table->longText('section_2_url')->nullable();
            $table->string('medhavi_edge_title')->nullable();
            $table->string('program_levels_title')->nullable();
            $table->longText('program_levels_description')->nullable();
            $table->string('expert_speak_title')->nullable();
            $table->string('gallery_title')->nullable();
            $table->string('gallery_description')->nullable();
            $table->string('our_partners_title')->nullable();
            $table->longText('our_partners_description')->nullable();

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
        Schema::dropIfExists('schools');
    }
}
