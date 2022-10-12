@extends('layouts.frontend.app')

@section('title')
<title>Social Connects | PR and Press</title>
@endsection

@section('content')
<!--------------------------event-banner-------------->
<div class="event_banner">
    <div class="container">
        <div class="event_text">
            <a href="./index.html">Home</a>
            <a href="./social.html" class="event_btn">Social</a>
        </div>
    </div>
</div>
<!-------------------------social------------------->
<div class="container">
    <div class="social">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="profile">
                    <div class="profile_img">
                        <img src="{{asset('profile_pics')}}/{{$user->photo}}" alt="no-img">
                    </div>
                    <h5>{{$user->name}}</h5>
                    <p>{{$user->email}}</p>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                <form action="{{route('submitPosts')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group comment">
                        <textarea placeholder="Post your query here" type="text" formcontrolname="content"
                            class="form-control" name="post"></textarea>
                        <button class="btn btn-primary send" type="submit"><i class="fa fa-paper-plane"
                                aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection