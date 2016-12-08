<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\User;
use App\Cache;
use App\Comment;
use App\Checkin;

class AdminController extends Controller
{
    /*
     * Show the admin dashboard
     */
    public function showAdmin(Request $request){

        //Get total cache #
        $cacheCount = count(Cache::all());

        //Get pending cache count #
        $pendingCount = count(Cache::where('approved',false)->get());

        //Get total user #
        $userCount = count(User::all());

        //Get total comment #
        $commentCount = count(Comment::all());

        //Get total checkins #
        $checkinCount = count(Checkin::all());

        //Get total event #
        $eventCount = count(Event::all());


        return view('admin.index',compact('cacheCount','userCount','commentCount','checkinCount','eventCount','pendingCount'));
    }

    /*
     * Show a full list of all caches to admin
     */
    public function showCaches(Request $request){

        //GET ALL THE CACHES
        $caches = Cache::all();


        return view('admin.caches',compact('caches'));
    }

    /*
     * Admin add new cache form
     */
    public function newCacheForm(Request $request){
        return view('admin.newcache');
    }

    /*
     * Handle the post request to add a new cache
     */

    public function addCache(Request $request){

    }

}
