<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegisterJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_registers', function (Blueprint $table) {
             $table->string('candidate')->nullable();
             $table->string('remote')->nullable();
             $table->string('total_hire')->default(0);
             $table->string('team_contact')->default(0);
             $table->string('payment_status')->default('pending');
             $table->string('job_status')->default('pending');
             
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_registers', function (Blueprint $table) {
            $table->dropColumn('candidate');
            $table->dropColumn('remote');
            $table->dropColumn('total_hire');
            $table->dropColumn('team_contact');
            $table->dropColumn('job_status');
             
        });
    }
}
