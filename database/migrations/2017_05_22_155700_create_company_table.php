<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* 
*/
class CreateCompanyTable extends Migration
{
	
	public function up()
	{
		Schema::create('company', function(Blueprint $table){
			$table->string('id');
			$table->string('name');	
			$table->timestamp('create_time');
			$table->boolean('trial');		
		});
	}

	public function down()
	{
		Schema::dropIfExists('company');
	}
}