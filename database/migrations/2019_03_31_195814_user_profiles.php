<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('userprofiles', function(Blueprint $table){
			$table->uuid('id');
			$table->primary('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('skill');
			$table->integer('skillpro');
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
		Schema::dropIfExists('userprofiles');
    }
}
