<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBackupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_backup', function (Blueprint $table) {
            $table->integer('user_id');
            $table->primary('user_id');
            $table->string('username');
            $table->string('avatar')->nullable();
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->integer('age')->unsigned()->nullable();
            $table->string('phone')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_backup');
    }
}
