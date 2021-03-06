<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
* 
*/
class CreateRoleAbilityTable extends Migration
{
	
	public function up()
	{
		Schema::create('role_ability', function(Blueprint $table){
			$table->string('role_id')->references('id')->on('role');
			$table->string('ability_id')->references('id')->on('ability');
		});
	}

	public function down(){
		Schema::dropIfExists('role_ability');
	}
}