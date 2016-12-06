<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NewCacheUnAuthTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //make unauthorized user
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/newcache')
            ->type('The best cache ever', 'name')
            ->type('94.234324234,-35.74352343', 'location')
            ->type('small', 'size')
            ->type('traditional', 'type')
            ->type('like fo reals this is short yo', 'short_description')
            ->type('like fo reals this is the longest description that could be possible yo. but I am a creative fellow 
            and I need to express my art in the form of comments that is where I actually discuss the true meaning of 
            life and that is death and sad because I am sad my gosh what has my life become I am the excessive of 
            computer I am good my friend said so. ', 'long_description')
            ->press('Create')
            ->assertResponseStatus(403);
    }
}
