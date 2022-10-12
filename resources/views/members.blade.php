@extends('layouts.frontend.app')

@section('title')
<title>Members | PR and Press</title>
@endsection

@section('content')
<div class="event_banner">
    <div class="container">
        <div class="event_text">
            <a href="./index.html">Home</a>
            <a href="./social.html" class="event_btn">Members</a>
        </div>
    </div>
</div>
<!---------------------------member-------------->
<div class="container">
    <div class="member_title">
        <h6>MEMBERS</h6>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            @foreach ($user as $val)
            <div class="member">
                <div class="member_img">
                    @if(!empty($val->photo))
                    <img src="{{asset('profile_pics')}}/{{$val->photo}}" alt="member-image">
                    @else
                    <img src="{{asset('assets/image/no-img.jpg')}}" alt="member-image">
                    @endif
                </div>
                <div class="social_icon">
                    <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                </div>
                <div class="member_text">
                    <h4>{{$val->name}}</h4><span class="truncate"
                        title="{{$val->name}}"><strong>{{$val->designation}}</strong><br>{{$val->city}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection