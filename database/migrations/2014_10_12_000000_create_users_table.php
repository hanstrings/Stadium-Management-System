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
            $table->increments('id');
            $table->string('username');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->integer('age')->unsigned()->nullable();
            $table->string('phone')->nullable();
            $table->string('token')->nullable();
            $table->string('avatar')->default('default.png');
            $table->integer('team_id')->references('id')->on('teams')->nullable();
            //$table->foreign('team_id')->references('id')->on('teams');
            $table->integer('player_id')->references('id')->on('players')->nullable();
            //$table->foreign('team_id')->references('id')->on('teams');
            $table->rememberToken();
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
