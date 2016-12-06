<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Cache;
use App\User;


class ApproveCacheTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $testcache = new Cache();
        $testcache->name="testitem1";
        $testcache->save();

        $this->visit('/search')
            ->type('testitem1', 'searchbox')
            ->press('Search')
            ->see("Cache not found")
            ->dontSee('testitem1');

        //make authorized user
        $user = factory(App\User::class)->create();
        $user->enabled=true;
        $user->is_admin=true;
        $user->save();

        $this->actingAs($user)
            ->visit('/admin/pendingapproval')
            ->press('Approve All')
            ->assertResponseOk();

        $this->visit('/search')
            ->type('testitem1', 'searchbox')
            ->press('Search')
            ->see('testitem1')
            ->dontSee('Cache not found');


    }
}
