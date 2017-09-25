<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCostSectorsTable extends Migration {

	public function up()
	{
		Schema::create('cost_sectors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->longText('description')->nullable();
			$table->integer('reguler_ammount')->nullable();
			$table->string('pay_to', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('cost_sectors');
	}
}