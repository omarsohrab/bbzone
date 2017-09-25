<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientTypeTable extends Migration {

	public function up()
	{
		Schema::create('client_type', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255)->default('Active');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('client_type');
	}
}