<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
Schema::create('stream', function($newtable){

$newtable->increments('id');
$newtable->integer('alumni_id')->unsigned();
$newtable->string('year',100);
$newtable->string('stream',50);
$newtable->timestamps();
#
# create foreign key from alumni
$newtable->foreign('alumni_id')->references('id')->on('alumni');
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
		Schema::drop('stream');
	}

}
