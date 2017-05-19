<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
	/**
     * Run the migrations.
     *
     * @return void
     */

	public function up()
	{
		Schema::create('role', function(Blueprint $table){
			$table->string('id');
			$table->string('company_id')->references('id')->('company');
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::dropIfExists('role');
	}
}