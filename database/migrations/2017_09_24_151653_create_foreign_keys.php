<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('clients', function(Blueprint $table) {
			$table->foreign('area_id')->references('id')->on('area')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('clients', function(Blueprint $table) {
			$table->foreign('client_type')->references('id')->on('client_type')
						->onDelete('set null')
						->onUpdate('restrict');
		});
		Schema::table('clients', function(Blueprint $table) {
			$table->foreign('package_id')->references('id')->on('internet_packages')
						->onDelete('set null')
						->onUpdate('no action');
		});
		Schema::table('client_payments', function(Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('clients')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('clients', function(Blueprint $table) {
			$table->dropForeign('clients_area_id_foreign');
		});
		Schema::table('clients', function(Blueprint $table) {
			$table->dropForeign('clients_client_type_foreign');
		});
		Schema::table('clients', function(Blueprint $table) {
			$table->dropForeign('clients_package_id_foreign');
		});
		Schema::table('client_payments', function(Blueprint $table) {
			$table->dropForeign('client_payments_client_id_foreign');
		});
	}
}