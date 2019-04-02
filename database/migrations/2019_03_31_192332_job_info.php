<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('jobinfo', function(Blueprint $table){
			$table->uuid('id');
			$table->primary('id');
			$table->string('title');
			$table->string('description');
			$table->string('skillreq');
			$table->integer('skillreqpro');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::dropIfExists('jobinfo');
    }
}
