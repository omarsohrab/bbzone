<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAreaTable extends Migration {

	public function up()
	{
		Schema::create('area', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('administrator', 255)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('area');
	}
}