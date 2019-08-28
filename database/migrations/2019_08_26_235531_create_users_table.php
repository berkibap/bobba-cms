<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('password');
            $table->string('mail');
            $table->string('last_login');
            $table->string('last_online');
            $table->string('motto');
            $table->string('look');
            $table->string('gender');
            $table->string('rank');
            $table->string('credits');
            $table->string('pixels');
            $table->string('points');
            $table->string('online');
            $table->string('auth_ticket');
            $table->string('machine_id');
            $table->string('ip_register');
            $table->string('ip_current');
            $table->string('home_room');
            $table->string('pin');
            $table->string('job');
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
        Schema::dropIfExists('users');
    }
}
