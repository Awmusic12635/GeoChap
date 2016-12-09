<?php

namespace App\Http\Controllers;

//use Cornford\Googlmapper\Mapper;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;
use App\Cache;

class IndexController extends Controller
{
    public function showIndex(Request $request){

        $caches = Cache::all();

        //defaults to rochester
        Mapper::map(43.1610,77.6109);

        foreach($caches as $cache){
            Mapper::marker($cache->lat,$cache->long);
        }

        return view('index');
    }
}
