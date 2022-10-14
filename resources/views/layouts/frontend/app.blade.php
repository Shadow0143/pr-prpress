<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <!--------------css--------------->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    {{--
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"> --}}

    <!------------google-font---------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;1,200;1,300;1,400&display=swap"
        rel="stylesheet">


</head>

<body>

    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    @include('layouts.frontend.header')
    <div class="loader">
        <img src="{{asset('assets/image/logo.svg')}}" alt="Commsclub-loader">
    </div>
    @yield('content')
    @include('layouts.frontend.footer')
</body>

<!-------------------------js---------------->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/a076d05399.js')}}"></script>



<script>
    $(document).ready(function () {
        $('.loader').hide();
        $('.dropdown-toggle').dropdown();
    });

    function loginModal(){
        $('#loginModal').modal('show');
    }
</script>

@yield('js')

</html>