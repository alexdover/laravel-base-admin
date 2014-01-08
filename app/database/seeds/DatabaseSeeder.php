<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
    	if(DB::table('users')->count() == 0)
    	{
	        User::create(array('email' => 'test@test.com', 'password' => Hash::make('password')));

			$this->command->info('User table seeded!');
    	}
    	else
    	{
    		$this->command->info('User table already has records.');
    	}    		
    }

}
