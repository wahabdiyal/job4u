<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('skill')->nullable();
            $table->string('phone');
            $table->string('resume')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('country')->nullable();
            $table->string('experience')->nullable();
            $table->string('key_skills')->nullable();
            $table->string('image')->nullable();
            $table->string('desired_city')->nullable();
            $table->string('desired_district')->nullable();
            $table->string('address')->nullable();
            $table->string('lname')->nullable();
            $table->string('canditype_note')->nullable();
             
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
