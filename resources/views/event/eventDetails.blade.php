@extends('layouts.frontend.app')

@section('title')
<title>Event detail | PR and Press</title>
@endsection

@section('content')



<!--------------------------event-banner-------------->
<div class="event_banner">
    <div class="container">
        <div class="event_text">
            <a href="{{url('/')}}">Home</a>
            <a href="#" class="event_btn">Events</a>
        </div>
    </div>
</div>
<!------------------------detail-banner----------------->
<div class="detail_banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="detail_box">
                    <h4>{{$eventDetail->title}}</h4><i class="fa fa-check-circle circle_icon" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <div class="info_detail">
                        <i class="fa fa-clock-o clock_icon" aria-hidden="true"></i>
                        <h6>{{date('M d,Y',strtotime($eventDetail->start_date))}}</h6>
                        <input type="hidden" name="start_date" id="start_date" value="{{$eventDetail->start_date}}">
                    </div>
                    <div class="mail">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h5>{{$eventDetail->email}}</h5>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="time">
                    <div class="row">
                        <div class="day col-3">
                            <h5 id="days">0</h5>
                            <p>Day</p>
                        </div>
                        <div class="day col-3">
                            <h5 id="hours">0</h5>
                            <p>hr</p>
                        </div>
                        <div class="day col-3">
                            <h5 id="mint">0</h5>
                            <p>min</p>
                        </div>
                        <div class="day col-3">
                            <h5 id="sec">0</h5>
                            <p>sec</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="eye_section">
                    <div class="eye">
                        <i class="fas fa-eye"></i>
                    </div>
                    <p class="eye_text">71 view</p>
                </div>
                <div class="eye_section">
                    <div class="check">
                        <i class="far fa-check-square"></i>
                    </div>
                    <p>0 Attending </p>
                </div>
                <div class="eye_section">
                    <div class="clock">
                        <i class="far fa-clock"></i>
                    </div>
                    <p>Upcoming </p>
                </div>
                <div class="flag_box">
                    <div class="flag_icon">
                        <i class="fas fa-flag-checkered"></i>
                    </div>
                    <div class="love_icon">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>
                <div class="get">
                    <div class="ge_section">
                        <i class="far fa-compass"></i> {{ucfirst($eventDetail->location)}}
                    </div>
                    <a href="#">Get Directions </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------description---------------------->
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-7">
            <div class="description">
                <h6>Description</h6>
                <p>{{$eventDetail->description}}</p>
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
            <div class="metting">
                <h6>Meeting Url</h6>
                <p>{{$eventDetail->meeting_url}}</p>
            </div>
            <div class="host">
                <h6>Hosted By</h6>
                <div class="host_img">
                    <img src="{{asset('profile_pics')}}/{{$eventDetail->photo}}" alt="host">
                </div>
                <div class="host_text">
                    <p><b>{{$eventDetail->email}}</b> <br> {{$eventDetail->designation}}
                    </p>
                </div>
            </div>
            <div class="event_item">
                <h6>Event location</h6>
                {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d897385.3151233722!2d77.208985!3d28.527352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x717971125923e5d!2sIndia%20Gate!5e0!3m2!1sen!2sin!4v1665405611188!5m2!1sen!2sin"
                    width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

                <iframe
                    src="https://www.google.com/maps?q={{$eventDetail->latitude}},{{$eventDetail->longitude}}&hl=en&z=14&amp;output=embed"
                    width="250" height="150" referrerpolicy="no-referrer-when-downgrade" allowfullscreen="yes"
                    loading="lazy">
                </iframe>

                <h5>Social media:</h5>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="invite">
                <h6>Invite your friend</h6>
                <p>Know someone who might be interested in attending? Let them know by sharing this event.</p>
                {{-- <a href="javaScript:void(0);" onclick="copyToClipboard()"><i class="fas fa-external-link-alt"></i>
                    {{url()->current()}}</a> --}}
                <span style="font-size:10px; padding-left:24px;">Click to copy: </span>
                <input type="text" name="copyurl" id="copyurl" value="{{url()->current()}}"
                    style="border: none;font-size:10px; width:195px;padding-left: 10px;color:blue;outline:none"
                    onclick="copyToClipboard()" readonly>
            </div>
        </div>
    </div>
</div>

<div id="custom-target"></div>


@endsection

@section('js')

<script>
    // Set the date we're counting down to
    var start_date = $('#start_date').val();
    var countDownDate = new Date(start_date).getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
     
      $('#days').html(days);
      $('#hours').html(hours);
      $('#mint').html(minutes);
      $('#sec').html(seconds);
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        $('.time').html('<div class="row"> <div class="day col-3" style="width: 100% !important;color: white;padding-top: 10px">On Going </div></div>');
      }
    }, 1000);
</script>

<script>
    function copyToClipboard() {
       
        var copy =$('#copyurl');
        var copy =$('#copyurl').css('border','none');
        copy.select();
        document.execCommand('copy');

        alert('copied!');


    }
</script>


@endsection