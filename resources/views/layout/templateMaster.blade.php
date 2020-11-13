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

        $(".modal-accept").click(function(){
            $('#check-agree').attr("checked",true);
            $("#form-submit").removeAttr("disabled");
        });
    })
</script>

</html>
