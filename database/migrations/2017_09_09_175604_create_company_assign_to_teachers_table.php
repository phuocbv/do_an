<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyAssignToTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_assign_to_teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('assign_date')->nullable();
            $table->integer('teacher_attend_id')->nullable();
            $table->integer('company_attend_id')->nullable();
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
        Schema::dropIfExists('company_assign_to_teacher');
    }
}
