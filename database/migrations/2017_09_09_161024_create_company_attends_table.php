<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyAttendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_attends', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_quantity')->nullable();
            $table->integer('current_student_quantity')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('internship_id')->nullable();
            $table->string('require_skill')->nullable();
            $table->dateTime('attend_date')->nullable();
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
        Schema::dropIfExists('company_attends');
    }
}
