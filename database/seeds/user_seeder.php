<?php

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'name' => 'Administrador',
			'email' => 'dios',
			'password' => bcrypt('mil@nes@'),
		]);
	}
}
