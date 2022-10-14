@extends('layouts.frontend.app')

@section('title')
<title>Jobs | PR and Press</title>
@endsection

@section('content')
<!--------------------------job-banner-------------->
<div class="event_banner">
    <div class="container">
        <div class="event_text">
            <a href="{{url('/')}}">Home</a>
            <a href="#" class="event_btn">Jobs</a>
        </div>
        <div class="event_box">
            <a href="{{route('createJobs')}}"><i class="fa fa-plus" aria-hidden="true"></i> Create Job</a>
        </div>
    </div>
</div>
<!-------------------------job-section-------------------->





@endsection

@section('js')


@endsection