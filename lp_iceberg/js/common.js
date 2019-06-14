$("#open-quize").on("click", function () {
    $(".quize-main-container").addClass("quize-main-container-open");
    $("body").addClass("overlow-hidden");
});

var phrases = [
    "Этот этап очень важен, нужно понять какие у Вас цели продать или рассказать о себе.",
    "Вы хотите сделать новый сайт или это улучшение предыдущей версии?",
    "Сфера деятельности поможет нам понять какой сайт более подходящий в Вашем случае.",
    "Разработка сайта не быстрый процесс поэтому нужно понимать когда Вы хотите запустить свой сайт",
    "Что б не предлагать Вам все подряд, мы будем отталкиваться от Вашего бюджета и предложим оптимальные варианты по цене и Вашему запросу.",
    "Оставь свои контакты и мы вышлем ориентировочною цену и сроки разработки сайта"
]

var progressCount = function () {
    var progressBarLine = $(".progress-bar-line");
    var countSlider = $(".quize-slider").find(".quize-slider-item");
    var progress = Math.round(100) / Math.round(countSlider.length - 1);
    var progressWidth = 0;
    var i = 0;

    progressBarLine.each(function () {

        if (i === progressBarLine.length - 1) {
            progressWidth -= 5;
            $(this).css("width", progressWidth + "%");
        } else {
            $(this).css("width", progressWidth + "%");
            $(this).parent().parent().find(".progress-in-procent").html(progressWidth);
            progressWidth += progress;
        }
        i++;
    });
}

var nextSlide = function (currentSlide2) {
    var slides2 = $('.quize-slider-item');
    var currentSlide = $('.quize-slider').children().eq(currentSlide2);
    var buttonNext = currentSlide.find('.next');
    if (buttonNext.is('[disabled=disabled]')) {
        // return false;
    } else {
        currentSlide.removeClass('quize-slider-active');
        var nextSlide = (currentSlide2 + 1);
        $('.quize-slider').children().eq(nextSlide).addClass("quize-slider-active");
        $('.manager-qustion p').html(phrases[nextSlide]);
    }

}

//next prev slide
function prevSlide(currentSlide2) {
    var slides2 = $('.quize-slider-item');
    var currentSlide = $('.quize-slider').children().eq(currentSlide2);
    currentSlide.removeClass('quize-slider-active');
    var prevSlide = currentSlide2 = (currentSlide2 - 1);
    $('.quize-slider').children().eq(prevSlide).addClass("quize-slider-active");
    $('.manager-qustion p').html(phrases[prevSlide]);
}

progressCount();

//click on answer
function diss(button, variantGroupId) {

    var variantGroupId = $(variantGroupId);

    variantGroupId.each(function () {
        if ($(this).find('input[type="radio"]').is(':checked')) {
            $(this).parent().parent().find(".next").removeAttr("disabled");
        } else if ($(this).find('input[type="checkbox"]').is(':checked')) {
            $(this).parent().parent().find(".next").removeAttr("disabled");
        } else {
            $(this).parent().parent().find(".next").attr("disabled", "disabled");
        }
    });

}

$(".politic-confidency-input").on("click", function (){
    if($(".politic-confidency-input").is(":checked")){
        console.log("Согласны");
        $(".were-send-label input").removeAttr("disabled");

    }else{
        console.log("Не согласен");
        $(".were-send-label input").attr("disabled", "disabled");
       if($(".massage-input").is(":checked")){
           console.log("Какойто Чекнутый");
           $(".massage-input").prop('checked', false);
       }
    }
});

$(".were-send-label input").on("click", function(){
    $(".where-send-list").each(function () {
        if($(this).find(".input-viber").is(":checked")){
            console.log("Нашли Вайбер");
            $(".enter-your-number").addClass("viber-icon");
            $(".enter-your-number").removeClass("whatsapp-icon");
            $(".enter-your-number").removeClass("telegram-icon");
            $(".enter-your-number").addClass("enter-your-number-show");
            $(".massager-name").html("Viber");
            $(".before-enter-your-number").addClass("before-enter-your-number-close");
            $(".confidency-label").hide();
        }else if($(this).find(".input-telegram").is(":checked")){
            console.log("Нашли Телегу");
            $(".enter-your-number").addClass("telegram-icon");
            $(".enter-your-number").removeClass("whatsapp-icon");
            $(".enter-your-number").removeClass("viber-icon");
            $(".enter-your-number").addClass("enter-your-number-show");
            $(".massager-name").html("Telegram");
            $(".before-enter-your-number").addClass("before-enter-your-number-close");
            $(".confidency-label").hide();
        }else if($(this).find(".input-whatsapp").is(":checked")){
            console.log("Нашли Вотсап");
            $(".enter-your-number").addClass("whatsapp-icon");
            $(".enter-your-number").removeClass("viber-icon");
            $(".enter-your-number").removeClass("telegram-icon");
            $(".enter-your-number").addClass("enter-your-number-show");
            $(".massager-name").html("WhatsApp");
            $(".before-enter-your-number").addClass("before-enter-your-number-close");
            $(".confidency-label").hide();
        }
    });
});

$("#another-massager").on("click", function (evt){
    evt.preventDefault();
    $(".before-enter-your-number").removeClass("before-enter-your-number-close");
    $(".enter-your-number").removeClass("enter-your-number-show");
    $(".massage-input").prop('checked', false);
    $(".confidency-label").show();
});

$(".next").on("click", function (){
    if($(".quize-slider-item").last().hasClass("quize-slider-active")){
        console.log("Вот тепер уберем бонусы");
        $(".quize-slider-active").closest(".quize-main-item").find(".quize-right-column").addClass("delate-bonus");
        $(".quize-slider-active").find(".lock").addClass("unlock");
        $(".quize-slider-item").addClass("normalize-padding");
    }
});

if($(window).width() <= 1200){
    $(".has-drop-link").on("click", function (evt) {
        evt.preventDefault();
        $(this).next().toggleClass("quize-drop-list-open");
    });
}

$(".mobile-icon-content").on("click", function (){
    $(".mobile-main-contacts-navigation").addClass("open-menu");
});

$(".btn-close-menu").on("click", function(){
    $(".mobile-main-contacts-navigation").removeClass("open-menu");
});

$("[data-mask='callback-catalog-phone']").mask("+38 (999) 999  99  99");

