<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;

class EventController extends Controller
{
    public function listEvents(Request $request){
        $events = Event::all();

        return view('public.events.listing',compact('events'));
    }

    public function newEventForm(Request $request){
        return view('public.events.new');
    }
}
