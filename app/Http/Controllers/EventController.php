<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
use App\EventCheckin;

class EventController extends Controller
{
    public function joinEvent(Request $request,$eventId){
        $events = Event::where('id',$eventId)->get();

        if($events->isEmpty()) {
            abort(404);
        }
        else{
            $event = $events->first();
            $eventCheckin = new EventCheckin();

            $eventCheckin->user_id=$request->user()->id;
            $eventCheckin->event_id=$event->id;

            $eventCheckin->save();

            back();
        }
    }
    public function showEvent(Request $request,$eventId){
        $events = Event::where('id',$eventId)->get();

        if($events->isEmpty()){
            abort(404);
        }else{
            $event = $events->first();
            $checkins = EventCheckin::where('event_id',$event->id);
            $attending = false;

            $eventCheckinTest = EventCheckin::where('user_id',$request->user()->id)->get();
            if($eventCheckinTest->count()>0){
                $attending=false;
            }else{
                $attending=true;
            }

            return view('public.events.detailed',compact('event','checkins','attending'));
        }
    }
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
