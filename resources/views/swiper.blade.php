{{-- @extends('layout/templateMaster')
@section('content')
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
<div class="swiper-slide"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
<div class="swiper-slide"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
<div class="swiper-slide"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
<div class="swiper-slide"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
<div class="swiper-slide"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
<div class="swiper-slide"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
</div>
</div>
@endsection
<!DOCTYPE html> --}}
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Owl-Carousel Slider | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .wrapper {
            width: 100%;
        }

        .carousel {
            max-width: 1200px;
            margin: auto;
            padding: 0;
        }

        .carousel .card {
            color: #fff;
            text-align: center;
            margin: 20px 0;
            line-height: 250px;
            font-size: 90px;
            font-weight: 600;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        .carousel .card-1 {
            background: #ed1c24;
        }

        .carousel .card-2 {
            background: #0072bc;
        }

        .carousel .card-3 {
            background: #39b54a;
        }

        .carousel .card-4 {
            background: #f26522;
        }

        .carousel .card-5 {
            background: #630460;
        }

        .owl-dots {
            text-align: center;
            margin-top: 40px;
        }

        .owl-dot {
            height: 15px;
            width: 45px;
            margin: 0 5px;
            outline: none;
            border-radius: 14px;
            border: 2px solid #0072bc !important;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .owl-dot.active,
        .owl-dot:hover {
            background: #0072bc !important;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="carousel owl-carousel">
            <div class="card card-1"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
            <div class="card card-2"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
            <div class="card card-3"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
            <div class="card card-4"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
            <div class="card card-5"><img src="{{asset('img/store/str-spotify.png')}}" alt=""></div>
        </div>
    </div>
    <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>

</body>

</html>