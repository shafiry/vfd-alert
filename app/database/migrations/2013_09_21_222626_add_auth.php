<?php

use Illuminate\Database\Migrations\Migration;

class AddAuth extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dispatchers', function($table)
		{
			$table->string('email')->after('name');
			$table->string('password', 64)->after('email');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dispatchers', function($table)
		{
			$table->dropColumn('email', 'password');
		});
	}

}