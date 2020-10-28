<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
    <style>
        .carousel-caption {
            position: absolute;
            top: 0;
            text-align: left;
            left: inherit;
            right: inherit;
            width: 280px;
            color: #000;
        }

        .carousel-caption:not(#caption-0) {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div id="slider" class="carousel slide col-xs-8" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1" class=""></li>
                    <li data-target="#slider" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="First slide" src="http://lorempixel.com/660/300/nature/3/">
                    </div>
                    <div class="item">
                        <img alt="Second slide" src="http://lorempixel.com/660/300/nature/2/">
                    </div>
                    <div class="item">
                        <img alt="Third slide" src="http://lorempixel.com/660/300/nature/5/">
                    </div>
                </div>
            </div>

            <div id="slider_captions" class="col-xs-4">
                <div>
                    <div id="caption-0" class="carousel-caption">
                        <h2>Title 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                    </div>
                    <div id="caption-1" class="carousel-caption">
                        <h2>Title 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, enim. A sint repudiandae tempora, nulla aliquam</p>
                    </div>
                    <div id="caption-2" class="carousel-caption">
                        <h2>Title 3</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    $("#slider").on('slide.bs.carousel', function(evt) {

        var step = $(evt.relatedTarget).index();

        $('#slider_captions .carousel-caption:not(#caption-' + step + ')').fadeOut('fast', function() {
            $('#caption-' + step).fadeIn();
        });

    });
</script>

</html>
