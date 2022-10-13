<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Posts;
use App\Models\Events;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function members()
    {
        $user = User::select('name', 'photo', 'designation', 'city')->leftjoin('users_details', 'users_details.user_id', '=', 'users.id')->orderBy('users.id', 'desc')->get();
        return view('members', compact('user'));
    }

    public function social()
    {
        $user = User::select('name', 'photo', 'designation', 'email')->leftjoin('users_details', 'users_details.user_id', '=', 'users.id')->orderBy('users.id', 'desc')->where('users.id', Auth::user()->id)->first();
        $post = Posts::orderBy('id', 'desc')->get();
        return view('social', compact('user', 'post'));
    }
    public function events()
    {
        $event = Events::select('events.*', 'users_details.photo', 'users.name')->leftjoin('users_details', 'users_details.user_id', '=', 'events.created_by')
            ->leftjoin('users', 'users.id', '=', 'events.created_by')->where('end_date', '>', date('Y-m-d H:i:s'))->orderBy('events.id', 'desc')->get();
        return view('events', compact('event'));
    }

    public function submitPosts(Request $request)
    {
        $post = new Posts();
        $post->created_by = Auth::user()->id;
        $post->post = $request->post;
        //$post->image = $request->;
        $post->status = '1';
        $post->save();
        Alert::success('Success', 'Post is added');
        return back();
    }

    public function createEvent()
    {

        return view('createEvents');
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
        return view('eventDetails', compact('eventDetail'));
    }
}