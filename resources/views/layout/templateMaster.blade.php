<?php
$featureAccess = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--

    AUTHOR
        IG : dudyy.1
        EMAIL : muhammadmaududy4@gmail.com
        CALL : (+62)22-9843-6631
    
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GVM</title>

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


{{-- JS CUSTOM --}}
<script>
    $(document).ready(function() {
        $('.colab-input').click(function() {
            $colab = $(this).val();
            if ($colab == 'yes') {
                $('.colab-yes').attr('hidden', false);
            }
            if ($colab == 'no') {
                // alert($colab);
                $('.colab-yes').attr('hidden', true);
            } else {

            }
        });


        $('#customFile').on('change', function() {
            //get the file name
            var fileName = $(this).val().replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        });
        $check = $("#check-agree");
        $($check).click(function() {
            if ($(this).is(":checked")) {
                $("#form-submit").removeAttr("disabled");
            } else {
                $("#form-submit").attr("disabled", "disabled");
            }
        });

        $(".modal-accept").click(function() {
            $('#check-agree').attr("checked", true);
            $("#form-submit").removeAttr("disabled");
        });

        document.addEventListener("DOMContentLoaded", function() {
            const placeholder = document.querySelector('.placeholder')
            const footer = document.querySelector('footer')

            // On DOM Content Load, set placeholder height to be equal to footer height
            updateHeight()

            window.addEventListener('resize', onResize)

            // On window resize, update placeholder height to be equal to footer height
            function onResize() {
                updateHeight()
            }

            function updateHeight() {
                // Placeholder should always match footer height
                placeholder.style.height = `${footer.offsetHeight}px`
            }
        });

        var readMoreHTML = $(".read-more").html();
        var stringLimit = 198;
        var lessText = readMoreHTML.substr(0, stringLimit);

        if (readMoreHTML.length > stringLimit) {
            $(".read-more").html(lessText).append("<a href='' class='read-more-link'> Read more..</a>");
        } else {
            $("read-more").html(readMoreHTML);
        }

        $("body").on("click", ".read-more-link", function(event) {
            event.preventDefault();
            $(this).parent(".read-more").html(readMoreHTML).append("<a href='' class='show-less-link'> Read less..</a>");
        });

        $("body").on("click", ".show-less-link", function() {
            event.preventDefault();
            $(this).parent(".read-more").html(readMoreHTML.substr(0, stringLimit)).append("<a href='' class='read-more-link'> Read more..</a>");
        });

    });
</script>

</html>