<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimekeepingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timekeeping', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('day')->nullable();
            $table->integer('month')->nullable();
            $table->integer('year')->nullable();
            $table->dateTime('full_date')->nullable();
            $table->integer('student_assign_to_company_id')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('timekeeping');
    }
}
