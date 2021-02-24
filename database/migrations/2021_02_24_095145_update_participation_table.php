<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateParticipationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participations',function($t){
            $t->unsignedBigInteger('std_id')->nullable();
            $t->foreign('std_id')->references('id')->on('users')->onUpdate('No Action')->onDelete('No Action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participations',function($t){
            $t->dropColumn('std_id');
        });
    }
}
