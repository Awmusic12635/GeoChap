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
            'username'=>'admin',
            'email' => 'bleh@example.com',
            'password' => bcrypt('admin'),
            'is_admin'=>true,
            'is_mod'=>false,
            'enabled'=>true,
            'created_at'=>'2016-12-09 04:12:10',
            'updated_at'=>'2016-12-09 04:12:10'
        ]);
    }
}
