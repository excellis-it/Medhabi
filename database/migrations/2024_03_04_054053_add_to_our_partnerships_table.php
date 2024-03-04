<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToOurPartnershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('our_partnerships', function (Blueprint $table) {
            $table->enum('type', ['Digital', 'Industry', 'Knowledge'])->default('Digital');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('our_partnerships', function (Blueprint $table) {
            //
        });
    }
}
