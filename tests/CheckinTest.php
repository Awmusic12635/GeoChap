<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CheckinTest extends TestCase
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

        $this->actingAs($testuser)
            ->visit('/cache/1/checkin')
            ->type('Wow this was a cool one', 'comment')
            ->press('Checkin')
            ->assertResponseOk();
    }
}
