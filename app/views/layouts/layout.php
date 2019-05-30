<!DOCTYPE html>
<html lang="ru">

<head>


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KHLC7BZ');</script>
    <!-- End Google Tag Manager -->



    <meta charset="utf-8">
    <base href="/">

    <?= $this->getMeta(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="<?= PATH?>/img/favicon/favicon-32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= PATH?>/img/favicon/favicon-180.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#fff">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#fff">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">

    <!--Style-->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHLC7BZ"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header>
        <div class="container-full">
            <div class="custom_row">
                <div class="column logo_and_burger-column">
                    <div class="logo_and_burger-wrapper">
                        <div class="burger-wrapper">
                            <button type="button" class="burger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <div class="logo">
                            <a href="/">
                                <img src="<?= PATH?>/img/ICEBERG_STUDIO.png" alt="ICEBERG_STUDIO.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column phone-column">
                    <ul class="list-vertical some-menu-header-list">
                        <li>
                            <a title="Страница в разработке" href="<?=PATH?>/portfolio">Портфолио</a>
                        </li>
                        <li>
                            <a title="Страница в разработке" href="<?=PATH?>/main/contacts">Контакты</a>
                        </li>
                        <li class="is-drop">
                            <a href="tel:0962965202">+38 (096) 296-52-02</a>
                            <ul>
                                <li>
                                    <a href="tel:0962965202">+38 (096) 296-52-02</a>
                                </li>
                                <li>
                                    <a href="tel:0634583320">+38 (063) 458-33-20</a>
                                </li>
                                <li>
                                    <a href="tel:0956840176">+38 (095) 684-01-76</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="column order-button_column">
                    <a href="#" class="order-btn enter-popap">Заказать сайт</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <?= $content; ?>
        <section class="s-feetback">
            <div class="container">
                <div class="custom_row">
                    <div class="personal-column column">
                        <div class="personal-column-img" style="background-image: url('<?= PATH ?>/img/manager-sergey.png')"></div>
                    </div>
                    <div class="personal-info-column column">
                        <p class="f-promo">
                            Давайте обсудим
                            Ваш проект
                        </p>
                        <div class="under-promo">
                            Мы зададим пару вопросов и ответим на ваши.
                        </div>
                        <div class="about-manager-content">
                            <p class="manager-status">
                                Менеджер по работе с клиентами
                            </p>
                            <p class="manager-name">
                                Соц Сергей
                            </p>
                        </div>
                    </div>
                    <div class="f-form-column column">
                        <div class="f-form-main-wrap">
                            <form action="<?= PATH ?>/main/send-phone" method="post">
                                <p class="form-item">
                                    <input type="text" name="phone" placeholder="Введите ваш телефон" class="call-back-input" required data-mask="callback-catalog-phone">
                                </p>
                                <div class="f-form-button">
                                    <button type="submit" class="btn_blue">Обсудить проект</button>
                                </div>
                            </form>
                            <p class="call-back-text">
                                или позвоните по телефону
                            </p>
                            <a href="tel:0962965202" class="f-call-link">+38 (096) 296-52-02</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="custom_row f_menu_row">
                <div class="column f-col_four">
                    <h4 class="f-headline">НАШИ УСЛУГИ</h4>
                    <ul class="footer_nav list-style">
                        <li><a title="Страница в разработке" href="#">Создание Landing Page</a></li>
                        <li><a title="Страница в разработке" href="#">Создание интернет-магазина</a></li>
                        <li><a title="Страница в разработке" href="#">Создание сайта-визитки</a></li>
                        <li><a title="Страница в разработке" href="#">Создание сайта-каталога</a></li>
                        <li><a title="Страница в разработке" href="#">Создание интернет-портала</a></li>
                    </ul>
                </div>
                <div class="column f-col_four">
                    <h4 class="f-headline">КЛИЕНТУ</h4>
                    <ul class="footer_nav list-style">
                        <li><a title="Страница в разработке" href="#">Как начать работу?</a></li>
                        <li><a title="Страница в разработке" href="#">Возможности</a></li>
                        <li><a title="Страница в разработке" href="#">Стоимость сайта</a></li>
                        <li><a title="Страница в разработке" href="#">Сроки разработки сайта</a></li>
                    </ul>
                </div>
                <div class="column f-col_four">
                    <h4 class="f-headline">О НАС</h4>
                    <ul class="footer_nav list-style">
                        <li><a title="Страница в разработке" href="#">О компании Iceberg</a></li>
                        <li><a title="Страница в разработке" href="<?= PATH ?>/portfolio">Портфолио</a></li>
                        <li><a title="Страница в разработке" href="#">Отзывы</a></li>
                        <li><a title="Страница в разработке" href="#">Партнерство</a></li>
                        <li><a title="Страница в разработке" href="#">Вакансии</a></li>
                        <li><a title="Страница в разработке" href="<?= PATH ?>/main/contacts">Контакты</a></li>
                    </ul>
                </div>
                <div class="column f-col_four">
                    <h4 class="f-headline">КОНТАКТЫ</h4>
                    <div class="f-contact-box">
                        <div class="f-contact-box-item">
                            <address>
                                г. Винница ул. Нансена 7а
                            </address>
                        </div>
                        <div class="f-contact-box-item">
                            <a href="tel:0962965202">+38 (096) 296-52-02</a>
                        </div>
                        <div class="f-contact-box-item">
                            <a href="tel:0634583320">+38 (063) 458-33-20</a>
                        </div>
                        <div class="f-contact-box-item">
                            <a href="tel:0956840176">+38 (095) 684-01-76</a>
                        </div>
                        <div class="f-contact-box-item">
                            <a href="mailto:iceberg.vn.ua@gmail.com">iceberg.vn.ua@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom_row">
                <div class="column footer_social_column">
                    <ul class="f-social-list list-vertical">
                        <li>
                            <a href="viber://chat?number=+3806345833208">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19"><g><g><path fill="#b5b5b5" d="M15.756 13.58l-.437.436c-.618.618-2.039.569-2.952.392-3.036-.586-6.576-4.017-7.258-6.988-.338-1.472-.152-2.752.336-3.24l.437-.437a.618.618 0 0 1 .873 0L8.503 5.49c.116.117.18.272.18.437a.61.61 0 0 1-.18.436l-.437.437a1.238 1.238 0 0 0 0 1.748l2.885 2.847a1.235 1.235 0 0 0 1.748 0l.436-.437a.646.646 0 0 1 .874 0l1.747 1.747a.617.617 0 0 1 0 .874zM9.887.225C4.731.226.5 4.456.5 9.613c0 1.701.459 3.358 1.329 4.807L.499 19l4.58-1.329A9.325 9.325 0 0 0 9.888 19c5.156 0 9.387-4.231 9.387-9.387 0-5.156-4.231-9.387-9.387-9.387z"/></g></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="tg://resolve?domain=iceberg_studio">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="19" viewBox="0 0 22 19"><g><g><path fill="#b5b5b5" d="M7.004 10.156l9.645-5.94c.173-.107.351.128.203.266l-7.96 7.398c-.28.26-.46.61-.511.988l-.271 2.009c-.036.268-.413.295-.487.035L6.58 11.248a.971.971 0 0 1 .424-1.092zM.467 9.294l4.935 1.842 1.91 6.143a.58.58 0 0 0 .923.278l2.75-2.243a.82.82 0 0 1 1-.028l4.962 3.602a.581.581 0 0 0 .911-.351l3.635-17.482a.582.582 0 0 0-.78-.661L.463 8.206c-.5.193-.496.9.005 1.088z"/></g></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/iceberg.vn/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19"><g><g><g><g><path fill="#b5b5b5" d="M17.578 13.34a3.749 3.749 0 0 1-3.75 3.749H6.15a3.749 3.749 0 0 1-3.749-3.75V5.66a3.749 3.749 0 0 1 3.75-3.749h7.679a3.749 3.749 0 0 1 3.749 3.75zM13.828 0H6.15A5.667 5.667 0 0 0 .49 5.66v7.68c0 3.12 2.54 5.66 5.66 5.66h7.68c3.12 0 5.66-2.54 5.66-5.66V5.66c0-3.12-2.54-5.66-5.66-5.66z"/></g><g><path fill="#b5b5b5" d="M9.989 12.503a3.003 3.003 0 1 1 0-6.006 3.003 3.003 0 0 1 0 6.006zm0-7.917A4.92 4.92 0 0 0 5.075 9.5a4.92 4.92 0 0 0 4.914 4.914A4.92 4.92 0 0 0 14.903 9.5a4.92 4.92 0 0 0-4.914-4.914z"/></g><g><path fill="#b5b5b5" d="M13.735 4.623a1.178 1.178 0 1 1 2.355 0 1.178 1.178 0 0 1-2.355 0z"/></g></g></g></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="18" viewBox="0 0 29 18"><g><g><g><path fill="#b5b5b5" d="M24.987 9.694c-.062-.898-.362-1.578-.904-2.043-.536-.467-1.205-.7-2.003-.7-.87 0-1.539.249-2.018.74-.48.493-.778 1.158-.9 2.003zm3.398-.337c.089.591.129 1.447.111 2.567h-9.413c.053 1.3.5 2.208 1.352 2.728.512.326 1.134.485 1.863.485.769 0 1.395-.194 1.876-.593.263-.212.494-.51.694-.887h3.451c-.092.767-.506 1.544-1.253 2.337-1.157 1.256-2.779 1.888-4.862 1.888-1.722 0-3.238-.534-4.555-1.592-1.313-1.061-1.972-2.787-1.972-5.179 0-2.242.593-3.96 1.78-5.154 1.192-1.197 2.729-1.793 4.625-1.793 1.124 0 2.137.2 3.041.604.901.405 1.645 1.04 2.231 1.915.53.77.872 1.66 1.03 2.674zm-16.909 2.936c0-.938-.384-1.585-1.148-1.934-.428-.197-1.031-.299-1.805-.306H4.648v4.81h3.814c.784 0 1.39-.102 1.828-.317.79-.392 1.186-1.14 1.186-2.253zM4.648 7.066h3.82c.785 0 1.42-.15 1.908-.447.489-.299.732-.828.732-1.589 0-.838-.322-1.395-.969-1.663-.556-.187-1.268-.283-2.13-.283h-3.36zm9.929 2.84c.468.727.703 1.611.703 2.645 0 1.073-.264 2.032-.802 2.88A4.98 4.98 0 0 1 13.2 16.85c-.575.441-1.255.746-2.036.909-.785.163-1.634.242-2.548.242H.486V-.05h8.717c2.197.035 3.754.671 4.674 1.923.552.766.825 1.686.825 2.755 0 1.105-.277 1.987-.834 2.657-.31.377-.767.72-1.374 1.028.92.337 1.616.865 2.083 1.593zm11.111-7.403h-7.27V.697h7.27z"/></g></g></g></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!--Modal-->
    <section class="modal">
        <button class="close-modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30"><g><g><g><path fill="none" stroke="#fff" stroke-miterlimit="50" stroke-width="2" d="M.737 1.5L28 28.763"/></g><g><path fill="none" stroke="#fff" stroke-miterlimit="50" stroke-width="2" d="M28 1.5L.737 28.763"/></g></g></g></svg>
        </button>
        <div class="modal-dialog-centered">
            <div class="modal-content">
                <h2>Оставьте свои контакты и мы <br>
                    проконсультируем Вас в ближайшее время!</h2>
                <div class="form_wrapper-modal">
                    <form action="<?= PATH ?>/main/send-order-site" method="post">
                        <p class="form_wrapper-modal-wrapper">
                            <label>
                                Имя
                                <input type="text" name="username" class="form-input" placeholder="Сергей" required>
                            </label>
                        </p>
                        <p class="form_wrapper-modal-wrapper modal-form-row">
                            <label>
                                Телефон
                                <input type="tel" class="form-input" name="phone" data-mask="callback-catalog-phone" placeholder="+ 380 93 123 21 12" required>
                            </label>
                            <label>
                                E-mail
                                <input type="email" class="form-input" name="email" placeholder="pochta@gmail.com">
                            </label>
                        </p>
                        <p class="form_wrapper-modal-wrapper">
                            <label>
                                Комментарий
                                <textarea placeholder="Введите Ваш вопрос" name="text" class="form-input"></textarea>
                            </label>
                        </p>
                        <div class="form_wrapper_button">
                            <button type="submit" class="btn_blue">Отправить заявку</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
        var path = '<?=PATH;?>';
    </script>

    <!--Script-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/mask.js"></script>
    <script src="js/common.js"></script>



    <script type="text/javascript">
        (function(d, w, s) {
            var widgetHash = '7ayf7wfnxii0zn9t5qxa', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
            gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
            var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
        })(document, window, 'script');
    </script>

    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = 'k8kFIZEVWB';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//code.jivosite.com/script/widget/'+widget_id
            ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
            if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
            else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->


</body>
</html>

