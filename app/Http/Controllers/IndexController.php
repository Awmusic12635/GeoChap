<?php

namespace App\Http\Controllers;

use Cornford\Googlmapper\Mapper;
use Illuminate\Http\Request;
use App\Cache;

class IndexController extends Controller
{
    public function showIndex(Request $request){

        $caches = Cache::all();

        foreach($caches as $cache){
            Mapper::marker($cache->lat,$cache->long);
        }

        return view('index');
    }
}
