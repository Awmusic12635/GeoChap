<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cache;
use App\User;
use App\Event;
use App\Comment;
use App\Checkin;

class PublicCacheController extends Controller
{
    public function showCaches(Request $request){

        //GET ALL THE CACHES
        $caches = Cache::where('approved',true)->get();

        return view('public.caches.listing',compact('caches'));
    }
    public function showCache(Request $request,$cacheId){
        //should handle a 404 error at some point

        $caches = Cache::where('id',$cacheId)->get();

        if($caches->isEmpty()){
            abort(404);
        }else{
            $cache = $caches->first();
            return view('public.caches.detailed',compact('cache'));
        }
    }
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
        $userid = $request->user()->id;


        //$request->input('created_by');

        $cache = new Cache();

        $cache->name = $name;
        $cache->lat=$lat;
        $cache->long=$long;
        $cache->size=$size;
        $cache->type=$type;
        $cache->short_description=$short_description;
        $cache->long_description=$long_description;
        $cache->user_id=$userid;

        //this actually saves the object to the database
        $cache->save();

        //not sure if I have to redirect back to a specific view after this


        //this seemed to make a blank white page
        //redirect('admin.index')->back();
        return redirect()->back();

    }
    public function checkIn(Request $request,$cacheId){

    }
}
