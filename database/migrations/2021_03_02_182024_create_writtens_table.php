<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWrittensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('writtens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_code');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('No Action')->onDelete('No Action');
            $table->unsignedBigInteger('examtype_id');
            $table->foreign('examtype_id')->references('id')->on('examtypes')->onUpdate('No Action')->onDelete('No Action');
            $table->string('course_title');
            $table->string('course_code');
            $table->integer('number_of_question');
            $table->string('marks');
            $table->string('time');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('users')->onUpdate('No Action')->onDelete('No Action');
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
        Schema::dropIfExists('writtens');
    }
}
