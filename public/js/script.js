// var w = window.innerWidth;
//
// if (w > 1125){
//     loadjscssfile("./css/full-page-scroll.css", "css"); ////dynamically load and add this .css file
//     loadjscssfile("js/full-page-scroll.js", "js"); //dynamically load and add this .js file
//     $(document).ready(function(){
//         new fullScroll({
//             mainElement: 'main',
//             displayDots: true,
//             dotsPosition: 'right',
//             animateTime: 0.5,
//             animateFunction: 'ease'
//         });
//     });
//
// } else {
//     document.styleSheets[2].disabled = true;
//     loadjscssfile("./css/media_small.css", "css");
// }


// function loadjscssfile(filename, filetype){
//     if (filetype=="js"){ //if filename is a external JavaScript file
//         var fileref=document.createElement('script');
//         fileref.setAttribute("type","text/javascript");
//         fileref.setAttribute("src", filename);
//     }
//     else if (filetype=="css"){ //if filename is an external CSS file
//         var fileref=document.createElement("link");
//         fileref.setAttribute("rel", "stylesheet");
//         fileref.setAttribute("type", "text/css");
//         fileref.setAttribute("href", filename);
//     }
//     if (typeof fileref!="undefined")
//         document.getElementsByTagName("head")[0].appendChild(fileref)
// }

// $(document).ready(function($) {
//     $(window).load(function() {
//         setTimeout(function() {
//             $('#preloader').fadeOut('slow', function() {});
//         }, 1000);
//
//     });
// });


// window.addEventListener('resize', function(event){
//     var w = window.innerWidth;
//     console.log(w);
// });


// function thanks(){
//     $('.bnt-thanks').trigger('click');
// }

new WOW().init();


// Preload all the images in the page..
imagesLoaded(document.querySelectorAll('img'), () => {
    document.body.classList.remove('loading');
});

if ($("div").is(".dialog")) {
    (function() {

        var dlgtrigger = document.querySelector( '[data-dialog]' ),
            somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
            dlg = new DialogFx( somedialog );

        dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

    })();
}



$('.project-title').scalem({
    ratio: 0.8,
    styles: 'border-width',
});



$(".youtube-link").grtyoutube();

// tabs
$(".tab-item").not(":first").hide();
$(".tabs .tab").click(function() {
    $(".tabs .tab").removeClass("active-tab").eq($(this).index()).addClass(" active-tab");
    $(".tab-item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active-tab");



if (w > 700){
    $('#video').scrollSpy();
    $('#video').on('scrollSpy:enter', function() {
        $('#video').trigger('play');
    });
}

// $('#video').on('scrollSpy:exit', function() {
//     $('#video').trigger('pause');
// });


if ($("div").is(".view-section-1")) {

    /**************** Button ****************/

    const lineEq = (y2, y1, x2, x1, currentVal) => {
        // y = mx + b
        var m = (y2 - y1) / (x2 - x1), b = y1 - m * x1;
        return m * currentVal + b;
    };

    const distanceThreshold = {min: 0, max: 100};

    const bttn = document.querySelector('.iconbutton--border');
    const bttnBorder = bttn.querySelector('.iconbutton__border');
    const borderInterval = {from: 0.1, to: 1};

    const bttnGraphic = bttn.querySelector('.iconbutton__graphic');
    const bttnText = bttn.querySelector('.iconbutton__text');
    const graphicInterval = {from: 60, to: 0};
    const textInterval = {from: 0, to: -20};

    new Nearby(bttn, {
        onProgress: (distance) => {
            const border = lineEq(borderInterval.from, borderInterval.to, distanceThreshold.max, distanceThreshold.min, distance);
            TweenMax.to(bttnBorder, 0.5, {
                ease: 'Expo.easeOut',
                opacity: `${Math.max(Math.min(border,borderInterval.to),borderInterval.from)}`
            });

            const tx = lineEq(graphicInterval.from, graphicInterval.to, distanceThreshold.max, distanceThreshold.min, distance);
            TweenMax.to(bttnGraphic, 0.5, {
                ease: 'Expo.easeOut',
                x: `${Math.min(tx,graphicInterval.from)}`
            });

            // const txText = lineEq(textInterval.from, textInterval.to, distanceThreshold.max, distanceThreshold.min, distance);
            // const bw = lineEq(grayscaleInterval.from, grayscaleInterval.to, distanceThreshold.max, distanceThreshold.min, distance);
            // TweenMax.to(bttnText, 0.5, {
            //     ease: 'Expo.easeOut',
            //     x: `${Math.min(txText,graphicInterval.to)}`,
            //     filter: `grayscale(${Math.min(bw,grayscaleInterval.from)})`
            // });
        }
    });

}


$(document).ready(function(){

    $('.js-iframe').on('click', function(e){
        e.preventDefault();
        var $target = $(this);
        var src = $(this).attr('href');
        var $iframe = $target.find('iframe');
        if ($iframe.length > 0) {
            $iframe.attr('src', src);
        } else {
            $target.append('<iframe src=' + src +'></iframe>');
            $target.addClass('hide-bg');
        }
    });

});


//mask
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});


((function ($) {
    $(function(){

        $(document).ready(function() {
            $("[data-mask='callback-catalog-phone']").mask("+3 80 9 9 - 9 9 9 - 9 9 - 9 9");
        });
    })
})(jQuery));

$('.menu__item-link').click(function () {
    $('.menu__toggle-inner--close').trigger('click');
});



$('.js-form').each(function(){
    var $this = $(this);
    $this.validate({
        highlight: function(element) {
            setTimeout(function(){
                $(element).closest('.b-field').addClass('has-error');
            }, 100)
        },
        unhighlight: function(element) {
            $(element).closest('.b-field').removeClass('has-error');
        },
        onkeyup: false,
        onclick: false,
        rules: {
            Имя: {
                required: true,
            },
            Телефон: {
                required: true,
                myphone: true
            },
        },
        messages: {
            Имя: {
                required: "Введите имя",
            },
            Телефон: {
                required: "Введите номер телефона"
            }
        },
        submitHandler: function(form) {
            var phone = $this.find("input[name='phone']").val();
            var name = $this.find("input[name='name']").val();


            $.ajax({
                url: path + '/main/send-order',
                data: {phone: phone, name: name},
                type: 'post',
                success: function (res) {
                    $('.bnt-thanks').trigger('click');
                    $('.js-form')[0].reset();
                },
                error: function () {
                    alert('Error!')
                },
            });
            return false;
        },
    });
});


$('.js-form-index').each(function(){
    var $this = $(this);
    $this.validate({
        highlight: function(element) {
            setTimeout(function(){
                $(element).closest('.b-field').addClass('has-error');
            }, 100)
        },
        unhighlight: function(element) {
            $(element).closest('.b-field').removeClass('has-error');
        },
        onkeyup: false,
        onclick: false,
        rules: {
            Телефон: {
                required: true,
                myphone: true
            },
        },
        messages: {
            Телефон: {
                required: "Введите номер телефона"
            }
        },
        submitHandler: function(form) {
            var phone = $this.find("input[name='phone']").val();

            $.ajax({
                url: path + '/main/send-phone',
                data: {phone: phone},
                type: 'post',
                success: function (res) {
                    $('.btn-close-index-form').trigger('click');
                    $('#open-index-thanks').trigger('click');
                    $('.js-form-index')[0].reset();
                    console.log('success');
                },
                error: function () {
                    alert('Error!')
                },
            });
            return false;
        },
    });
});




var w = '';
var w_default = window.innerWidth;

if (w_default > 879) {
    var elem = document.getElementById('sections');
    // var facts = document.getElementById('facts');

    if (elem.addEventListener) {
        if ('onwheel' in document) {
            // IE9+, FF17+
            elem.addEventListener("wheel", onWheel);
        } else if ('onmousewheel' in document) {
            // устаревший вариант события
            elem.addEventListener("mousewheel", onWheel);
        } else {
            // Firefox < 17
            elem.addEventListener("MozMousePixelScroll", onWheel);
        }
    } else { // IE8-
        elem.attachEvent("onmousewheel", onWheel);
    }

    // if (facts.addEventListener) {
    //     facts.addEventListener("wheel", function (event) {
    //         event.stopPropagation()
    //     });
    // }



// Это решение предусматривает поддержку IE8-
    function onWheel(e) {
        e = e || window.event;

        // deltaY, detail содержат пиксели
        // wheelDelta не дает возможность узнать количество пикселей
        // onwheel || MozMousePixelScroll || onmousewheel
        var delta = e.deltaY || e.detail || e.wheelDelta;


        if (delta > 0) {
            $('.sections__nav-item--next').trigger('click');
        } else {
            $('.sections__nav-item--prev').trigger('click');
        }

        e.preventDefault ? e.preventDefault() : (e.returnValue = false);
    }
}

window.onresize = function(event) {
    w = window.innerWidth;
   
    if (w > 879) {
        var elem = document.getElementById('sections');

        if (elem.addEventListener) {
            if ('onwheel' in document) {
                // IE9+, FF17+
                elem.addEventListener("wheel", onWheel);
            } else if ('onmousewheel' in document) {
                // устаревший вариант события
                elem.addEventListener("mousewheel", onWheel);
            } else {
                // Firefox < 17
                elem.addEventListener("MozMousePixelScroll", onWheel);
            }
        } else { // IE8-
            elem.attachEvent("onmousewheel", onWheel);
        }


// Это решение предусматривает поддержку IE8-
        function onWheel(e) {
            e = e || window.event;

            // deltaY, detail содержат пиксели
            // wheelDelta не дает возможность узнать количество пикселей
            // onwheel || MozMousePixelScroll || onmousewheel
            var delta = e.deltaY || e.detail || e.wheelDelta;


            if (delta > 0) {
                $('.sections__nav-item--next').trigger('click');
            } else {
                $('.sections__nav-item--prev').trigger('click');
            }

            e.preventDefault ? e.preventDefault() : (e.returnValue = false);
        }
    }
    
    
};

if ($("div").is(".section-video-wrap")) {
    $(".video-project-bg").fitVids();
}





