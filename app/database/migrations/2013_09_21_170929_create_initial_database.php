<?php

use Illuminate\Database\Migrations\Migration;

class CreateInitialDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dispatchers', function($table)
		{
			$table->increments('id');
 			$table->string('name');
			$table->timestamps();
		});

		Schema::create('incidents', function($table)
		{
			$table->increments('id');
 			$table->string('title');
			$table->string('description')->nullable();
 			$table->integer('dispatcher_id');
			$table->string('coordinates');
			$table->timestamps();
		});

		Schema::create('volunteers', function($table)
		{
			$table->increments('id');
 			$table->string('name');
 			$table->string('phone');
 			$table->integer('dispatcher_id');
			$table->timestamps();
		});

		Schema::create('incident_volunteer', function($table)
		{
			$table->increments('id');
 			$table->string('email');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dispatchers');
		Schema::drop('incidents');
		Schema::drop('volunteers');
		Schema::drop('incident_volunteer');
	}

}
