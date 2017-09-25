<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientPaymentsTable extends Migration {

	public function up()
	{
		Schema::create('client_payments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('amount');
			$table->integer('client_id')->unsigned()->nullable();
			$table->date('date');
		});
	}

	public function down()
	{
		Schema::drop('client_payments');
	}
}