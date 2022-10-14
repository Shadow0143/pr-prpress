@extends('layouts.frontend.app')

@section('title')
<title>Events | PR and Press</title>
@endsection

@section('content')
<!--------------------------event-banner-------------->
<div class="event_banner">
    <div class="container">
        <div class="event_text">
            <a href="{{url('/')}}">Home</a>
            <a href="#" class="event_btn">Events</a>
        </div>
        <div class="event_box">
            <a href="{{route('createEvent')}}"><i class="fa fa-plus" aria-hidden="true"></i> Create Event</a>
        </div>
    </div>
</div>
<!-------------------------event-section-------------------->
<div class="container">
    <div class="col-12 mt-2">
        <a href="javaScript:void(0);" class="btn btn-outline-danger  filterevent" data-type="product_lounch">Product
            Lounch</a>
        <a href="javaScript:void(0);" class="btn btn-outline-danger  filterevent" data-type="conference">Press
            Confrence</a>
        <a href="javaScript:void(0);" class="btn btn-outline-danger  filterevent" data-type="seminar">Seminar</a>
        <a href="javaScript:void(0);" class="btn btn-outline-danger  filterevent" data-type="other">Other</a>
    </div>
    <div class="row filterResult">
        @foreach ($event as $val)
        <div class="col-md-12 col-sm-12">
            <div class="event_section">
                <div class="event_img">
                    @if(!empty($val->photo))
                    <img src="{{asset('profile_pics')}}/{{$val->photo}}" alt="blog-1">
                    @else
                    <img src="{{asset('assets/image/no-img.jpg')}}" alt="blog-1">
                    @endif
                </div>
                <div class="event_text2">
                    <span class="event_by"><i class="fa fa-tag" aria-hidden="true"></i> | {{$val->name}}</span>
                    <h4>
                        <a href="{{route('eventsDetail',['id'=>$val->id])}}">{{$val->title}}</a>
                    </h4>
                    <p>{{$val->description}}

                    </p>
                    <span class="map"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$val->location}}</span>
                </div>
                <div class="calendar">
                    <div class="calendar_box">
                        {{date('M,Y',strtotime($val->start_date))}}
                        <h4>{{date('d',strtotime($val->start_date))}}</h4>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>




@endsection

@section('js')
<script>
    $('.filterevent').on('click',function(){
    var type = $(this).data('type');
    $('.loader').show();
    $.ajax({
        url:'{{route('eventFilter')}}',
        type:'GET',
        data:{type:type},
        success:function(data){
           $('.filterResult').html(data);
            $('.loader').hide();

        }
    })
});
</script>

@endsection