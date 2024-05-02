<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseProgrammeOutcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_programme_outcomes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_id')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->enum('type', ['programme_specific_outcome', 'generic_programme_outcome'])->default('programme_specific_outcome');
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
        Schema::dropIfExists('course_programme_outcomes');
    }
}
