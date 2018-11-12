<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <base href="/outdoors/">
    <?= $this->getMeta(); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="shortcut icon" href="favicon.ico">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
    <!--script src="//tympanus.net/codrops/adpacks/analytics.js"></script-->
</head>
<body class="loading">
<svg class="hidden">
    <symbol id="icon-arrow" viewBox="0 0 24 24">
        <title>arrow</title>
        <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
    </symbol>
    <symbol id="icon-drop" viewBox="0 0 24 24">
        <title>drop</title>
        <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
    </symbol>
    <symbol id="icon-menu" viewBox="0 0 24 13">
        <title>menu</title>
        <path d="M.75 1.515h22.498a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM23.248 5.265H8.168a.75.75 0 0 0 0 1.5h15.08a.75.75 0 0 0 0-1.5zM23.248 10.514H4.322a.75.75 0 0 0 0 1.5h18.926a.75.75 0 0 0 0-1.5z"/>
    </symbol>
    <symbol id="icon-dot" viewBox="0 0 24 24">
        <title>dot</title>
        <path d="M11.5 9c-.69 0-1.28.244-1.768.732A2.41 2.41 0 0 0 9 11.5c0 .69.244 1.28.732 1.767A2.409 2.409 0 0 0 11.5 14c.69 0 1.28-.244 1.768-.733A2.408 2.408 0 0 0 14 11.5c0-.69-.244-1.28-.732-1.768A2.408 2.408 0 0 0 11.5 9z"/>
    </symbol>
    <symbol id="icon-cross" viewBox="0 0 24 24">
        <title>cross</title>
        <path d="M11.449 11.962l-5.1 5.099a.363.363 0 1 0 .513.512L12 12.436l5.137 5.137a.361.361 0 0 0 .513 0 .363.363 0 0 0 0-.512l-5.099-5.1 5.102-5.102a.363.363 0 1 0-.512-.513L12 11.487l-5.141-5.14a.363.363 0 0 0-.513.512l5.103 5.103z"/>
    </symbol>
    <symbol id="icon-arrowlong" viewBox="0 0 32 11">
        <title>arrow-long</title>
        <path d="M27.166.183a.619.619 0 0 0-.878 0 .619.619 0 0 0 0 .878l2.735 2.735H.768a.624.624 0 0 0 0 1.248h28.254L26.287 7.77a.619.619 0 0 0 0 .878.617.617 0 0 0 .441.183c.163 0 .32-.061.442-.183l3.796-3.796a.623.623 0 0 0-.005-.878L27.166.183z"/>
    </symbol>
    <symbol id="icon-close" viewBox="0 0 24 24">
        <title>close</title>
        <path d="M21 4.565L19.435 3 12 10.435 4.565 3 3 4.565 10.435 12 3 19.435 4.565 21 12 13.565 19.435 21 21 19.435 13.565 12z"/>
    </symbol>
    <symbol id="icon-navup" viewBox="0 0 50 50">
        <title>navup</title>
        <path d="M20.259 28.211l5.07-5.03 5.075 5.034a.36.36 0 0 0 .51 0 .356.356 0 0 0 0-.506l-5.323-5.28a.404.404 0 0 0-.135-.084.364.364 0 0 0-.384.08l-5.324 5.28a.356.356 0 0 0 0 .506c.141.14.37.14.51 0z" />
    </symbol>
    <symbol id="icon-navdown" viewBox="0 0 50 50">
        <title>navdown</title>
        <path d="M20.259 22.43l5.07 5.03 5.075-5.034a.36.36 0 0 1 .51 0c.14.14.14.366 0 .506l-5.323 5.28a.404.404 0 0 1-.135.084.364.364 0 0 1-.384-.081l-5.324-5.28a.356.356 0 0 1 0-.505c.141-.14.37-.14.51 0z" />
    </symbol>
    <symbol id="icon-grid" viewBox="0 0 24 24">
        <title>grid</title>
        <path d="M8.982 8.982h5.988v5.988H8.982zM0 0h5.988v5.988H0zM8.982 17.965h5.988v5.988H8.982zM0 8.982h5.988v5.988H0zM0 17.965h5.988v5.988H0zM17.965 0h5.988v5.988h-5.988zM8.982 0h5.988v5.988H8.982zM17.965 8.982h5.988v5.988h-5.988zM17.965 17.965h5.988v5.988h-5.988z"/>
    </symbol>
</svg>
<main>
    <div class="sections">
        <header class="sections__header d-flex justify-content-between align-items-start flex-wrap">
            <h1 class="title">IceBerg</h1>
            <a href="tel:0939179871" class="mr-3">+38 (093) 917-98-71</a>
        </header>

        <!-- menu -->
        <nav class="menu">
            <ul class="menu__inner">
                <li class="menu__item"><a class="menu__item-link" href="#">Our Story</a></li>
                <li class="menu__item"><a class="menu__item-link" href="#">Adventures</a></li>
                <li class="menu__item"><a class="menu__item-link" href="#">Testimonials</a></li>
                <li class="menu__item"><a class="menu__item-link" href="#">Contact</a></li>
            </ul>
            <div class="menu__toggle">
						<span class="menu__toggle-inner menu__toggle-inner--open">
							<svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg>
						</span>
                <span class="menu__toggle-inner menu__toggle-inner--close">
							<svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg>
						</span>
            </div>
        </nav>
        <!-- facts expander with toggles; content for each is in its section -->
        <div class="facts d-flex">
            <div class="facts__toggle block-none hidden">
<!--						<span class="facts__toggle-inner facts__toggle-inner--more d-flex align-items-center">-->
<!--							<svg class="icon icon--dot"><use xlink:href="#icon-dot"></use></svg>-->
<!--							<span class="facts__toggle-text h6">Больше</span>-->
<!--						</span>-->
<!--                <span class="facts__toggle-inner facts__toggle-inner--less d-flex align-items-center">-->
<!--							<svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg>-->
<!--							<span class="facts__toggle-text h6">Скрыть</span>-->
<!--						</span>-->
            </div>
            <div class="my-menu-wrap d-flex">
                <div class="my-menu d-flex align-items-center justify-content-center">
                    <div class="menu-items">
                        <p class="menu-item menu-item-1 disabled" data-id="1" id="">Главная</p>
                        <p class="menu-item" data-id="2" id="menu-tab-2">Портфолио</p>
                        <p class="menu-item" data-id="3" id="menu-tab-3">Цены и сроки</p>
                        <p class="menu-item" data-id="4" id="menu-tab-4">Контакты</p>
                    </div>
                    <div class="menu-content" id="menu-content-1">
                        <span class="my-menu-close text-white"><i class="fa fa-times"></i></span>
                        <h1 class="text-white my-click">hello world 11111</h1>
                    </div>
                    <div class="menu-content" id="menu-content-2">
                        <span class="my-menu-close text-white"><i class="fa fa-times"></i></span>
                        <h1 class="text-white my-click">hello world 222222</h1>
                    </div>
                    <div class="menu-content" id="menu-content-3">
                        <span class="my-menu-close text-white"><i class="fa fa-times"></i></span>
                        <div class="prices-wrap">
                            <div class="prices">
                                <div class="price">
                                    <p class="price-title">Сайт-визитка</p>
                                    <p class="price-price">от 300$</p>
                                    <p class="price-date">10-20 дней</p>
                                </div>
                                <div class="price">
                                    <p class="price-title">Лендинг</p>
                                    <p class="price-price">от 400$</p>
                                    <p class="price-date">20-30 дней</p>
                                </div>
                                <div class="price">
                                    <p class="price-title">Интернет-магазин</p>
                                    <p class="price-price">от 1000$</p>
                                    <p class="price-date">30-60 дней</p>
                                </div>
                                <div class="price">
                                    <p class="price-title">Корпоративный сайт</p>
                                    <p class="price-price">от 600$</p>
                                    <p class="price-date">30-40 дней</p>
                                </div>
                                <p class="price-footer text-white">Оплата произсходить поетапно, на карту или наличкой</p>
                            </div>

                        </div>
                    </div>
                    <div class="menu-content" id="menu-content-4">
                        <span class="my-menu-close text-dark"><i class="fa fa-times"></i></span>
                        <div class="contact-wrap d-flex">
                            <div class="contact-left">
                                <div class="contact-left-wrap">
                                    <div class="contact-left-item d-flex flex-column justify-content-between">
                                        <div class="contact-left-item-messages">
                                            <h3 class="messages-title">Месседжеры</h3>
                                            <div class="contact-left-item-socs">
                                                <a href="#" class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="22" viewBox="0 0 24 22"><g><g transform="translate(-1442 -704)"><image width="24" height="22" transform="translate(1442 704)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAWCAYAAADafVyIAAAB5ElEQVRIS7WVz4tPYRTGP4/QZEGKMUnNZiYLK2wUFjY2o1lIw+ZbyihEYSPKj93IQhbq+weQklIzs7JQ8wfI/AEzirJTUxaKxKNze+/t+nbv/b4YZ3vP+3ze9zznnCv+U9jeApzSeuvbngAuAWeB9+sCsL0BOJGEjwOlbv+fALZ3AueAC8B4QzV6fwWwfSjd9jSwuaPMk9mAZNoZ4DKwP8O7T5JGhwIGTNveIPwTCA8GY1HSdCOgw7S6yHdgATgKjDYAbkma+w2QYVqp8wp4AjwCdrSU65ikpQLwB6Z9AK4Dn4GXwNYW8R/ANklfZPs2cAfY2GHcN+ABMAdMAc+ATR35y5IOxPfyBbuAHjAL7B04uAhck/TO9kXgcYup9WN9STHN1cRVH20fBq4A0eM3Jd1PZbwL3Mtoz0jpSXraCEhiMTwfgSVJM7angflM8UiblLTaCkiQqPlVYE+6eZQnJ4oBKxNbBy0N2ApwAzgPxJbMiWLAhgLSK14D+4BogjLC5JPA7hZaMWC5gBngeU2oMN32GPACONIAKQYsF1CaHWu56qj0upiDh2n5lXrVgGUBamavle06eGPb8efqAyPAW0kH6zk523RE0tcud22HaKyOMDjWeRVDATltk14aZRyX9KZ+5hfoepxKPEyqqQAAAABJRU5ErkJggg=="/></g></g></svg>
                                                </a>
                                                <a href="#" class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22"><g><g transform="translate(-1477 -704)"><image width="22" height="22" transform="translate(1477 704)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAADEElEQVRIS4WVa4iVZRSFn5VGhnbRCPFHZFLhvXDwgqCNEYb9StIEUQRvUaSMCjII3pEUg7FIG9EfYvSjKShRNBz9oah4AxFvmVoGGWbBjBoKVu5Yw/6GzzPH6YWPw/ne911n7b3XWkdUrIh4BHg9n1eBl4FngKfz6F3gDvATcBzYBeyVdL8MpfKXiHgXWAf0BXzwEnAG+BNoAe4BTwFPAkPy6QZcBj6Q1FzgtQNHhAEXAxeADcBXkm5WVlRB5HFgErASeAH4UNJGn2kDjoipwJf5zJRkZg+siHge8CWzN7MmSX/n/R7Ad9m+MZIOKyIM7pIN9kpxuArwi8B2oD/QE/gReEfS2QT3u/PARUm1BvaATpXLiIjXgFWABzlH0g95+SXgOvAm8HlWXCPpl9xfmveeM/A04AtgqKQzWbLZ3ADcw7+AYcAg4GAqYhnwfaqiWdLbCTw8300xcB3QAPSS1BIR07PkUcCjCbYZmA9MBmZlLz200cACoLekPyLi2SRUZ+AVwHKgq6R/I2IEcCwvuNyLZilpYLJ6DLgKHM1hepDjLbWI6AL8Y5W0A0sqS+8E0AcYmSWvl+TBta2IWG8iwFpgHzBN0unci86A30hJNUha2JmWq6inHbge+MhuknS7xGobMMN9lfRNslmSvd5jM7mvFYZ5ArgF1LsVHsZWYLCkcyVgi/5A2talNkWEe2trDwWuZW/bpJg/7Cj4GXivrOP3JTVWMPCUza4G+AxYDZile7/bQ5Y0oQRs2X0LjC2cdwVolWS9Vlq5e2bHbOB34FPAg3IE7JNk2RWMvwbechoWWTEvL8yVtKXasCJiDLAG8KeXM6O2aF9EjEuFbJI0rwAujOCSbZjGynwtsRoA9AMOS2rN/J4JfAL8Bgz3+7J23U8nlN3kPPDUbfUOKyKscVu8FpgCOKBOAhMl/eoLlUHv0HGETgR22BQR4Yy2HL3XYQTpQA/WMWrXta0HgKsMrtD4fuBQad9adUSelORed1gPBY6IRcDHwE7/S1QL/2qA/8s4Io6kZu28Dv8onYF67z8Mi1SLwX7/sAAAAABJRU5ErkJggg=="/></g></g></svg>
                                                </a>
                                                <a href="#" class="mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="21" viewBox="0 0 22 21"><g><g transform="translate(-1509 -705)"><image width="22" height="21" transform="translate(1509 705)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAVCAYAAABCIB6VAAAB/UlEQVRIS6WVzatOURTGf4+PUCQiEyEMfeVmJjEgyc2Awc0dmJEJMuFPMKC4AykDDK4iZeArKRmYKEoMjF0DyWcmQnq0jnXY93jPfd+3d8/OWWv99tprP2tt0bJsLwdGge3AOmBhun4CXgAPgHFJrzsh1PxpezFwCjgATG/bOP//Aq4AJyW9L30ngW1vBm4AS7oAm+Z3wD5Jj2vDX7DtrcBdYE4a3wCLiu9ue30Ddkl6FI4V2PYy4DmwIKOfAVuAtcC94n83+Gdgg6SJGnwL2F1EjUq6mpsG/GFm3w0c9tuShmV7IxAZlmtbfaSEnwGO90JNn6EAnwOONILKjHdkOab1AR4LcGgyjluui5IOZrYhvRN9QMP1ZYB/ADMbgV+BlZI+2l4KxE2v6gP+M8BuCbgg6XBmHfBQx5pe4QEO/c1uCRiRdC3h0ZF3gE2Fb7R33eoloso49Lu+Bfw9RR9yC73PBy4BoaSo+83s1OFGfFXjs8DRKY4Yd3BI0uVOPrZn5LzYX9grVXTScSfGdeCYpLdNo+15wBegluRQW+e1HSBKM54leArE92rgdI6AiPvTeVm7mGh7e73xKfz+zQrbs4APwNwBwZOnm+2dqdFBuP/PY9vngaoRQlE5kCaAPQO9ILafAK+A+/GOSYqyhGZXACNADKGYJTH0Y/X05v0GOmXAGLk4QhgAAAAASUVORK5CYII="/></g></g></svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="contact-left-item-messages">
                                            <h3 class="messages-title">Телефоны</h3>
                                            <div class="contact-left-item-socs d-flex flex-column">
                                                <a href="#" class="text-white py-2">+38 (093) 917-98-71</a>
                                                <a href="#" class="text-white py-2">+38 (093) 917-98-71</a>
                                            </div>
                                        </div>
                                        <div class="contact-left-item-messages">
                                            <h3 class="messages-title">Офисс</h3>
                                            <div class="contact-left-item-socs d-flex flex-column">
                                                <p class="text-white m-0">г. Винница, </p>
                                                <p class="text-white m-0">вул. Нансена 7А</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-right">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.1835746313945!2d28.486501125310433!3d49.23500864841576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c8de213a975376!2z0JzQtdGA0Lgg0LzQtdGA0Lgg0LHRjNGO0YLQuCDQutC70YPQsQ!5e0!3m2!1sru!2sua!4v1542040611089" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-section d-flex align-items-center justify-content-center">
                    <a href="#" class="button-rass text-dark">Рассчитать стоимость</a>
                    <svg class="icon icon--arrowlong ml-2"><use xlink:href="#icon-arrowlong"></use></svg>
                </div>
            </div>

            <button class="button-contentclose block-none hidden ">
                <svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg>
            </button>
        </div>
        <!-- index -->
        <div class="sections__index">
					<span class="sections__index-current">
						<span class="sections__index-inner">01</span>
					</span>
            <span class="sections__index-total">04</span>
        </div>
        <!-- navigation down -->
        <nav class="sections__nav">
            <button class="sections__nav-item sections__nav-item--prev">
                <svg class="icon icon--navup"><use xlink:href="#icon-navup"></use></svg>
            </button>
            <button class="sections__nav-item sections__nav-item--next">
                <svg class="icon icon--navdown"><use xlink:href="#icon-navdown"></use></svg>
            </button>
        </nav>

        <?= $content; ?>



    </div><!--/ sections -->
</main>

<script>
    var path = '<?=PATH;?>';
</script>

<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/charming.min.js"></script>
<script src="js/anime.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
