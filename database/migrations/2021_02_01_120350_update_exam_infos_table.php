<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateExamInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exam_infos',function($t){
            $t->unsignedBigInteger('teacher_id');
            $t->foreign('teacher_id')->references('id')->on('users')->onUpdate('No Action')->onDelete('No Action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exam_infos',function($t){
            $t->dropColumn('teacher_id');
        });
    }
}
