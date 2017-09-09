<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('gender')->nullable();
            $table->integer('grade')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('major')->nullable();
            $table->string('student_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('english')->nullable();
            $table->string('programing_skill')->nullable();
            $table->string('best_programing_skill')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('students');
    }
}
