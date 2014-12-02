<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
Schema::create('alumni', function($newtable){

$newtable->increments('id');
$newtable->string('firstname');
$newtable->string('lastname',100);
$newtable->string('Graduation_year',50);
$newtable->string('contact_email');
$newtable->timestamps();
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
		Schema::drop('alumni');
	}

}
