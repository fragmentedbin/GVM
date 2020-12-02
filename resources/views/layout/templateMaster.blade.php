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

    <!-- MDBootstrap Datatables  -->
    <link href="{{ asset ('css/addons/datatables.min.css')}}" rel="stylesheet">
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset ('img/gvm-logo.jpg')}}" type="image/x-icon">
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
    @include('layout/_nav')
    @yield('content')
    @include('layout._footer')
</body>
<!-- jQuery -->
<script type=" text/javascript" src="{{asset('js/jquery.min.js')}} defer"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}} defer"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}} defer"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="{{asset('js/addons/datatables.min.js')}} defer"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="{{asset('js/style.js')}} defer"></script>

<script type="text/javascript" src="{{asset('js/addons/pdfmake.min.js')}} defer"></script>
<script type="text/javascript" src="{{asset('js/addons/vfs_fonts.js')}} defer"></script>
<script type="text/javascript" src="{{asset('js/addons/datatables.min.js')}} defer"></script>

{{-- ADD-on --}}


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


        $('.colab-input').click(function() {
            $colab = $(this).val();
            // if ($colab === 'no') {
            //     // $('.colab-yes').attr(hidden)
            // }
            if ($colab == 'yes') {
                // alert('delete');
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

 
</script>

</html>