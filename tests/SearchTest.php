<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Cache;

class SearchTest extends TestCase
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
        $testcache->approved=true;
        $testcache->save();

        $this->visit('/search')
            ->type('testitem1', 'searchbox')
            ->press('Search')
            ->see('testitem1')
            ->dontSee('Cache not found');
    }
}
