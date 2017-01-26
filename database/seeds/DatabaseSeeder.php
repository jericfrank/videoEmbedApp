<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

    	$user = new User();
        $user->name         = 'Administrator';
        $user->email = 'admin@email.com';
        $user->password  = bcrypt('password');
        $user->save();
		// $this->call('UserTableSeeder');
	}

}
