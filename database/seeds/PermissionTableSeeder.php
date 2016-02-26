<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->insert([
    		'name' => 'manage_users', 
    		'view_name' => 'Manage Users',
    		'description' => 'Allows the user to create, add, update and amend users'
    	]);

    	DB::table('roles')->insert([
    		'name' => 'manage_posts',
    		'view_name' => 'Manage Posts',
    		'description' => 'Allows a user to create and update posts'
    	]);

    	DB::table('roles')->insert([
    		'name' => 'manage_comments',
    		'view_name' => 'Manage Comments',
    		'description' => 'Allows a user to create and update posts'
    	]);

    	DB::table('roles')->insert([
    		'name' => 'amend_permissions',
    		'view_name' => 'Amend Permissions',
    		'description' => 'Allows a user to create and update posts'
    	]);
    }
}
