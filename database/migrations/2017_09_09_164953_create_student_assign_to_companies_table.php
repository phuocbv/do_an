<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAssignToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_assign_to_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_point')->nullable();
            $table->string('company_point')->nullable();
            $table->dateTime('register_date')->nullable();
            $table->integer('student_attend_id')->nullable();
            $table->integer('company_attend_id')->nullable();
            $table->string('assign_work')->nullable();
            $table->string('subject')->nullable();
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
        Schema::dropIfExists('student_assign_to_companies');
    }
}
