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
}