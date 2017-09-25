<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCostsTable extends Migration {

	public function up()
	{
		Schema::create('costs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('sector_id');
			$table->integer('amount')->unsigned();
			$table->string('paid_to', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('costs');
	}
}