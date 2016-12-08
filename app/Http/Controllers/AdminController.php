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
        //Validate the information sent in via the form.
        // if validation fails, it will redirect the the user back to where it was submitted
        // and show the errors

        $this->validate($request, [
            'name' => 'required|max:255|',
            'latitude'=>'required|numeric',
            'longitude'=>'required|numeric',
            'short_description' => 'required|max:255',
            'long_description'=>'required|max:200'
        ]);

        //Yay validation passed, lets grab the data from the request and create a new cache


        //Grabs the submitted data from the POST request
        $name = $request->input('name');
        $lat = $request->input('latitude');
        $long = $request->input('longitude');
        $size = $request->input('size');
        $type = $request->input('type');
        $short_description = $request->input('short_description');
        $long_description = $request->input('long_description');
        $created_by = $request->user()->id;


        //$request->input('created_by');

        $cache = new Cache();

        $cache->name = $name;
        $cache->lat=$lat;
        $cache->long=$long;
        $cache->size=$size;
        $cache->type=$type;
        $cache->short_description=$short_description;
        $cache->long_description=$long_description;
        $cache->created_by=$created_by;

        //this actually saves the object to the database
        $cache->save();

        //not sure if I have to redirect back to a specific view after this
        redirect('admin.index');
    }

}
