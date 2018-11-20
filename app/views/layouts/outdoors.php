<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127488819-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());

        gtag('config', 'UA-127488819-1');
    </script>

    <base href="/">
    <?= $this->getMeta(); ?>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="shortcut icon" href="favicon.ico">-->
    <link rel="shortcut icon" href="images/favicon-m.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/set2.css" />
    <link rel="stylesheet" type="text/css" href="css/dialog.css" />
    <link rel="stylesheet" type="text/css" href="css/dialog-wilma.css" />
    <link rel="stylesheet" href="css/grt-youtube-popup.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/effect2.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <script src="js/modernizr.custom.js" type="text/javascript"></script>


    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter50094541 = new Ya.Metrika2({
                        id:50094541,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/50094541" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


</head>
<body class="loading">

    <?= $content; ?>


    <script>
        var path = '<?=PATH;?>';
    </script>

    <script src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.8.10/jquery-ui.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/libs.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/charming.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="js/jquery.filterizr.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/dialogFx.js"></script>
    <script src="js/demo_button.js"></script>
    <script src="js/grt-youtube-popup.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.scalem.js"></script>
    <script src="js/jquery.vide.min.js"></script>
    <script src="js/nearby.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/pathLoader.js"></script>
    <script src="js/scrollspy.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/canvas-video-player.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>


    <!-- Marquiz script start -->
        <script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Marquiz.init({ id: '5bae909889ae8b0043f1262d' });
            });
        </script>
    <!-- Marquiz script end -->


</body>
</html>
