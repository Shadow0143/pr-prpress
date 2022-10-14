@extends('layouts.frontend.app')

@section('title')
<title>Create Jobs | PR and Press</title>
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
            <a href="javaScript:void(0);" onclick="window.history.back()"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i>
                Back</a>
        </div>
    </div>
</div>
<!-------------------------job-section-------------------->

<div class="col-12">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Job title <span class="text-danger">*</span></label>
            <input type="text" name="title " id="title<">
        </div>

    </form>
</div>




@endsection

@section('js')


@endsection