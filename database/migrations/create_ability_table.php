<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilityTable extends Migration
{
	
	/**
     * Run the migrations.
     *
     * @return void
     */

	public function up()
	{
		Schema::create('ability', function(Blueprint $table){
			$table->string('id');
			$table->string('name');
			$table->int('ability_number');
		});
	}

	public function down()
	{
		Schema::dropIfExists('ability');
	}

}