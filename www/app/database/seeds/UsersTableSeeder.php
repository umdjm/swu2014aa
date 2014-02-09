<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();

		$firstUser = new User();
		$firstUser->email = "me@scottdlowe.com";
		$firstUser->password = Hash::make("scottsfakepassword");
		$firstUser->name = 'Scott Lowe';
		$firstUser->role = "admin";
		$firstUser->save();

		$secondUser = new User();
		$secondUser->email = "collsain@umich.edu";
		$secondUser->password = Hash::make("scottsfakepassword");
		$secondUser->name = 'Scott High';
		$secondUser->role = "user";
		$secondUser->save();

		// Uncomment the below to run the seeder
		// DB::table('users')->insert($users);
	}

}
