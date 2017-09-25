<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInternetPackagesTable extends Migration {

	public function up()
	{
		Schema::create('internet_packages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->longText('description')->nullable();
			$table->string('internet_speed', 255)->nullable();
			$table->integer('pricing');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('internet_packages');
	}
}