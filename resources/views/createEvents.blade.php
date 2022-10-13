@extends('layouts.frontend.app')

@section('title')
<title>Create Events | PR and Press</title>
@endsection

@section('content')
<!--------------------------event-banner-------------->
<div class="event_banner">
    <div class="container">
        <div class="event_text">
            <a href="./index.html">Home</a>
            <a href="./events.html" class="event_btn">Events</a>
        </div>
        <div class="event_box">
            <a href="javaScript:void(0);" onclick="window.history.back()"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i>
                Back</a>
        </div>
    </div>
</div>
<!-------------------------event-section-------------------->
<div class="container">
    <div class="member_title">
        <h6>CREATE EVENTS</h6>
    </div>
    <div class="row">
        <form action="{{route('submitEvent')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Event Title <span>*</span></label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Event Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="type">Event Type</label>
                <select name="type" id="type" class="form-control">
                    <option value="">Select please</option>
                    <option value="product_lounch">Product Lounch</option>
                    <option value="conference">Press Conference</option>
                    <option value="seminar">seminars</option>
                    <option value="other">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="meeting_url"> Meeting URL</label>
                <input type="url" name="meeting_url" id="meeting_url" class="form-control"
                    placeholder="Zoom/Meet url for eve">
            </div>
            <div class="form-group">
                <label for="start_date">Event Start Date</label>
                <input type="datetime-local" name="start_date" id="start_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="end_date"> Event End Date</label>
                <input type="datetime-local" name="end_date" id="end_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="location"> Event Location</label>
                <input type="text" name="location" id="location" class="form-control" placeholder="Location">
            </div>
            <div class="form-group">
                <label for="lat"> Latitude</label>
                <input type="text" name="lat" id="lat" class="form-control" placeholder="Latitude">
                <label for="longi"> Longitude</label>
                <input type="text" name="longi" id="longi" class="form-control" placeholder="Longitude">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>
        </form>

    </div>
</div>
@endsection

@section('js')

@endsection