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

    public function newEventCreation(Request $request){
        $this->validate($request, [
            'name' => 'required|max:255|',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'short_description' => 'required|max:200',
            'description'=>'required|max:300',
            'location'=>'required|max:200'
        ]);

        $name = $request->input('name');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $location = $request->input('location');
        $short_description = $request->input('short_description');
        $description = $request->input('description');
        $userid = $request->user()->id;


        $event = new Event();

        $event->name=$name;
        $event->start_date=$start_date;
        $event->end_date=$end_date;
        $event->location=$location;
        $event->short_description=$short_description;
        $event->description=$description;
        $event->user_id=$userid;

        $event->save();

        return redirect('/events');
    }
}
