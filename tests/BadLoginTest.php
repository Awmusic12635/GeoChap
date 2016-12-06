<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class BadLoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        //create new user
        $testuser = new User();
        $testuser->username = "AWacker";
        $testuser->email="alex@alexwacker.com";
        $testuser->password="thissosecureandtotallyhashed";
        $testuser->is_admin=true;
        $testuser->is_mod=true;

        $testuser->save();

        $this->visit('/login')
            ->type('AWacker', 'username')
            ->type('thisisactuallynotthepasswordhaha', 'password')
            ->press('Login')
            ->seePageIs('/login');
    }
}
