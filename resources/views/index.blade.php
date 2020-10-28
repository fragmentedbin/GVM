<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GVM</title>

    <!-- MDBootstrap Datatables  -->
    <link href="{{ asset ('css/addons/datatables.min.css')}}" rel="stylesheet">
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset ('img/icon.png')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="top-container-c">
        <div class="top-wrapper-c">
            <nav class="navbar top">
                <span class="navbar-brand"><a href="/test"><img src="{{asset('img/logo-navbar.jpg')}}" alt=""></span></a>
                <div class="vibes">
                    <h1 class="vibes-h1">GROW VIBES</h1>
                    <p>Music</p>
                </div>
            </nav>
        </div>
    </div>
    <div class="bottom-container-c">
        <div class="bottom-wrapper-c">
            <nav class="navbar bottom navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown active-c">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Releases
                            </a>
                            <div class="dropdown-menu dropdown-menu-c animate-menu slideIn-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item active" href="#">All Releases</a>
                                <a class="dropdown-item" href="#">LP</a>
                                <a class="dropdown-item" href="#">Album</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Submit Track</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our Artist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Partner Labels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile Grow Vibes Music</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-content">
        <div class="wrapper-content">
            <div class="section1">
                <h2>new release</h2>
                <div class="sub-section1-1 ">
                    <div class="img-slider">
                        <div id="sec1-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#sec1-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#sec1-carousel" data-slide-to="1"></li>
                                <li data-target="#sec1-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href=""><img class="d-block w-100" src="{{asset('img/cover/anntypi-love.jpg')}}" alt="First slide"></a>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>1</h5>
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>1</h5>
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img class="d-block w-100" src="{{asset('img/cover/lostpaper-paradise.jpg')}}" alt="First slide"></a>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>2</h5>
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img class="d-block w-100" src="{{asset('img/cover/fajra-letsgo.jpg')}}" alt="First slide"></a>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>3</h5>
                                        <p>...</p>
                                    </div>
                                </div>
                            </div>
                        <a class="carousel-control-prev" href="#sec1-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#sec1-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="sub-section1-2">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident quo molestias magnam incidunt reiciendis. Eveniet temporibus doloribus fuga doloremque. Laudantium vel placeat fugiat ducimus ipsum! Voluptate maxime ut fuga doloremque.</p>
                        </div> --}}
        </div>
    </div>
    </div>

</body>
<!-- jQuery -->
<script type=" text/javascript" src="{{asset('js/jquery.min.js')}}">
</script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="{{asset('js/addons/datatables.min.js')}}"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="{{asset('js/style.js')}}"></script>

<script type="text/javascript" src="{{asset('js/addons/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/addons/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/addons/datatables.min.js')}}"></script>

{{-- JS CUSTOM --}}
<script>
    $(document).ready(function() {
        // $('.dropdown').hover(function(){
        //     $(this).addClass('show');
        //     $('.dropdown-menu').addClass('show');
        // })

        // $('dropdown').mouseenter(function(){
        //
        // })
        // $('dropdown').mouseleave(function(){
        //     $(this).removeClass('show');
        // })
        // $('.dropdown').hover(function(){
        //     $(this).addClass('show');
        //     $('.dropdown-toggle').attr('aria-expanded', 'true');
        //     ('.dropdown-menu').addClass('show')
        // })
        // $('.dropdown').mouseleave(function(){
        //     $(this).removeClass('show');
        //     $('.dropdown-toggle').attr('aria-expanded', 'false');
        //     ('.dropdown-menu').removeClass('show')
        // })

    })
</script>

</html>
