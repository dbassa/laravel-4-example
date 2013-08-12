<?php

use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
			'name'=>'Daniel Bassa',
			'bio'=>'Daniel Bassa is a really great author',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('authors')->insert(array(
			'name'=>'Autor 2',
			'bio'=>'Autor 2 is a really great author',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->where('name','=','Daniel Bassa')->delete();
		DB::table('authors')->where('name','=','Autor 2')->delete();
	}

}