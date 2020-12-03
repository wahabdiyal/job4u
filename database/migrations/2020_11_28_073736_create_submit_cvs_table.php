<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmitCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_cvs', function (Blueprint $table) {
            $table->id();
          
            $table->string('status')->default('awaiting');
            $table->foreignId('user_id');
            $table->foreignId('company_id');
            $table->foreignId('job_register_id');
            $table->longText('candidate_note');
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
        Schema::dropIfExists('submit_cvs');
    }
}
