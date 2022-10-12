<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function submitProfile(Request $request)
    {
        // dd($request->all());
        $check = UserDetails::find($request->user_id);
        if (!empty($check)) {
            $user = User::find($request->user_id);
            $user->email = $request->email;
            $user->save();

            $user_details = UserDetails::find($request->user_id);
            $document = "";
            if (!empty($request->file('photo'))) {
                $noticesss = $request->file('photo');
                $document = 'profilepic' . '-' .  Auth::user()->name . '-' . time() . '.' . $noticesss->getClientOriginalExtension();
                $result = public_path('profile_pics');
                $noticesss->move($result, $document);
                $user_details->photo  = $document;
            }
            if (!empty($request->phone_no)) {
                $user_details->phone_no = $request->phone_no;
            }
            if (!empty($request->designation)) {
                $user_details->designation = $request->designation;
            }
            if (!empty($request->city)) {
                $user_details->city = $request->city;
            }
            if (!empty($request->work_email)) {
                $user_details->work_email = $request->work_email;
            }
            if (!empty($request->websiteLink)) {
                $user_details->websiteLink = $request->websiteLink;
            }
            if (!empty($request->twitter)) {
                $user_details->twitter = $request->twitter;
            }
            if (!empty($request->instagram)) {
                $user_details->instagram = $request->instagram;
            }
            if (!empty($request->facebook)) {
                $user_details->facebook = $request->facebook;
            }
            if (!empty($request->linkdin)) {

                $user_details->linkdin = $request->linkdin;
            }
            $user_details->save();
        } else {

            $user = User::find($request->user_id);
            $user->email = $request->email;
            $user->save();

            $user_details = new UserDetails();
            $user_details->user_id = $request->user_id;
            $document = "";
            if (!empty($request->file('photo'))) {
                $noticesss = $request->file('photo');
                $document = 'profilepic' . '-' .  Auth::user()->name . '-' . time() . '.' . $noticesss->getClientOriginalExtension();
                $result = public_path('profile_pics');
                $noticesss->move($result, $document);
                $user_details->photo  = $document;
            }
            $user_details->phone_no = $request->phone_no;
            $user_details->designation = $request->designation;
            $user_details->city = $request->city;
            $user_details->work_email = $request->work_email;
            $user_details->websiteLink = $request->websiteLink;
            $user_details->twitter = $request->twitter;
            $user_details->instagram = $request->instagram;
            $user_details->facebook = $request->facebook;
            $user_details->linkdin = $request->linkdin;
            $user_details->save();
        }
        Alert::success('Success', 'Profile Updated');
        return back();
    }
}