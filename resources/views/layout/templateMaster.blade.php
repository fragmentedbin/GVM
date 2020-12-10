<?php
$featureAccess = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GVM</title>
    <!--

    AUTHOR
        IG : dudyy.1
        EMAIL : muhammadmaududy4@gmail.com
        CALL : (+62)22-9843-6631
    
    -->
    <!-- icon -->
    <link rel="icon" href="{{ asset ('img/gvm-logo.jpg')}}" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}
    <!-- custom styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="container-mstr">
        <div class="wrapper-mstr">
            @include('layout/_nav')
            @yield('content')
        </div>
    </div>
    @include('layout._footer')

</body>
<!-- jQuery -->
{{-- <script type=" text/javascript" src="{{asset('js/jquery.min.js')}} defer"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<!-- Bootstrap tooltips -->
{{-- <script type="text/javascript" src="{{asset('js/popper.min.js')}} defer"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<!-- Bootstrap core JavaScript -->
{{-- <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}} defer"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
</script>
<!-- custom scripts (optional) -->
<script type="text/javascript" src="{{asset('js/style.js')}} defer"></script>

{{-- UNUSED --}}
{{-- <script type="text/javascript" src="{{asset('js/addons/pdfmake.min.js')}} defer"></script>
<script type="text/javascript" src="{{asset('js/addons/vfs_fonts.js')}} defer"></script>
<script type="text/javascript" src="{{asset('js/addons/datatables.min.js')}} defer"></script> --}}

{{-- ADD-on --}}
<script defer src="https://pro.fontawesome.com/releases/v5.13.1/css/all.css"></script>
</html>