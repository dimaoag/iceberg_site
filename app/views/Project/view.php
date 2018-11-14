<div class="view-wrapper">

    <svg class="hidden">
        <symbol id="icon-arrow" viewBox="0 0 24 24">
            <title>arrow</title>
            <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
        </symbol>
        <symbol id="icon-drop" viewBox="0 0 24 24">
            <title>drop</title>
            <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
        </symbol>
        <svg id="icon-github" viewBox="0 0 33 33">
            <title>github</title>
            <path d="M16.608.455C7.614.455.32 7.748.32 16.745c0 7.197 4.667 13.302 11.14 15.456.815.15 1.112-.353 1.112-.785 0-.386-.014-1.411-.022-2.77-4.531.984-5.487-2.184-5.487-2.184-.741-1.882-1.809-2.383-1.809-2.383-1.479-1.01.112-.99.112-.99 1.635.115 2.495 1.679 2.495 1.679 1.453 2.489 3.813 1.77 4.741 1.353.148-1.052.569-1.77 1.034-2.177-3.617-.411-7.42-1.809-7.42-8.051 0-1.778.635-3.233 1.677-4.371-.168-.412-.727-2.069.16-4.311 0 0 1.367-.438 4.479 1.67a15.602 15.602 0 0 1 4.078-.549 15.62 15.62 0 0 1 4.078.549c3.11-2.108 4.475-1.67 4.475-1.67.889 2.242.33 3.899.163 4.311C26.37 12.66 27 14.115 27 15.893c0 6.258-3.809 7.635-7.437 8.038.584.503 1.105 1.497 1.105 3.017 0 2.177-.02 3.934-.02 4.468 0 .436.294.943 1.12.784 6.468-2.159 11.131-8.26 11.131-15.455 0-8.997-7.294-16.29-16.291-16.29"></path>
        </svg>
        <symbol id="icon-heart" viewBox="0 0 24 21">
            <path d="M20.497.957A6.765 6.765 0 0 0 17.22.114a6.76 6.76 0 0 0-5.218 2.455A6.778 6.778 0 0 0 3.506.957 6.783 6.783 0 0 0 0 6.897c0 .732.12 1.434.335 2.09 1.163 5.23 11.668 11.827 11.668 11.827s10.498-6.596 11.663-11.826a6.69 6.69 0 0 0 .336-2.091 6.786 6.786 0 0 0-3.505-5.94z"/>
        </symbol>
    </svg>

    <div class="view-section-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 view-header d-flex flex-wrap justify-content-between">
                    <div class="breadcrumbs d-flex">

                        <a class='view-breadcrumb view-back d-flex align-items-center' href="/">
                            <div class="breadcrumbs-arrow"></div>
                            Главная
                        </a>
                        <p class="px-1">/</p>
                        <p class='view-breadcrumb'><?=$project->title;?></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="#" class="view-header-phone">+380 93 91 79 871</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container view-header-block">
            <div class="row">
                <div class="col-lg-5">
                    <div class="project-header">
                        <div class="project-title"><?=$project->title;?></div>
                        <div class="project-description"><?=$project->description;?></div>
                        <!--<a href="#" class="project-button"><span>Посмотреть сайт</span><span class="think-arrow-right"></span></a>-->
                        <a class="iconbutton iconbutton--border" href="<?=$project->url;?>">
                            <span class="iconbutton__text">Посмотреть сайт</span>
                            <span class="iconbutton__graphic">
							        <svg class="icon icon--arrow-right"><use xlink:href="#icon-arrow"></use></svg>
						        </span>
                            <div class="iconbutton__border"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 view-banner-wrap">
                    <img src="images/<?=$project->img_banner;?>" alt="image">
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="task-name">Задача проекта</div>
                <div class="task-line"></div>
            </div>
            <div class="col-md-8">
                <div class="task-value">
                    <?=h($project->task);?>
                </div>
            </div>
        </div>
        <div class="empty-space"></div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="task-name">Дизайн сайта</div>
                <div class="task-line"></div>
            </div>
            <div class="col-md-8">
                <div class="task-value">
                    <?=h($project->design);?>
                </div>
                <div class="task-colors d-flex">
                    <div class="task-color" style="background-color: <?=$project->color_1;?>"></div>
                    <div class="task-color" style="background-color: <?=$project->color_2;?>"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="video-project-bg"
                     data-vide-bg="mp4: videos/<?=$project->video_big;?>, poster: images/<?=$project->img_preview;?>"
                     data-vide-options="loop: true, posterType: detect, autoplay: true, muted: true, position: 0% 0%">
                </div>
<!---->
<!--                <video class="video" id="video" width="100%" height="100%" title="video" src="videos/m.mp4" muted="muted">-->
<!---->
<!--                </video>-->
                <!--<div class="project-video pretty-embed" data-pe-videoid="Cbti19KM3wk" data-pe-fitvids="true"></div>-->
            </div>
        </div>
    </div>


    <div class="container view-phone-section">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-phone">
                    <img src="images/<?=$project->img_responsive;?>" alt="images">
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div>
                    <div class="task-name">Адаптивная версия</div>
                    <div class="task-line mb-3"></div>
                </div>
                <div class="task-value">
                    <?=h($project->responsive);?>
                </div>
            </div>
        </div>
    </div>


    <div class="container view-review-wrap">
        <div class="row my-3">
            <div class="col-lg-8">
                <div class="view overlay">
                    <img src="https://i.ytimg.com/vi/<?=$project->video_small;?>/maxresdefault.jpg" alt="ukiWU9ly6d4" />
                    <div class="my-mask flex-center rgba-stylish-light">
                        <a href="#" class="youtube-link" youtubeid="<?=$project->video_small;?>">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="76" height="74" viewBox="0 0 76 74"><g><g transform="translate(-946 -3606)"><image width="76" height="74" transform="translate(946 3606)" xlink:href="data:image/png;base64,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"/></g></g></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex flex-column justify-content-center">
                <div class="review-name pb-2"><?=$project->customer_name;?></div>
                <div class="task-value review-text">
                    <?=$project->customer_review;?>
                </div>
            </div>
        </div>
    </div>

    <div class="container view-form">
        <div class="row">
            <div class="col-12">
                <div class="form-title text-center">Понравился проект?</div>
                <div class="form-text text-center p-3 mb-2">Оставьте заявку и наш специалист свяжется с Вами, чтоб обсудить проект.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="#" class="d-flex justify-content-around flex-wrap js-form">
                    <input type="text" class="form-input my-3" placeholder="Имя" name="name" required>
                    <input type="text" data-mask="callback-catalog-phone" name="phone" class="form-input my-3" placeholder="Телефон" required>
                    <button type="submit" class="project-button form-button my-3">Заказать подобный</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container view-footer-arrow">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <div class="case-arrow-left">
                    <a href="#">
                        <div class="case-arrow case-arrow-left-line"></div>
                        <div class="case-arrow-text text-center">предыдущий кейс</div>
                    </a>
                </div>
                <div class="case-arrow-right">
                    <a href="#">
                        <div class="case-arrow case-arrow-right-line"></div>
                        <div class="case-arrow-text text-center">следующий кейс</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container view-footer-text">
        <div class="row">
            <div class="button-wrap"><button data-dialog="somedialog" class="trigger bnt-thanks"></button></div>
            <div class="col-12 text-center font-small py-4">© Iceberg, 2017–2018.</div>
        </div>
    </div>
</div>

<div id="somedialog" class="dialog">
    <div class="dialog__overlay"></div>
    <div class="dialog__content">
        <div class="morph-shape">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
                <rect x="3" y="3" fill="none" width="556" height="276"/>
            </svg>
        </div>
        <div class="dialog-inner">
            <h3><strong>Спасибо за заявку</strong></h3>
            <p>Наш менеджер в ближайшее время свяжется с Вами</p>
            <div><button class="action btn btn-dark text-white" data-dialog-close>Закрыть</button></div>
        </div>
    </div>
</div>