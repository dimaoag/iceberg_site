$(document).ready( function() {
    var form = $('#form');
    var url = form.attr('action');

    form.submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            success: function( response ) {
                $('#modal').addClass(' modal_open');
                $('body').addClass(' modal_style');
                form[0].reset();
            }
        });


        return false;
    });

});


$('.enter-popap').click(function(event){
    event.preventDefault();
    $('.modal').addClass('modal_open');
    $('body').addClass('modal_style');
});

$('.close-modal').click(function(){
    $('.modal').removeClass('modal_open');
    $('body').removeClass('modal_style');
});



if ($("div").is("#secondary")) {
    $("#secondary").slick({
        dots: false,
        centerMode: false,
        fade: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: false,
        asNavFor: "#primary"
    });

    $("#primary").on('afterChange', function(event, slick, currentSlide){
        $(".cp").text(currentSlide + 1);
    });

    var pol = $("#primaryNavHolder").offset().left;
    $("#secondaryNavHolder").css("left", pol - 30 + "px");


    $(document).ready(function() {
        var time = 2;
        var $bar, $slick, isPause, tick, percentTime;

        $slick = $("#primary");

        $slick.on("init", function(slick) {
            $(".slider-progress").css("width", 119 + "px");
        });

        $slick.on("swipe", function(slick) {
            startProgressbar();
        });

        $slick.slick({
            dots: false,
            fade: true,
            centerMode: false,
            arrows: true,
            nextArrow: '.next_nav',
            prevArrow: '.prev_nav',
            infinite: true,
            pauseOnHover: true,
            slidesToShow: 1,
            adaptiveHeight: false,
            asNavFor: "#secondary"
        });

        $bar = $(".slider-progress .progress");

        function startProgressbar() {
            resetProgressbar();
            percentTime = 0;
            isPause = false;
            tick = setInterval(interval, 30);
        }

        function interval() {
            if (isPause === false) {
                percentTime += 1 / (time + 0.1);
                $bar.css({
                    width: percentTime + "%"
                });
                if (percentTime >= 100) {
                    $slick.slick("slickNext");
                    startProgressbar();
                }
            }
        }

        function resetProgressbar() {
            $bar.css({
                width: 0 + "%"
            });
            clearTimeout(tick);
        }

        startProgressbar();

        $(".next_nav, .prev_nav").click(function() {
            startProgressbar();
        });

        $("#primaryNavHolder")
            .on("mouseenter", function() {
                isPause = true;
            })
            .on("mouseleave", function() {
                isPause = false;
            });

    });


    $('.review-slider').slick({
        dots: false,
        infinite: false,
        speed: 800,
        prevArrow: $('.review-prev'),
        nextArrow: $('.review-next'),
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
}

$("[data-mask='callback-catalog-phone']").mask("+38 0 9 9  9 9 9  9 9  9 9");


