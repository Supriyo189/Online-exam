<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function($table){
            $table->string('department',150)->nullable();
            $table->string('StdID',15)->nullable();
            $table->string('accountType',150)->default('Student');
            $table->string('isVerified',150)->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function($table){
            $table->dropColumn('department','stdID','accountType','isVerified');
        });
    }
}
