<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('subject', function($table) {
	$table->increments('id');
    $table->string('year');
	$table->string('math');
	$table->string('english');
	$table->string('kiswahili');
	$table->string('physics');
	$table->string('chemistry');
	$table->string('biology');
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
		Schema::drop('subject');
	}

}
