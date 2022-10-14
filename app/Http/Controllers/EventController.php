<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Posts;
use App\Models\Events;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function events()
    {
        $event = Events::select('events.id', 'events.title', 'events.description', 'events.location', 'events.start_date', 'users_details.photo', 'users.name')->leftjoin('users_details', 'users_details.user_id', '=', 'events.created_by')->leftjoin('users', 'users.id', '=', 'events.created_by')
            // ->where('end_date', '>', date('Y-m-d H:i:s'))
            ->orderBy('events.id', 'desc')->get();
        return view('event.events', compact('event'));
    }

    public function createEvent()
    {

        return view('event.createEvents');
    }

    public function submitEvent(Request $request)
    {
        // dd($request->all());
        $event = new Events();
        $event->created_by = Auth::user()->id;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->type = $request->type;
        $event->meeting_url = $request->meeting_url;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->location = $request->location;
        $event->latitude = $request->lat;
        $event->longitude = $request->longi;
        $event->save();
        Alert::success('Success', 'Event is added');
        return redirect()->route('events');
    }

    public function eventsDetail($id)
    {
        $eventDetail = Events::leftjoin('users_details', 'users_details.user_id', '=', 'events.created_by')
            ->leftjoin('users', 'users.id', '=', 'events.created_by')->where('events.id', $id)->first();
        return view('event.eventDetails', compact('eventDetail'));
    }

    public function eventFilter(Request $request)
    {

        $events =   $event = Events::select('events.id', 'events.title', 'events.description', 'events.location', 'events.start_date', 'users_details.photo', 'users.name')->leftjoin('users_details', 'users_details.user_id', '=', 'events.created_by')->leftjoin('users', 'users.id', '=', 'events.created_by')->where('events.type', $request->type)->orderBy('events.id', 'desc')->get();
        return view('event.filterEvent', compact('events'));
    }
}