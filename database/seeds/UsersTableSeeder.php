<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
          DB::table('users')->insert([
        	'name' => "rob",
        	'email' => "rob.sykes@sykes-technologies.com",
        	'password' => bcrypt("pass"),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
