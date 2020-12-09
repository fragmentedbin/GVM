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

    // SELECT GENRE //

    // ------------ //

});