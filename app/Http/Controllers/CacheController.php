<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cache;

class CacheController extends Controller
{
    /*
     * List caches that are available and approved
     */
    public function listCaches(Request $request){
        /*
         * Get the newest 10 caches that have been approved
         */

        $caches = Cache::where('approved',true)
            ->orderBy('id','desc')
            ->limit(10)
            ->get();

        //the compact method allows me to pass the value of the caches list to the view

        return view('caches.listing',compact('caches'));
    }

    /*
     *  Show the form for where a user would checkin
     */

    public function showCheckinForm(Request $request){
        return view('caches.checkinform');
    }

    /*
     * Handles the post request for a user checkin
     */

    public function  checkIn(Request $request){
        //do some stuff here
    }

    /*
     * show a specific cache
     */
    public function showCache(Request $request, $cacheId){
        $cache = Cache::where('id',$cacheId)
            ->get();
        return view('caches.detailed',compact('cache'));
    }

    /*
     * just show the form for adding a new cache
     */
    public function newCacheForm(Request $request){
        return view('caches.new');
    }

    /*
     * Create a new cache item after user submits form
     */
    public function newCacheCreation(Request $request){

        //Validate the information sent in via the form.
        // if validation fails, it will redirect the the user back to where it was submitted
        // and show the errors

        $this->validate($request, [
            'name' => 'required|max:255|',
            'lat'=>'required|numeric',
            'long'=>'required|numeric',
            'type'=>'required',
            'short_description' => 'required|max:255',
            'long_description'=>'required|max:2000'
        ]);

        //Yay validation passed, lets grab the data from the request and create a new cache


        //Grabs the submitted data from the POST request
        $name = $request->input('name');
        $lat = $request->input('lat');
        $long = $request->input('long');
        $size = $request->input('size');
        $type = $request->input('type');
        $short_description = $request->input('short_description');
        $long_description = $request->input('long_description');
        $created_by = $request->input('created_by');

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
        return redirect()->back();
    }

}
