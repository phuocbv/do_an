<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyValueStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_value_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('general_value')->nullable();
            $table->integer('it')->nullable();
            $table->integer('work')->nullable();
            $table->integer('learn_work')->nullable();
            $table->integer('manage')->nullable();
            $table->integer('english')->nullable();
            $table->integer('teamwork')->nullable();
            $table->dateTime('value_date')->nullable();
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
        Schema::dropIfExists('company_value_students');
    }
}
