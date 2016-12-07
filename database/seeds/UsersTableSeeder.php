<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //make a default admin user
        DB::table('users')->insert([
            'name' => 'Admin',
            'username'=>'admin',
            'email' => 'bleh@example.com',
            'password' => bcrypt('admin'),
            'is_admin'=>true,
            'is_mod'=>false,
            'enabled'=>true,
        ]);
    }
}