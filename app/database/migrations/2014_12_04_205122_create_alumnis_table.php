<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	Schema::create('alumnis', function($table) {

    $table->increments('id');
    $table->string('firstname');
	$table->string('lastname');
	$table->string('graduation_year');
	$table->string('contact_email');
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
		//
		Schema::drop('alumnis');
	}

}
