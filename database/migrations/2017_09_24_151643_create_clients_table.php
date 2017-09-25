<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255)->nullable();
			$table->string('contact_no', 255)->nullable();
			$table->string('adrees', 255)->nullable();
			$table->integer('area_id')->unsigned()->nullable();
			$table->integer('client_type')->unsigned()->nullable()->default('1');
			$table->date('payment_date');
			$table->integer('package_id')->unsigned()->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}