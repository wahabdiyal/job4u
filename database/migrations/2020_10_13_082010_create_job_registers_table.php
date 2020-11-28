<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_registers', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_skill')->nullable();
            $table->string('posting_date')->nullable();
            $table->string('city');
            $table->string('disctrict');
            $table->string('country');
            $table->string('role_user')->nullable();
            $table->string('industry')->nullable();
            $table->string('type')->nullable();
            $table->string('area')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('role_category')->nullable();
            $table->string('education')->nullable();
            
            $table->foreignId('company_id');
            $table->longText('job_description');
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
        Schema::dropIfExists('job_registers');
    }
}
