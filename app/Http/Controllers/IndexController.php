<?php

namespace App\Http\Controllers;

//use Cornford\Googlmapper\Mapper;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;
use App\Cache;
use App\User;
use App\Event;

class IndexController extends Controller
{
    public function showIndex(Request $request){

        $caches = Cache::all();

        //defaults to rochester
        Mapper::map(43.1610,-77.6109);

        foreach($caches as $cache){
            Mapper::marker($cache->lat,$cache->long,['eventClick' => "window.location='/caches/$cache->id';"]);
        }

        $caches = Cache::where('approved',true)->latest()->limit(10)->get();
        $users = User::latest()->limit(10)->get();
        $events = Event::where('id','>',0)->latest()->limit(10)->get();

        return view('public.index',compact('caches','users','events'));
    }
}
