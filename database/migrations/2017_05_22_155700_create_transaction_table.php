<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* 
*/
class CreateTransactionTable extends Migration
{
	
	public function up()
	{
		Schema::create('transaction', function(Blueprint $table){
			$table->string('id');
			$table->string('type'); //Income Outcome
			$table->double('amount', 32, 2);
			$table->string('keterangan');
			$table->string('company_id')->references('id')->on('company');
		});
	}

	public function down()
	{
		Schema::dropIfExists('transaction');
	}
}