<section class="content-header">
    <h1>Добавить новый проэкт</h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/project"><i class="fa fa-dashboard"></i>Все проэкты</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="register-main">
                        <div class="col-md-12 account-left">
                            <form method="post" action="<?=ADMIN?>/project/add" data-toggle="validator" role="form">
                                <div class="form-group has-feedback">
                                    <label for="name">Название</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Название статьи"
                                           data-error="Minimum of 4 chars" data-minlength="3"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="editor1">Описание</label>
                                    <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="box box-info box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title">Фото на главной странице (в слайдере)</h3>
                                        </div>
                                        <div class="box-body">
                                            <div id="img_preview" class="btn btn-success" data-url="/project/add-image" data-name="img_preview" data-act="add" data-id="0">
                                                Выберите изображение
                                            </div>
                                            <p>
                                                <small>
                                                    Recommended size:
                                                    <?=\iceberg\App::$app->getProperty('preview_width'); ?>
                                                    x
                                                    <?=\iceberg\App::$app->getProperty('preview_height'); ?>
                                                </small>
                                            </p>
                                            <div class="img_preview"></div>
                                        </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="task">Задача</label>
                                    <textarea name="task" id="task" cols="30" rows="6" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="design">Дизайт</label>
                                    <textarea name="design" id="design" cols="30" rows="6" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="responsive">Адаптивная версия</label>
                                    <textarea name="responsive" id="responsive" cols="30" rows="6" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="box box-info box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title">Фото на странице просмотра проэкта (баннер)</h3>
                                        </div>
                                        <div class="box-body">
                                            <div id="img_banner" class="btn btn-success" data-url="/project/add-image" data-name="img_banner" data-act="add" data-id="0">
                                                Выберите изображение
                                            </div>
                                            <p>
                                                <small>
                                                    Recommended size:
                                                    <?=\iceberg\App::$app->getProperty('banner_width'); ?>
                                                    x
                                                    <?=\iceberg\App::$app->getProperty('banner_height'); ?>
                                                </small>
                                            </p>
                                            <div class="img_banner"></div>
                                        </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="color_1">Цвет 1</label>
                                    <input type="text" name="color_1" class="form-control" id="color_1" placeholder="#000000"
                                           data-error="Minimum of 4 chars" data-minlength="6"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="color_2">Цвет 2</label>
                                    <input type="text" name="color_2" class="form-control" id="color_2" placeholder="#000000"
                                           data-error="Minimum of 4 chars" data-minlength="6"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <div class="box box-info box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title">Фото в телефоном режиме</h3>
                                        </div>
                                        <div class="box-body">
                                            <div id="img_responsive" class="btn btn-success" data-url="/project/add-image" data-name="img_responsive" data-act="add" data-id="0">
                                                Выберите изображение
                                            </div>
                                            <p>
                                                <small>
                                                    Recommended size:
                                                    <?=\iceberg\App::$app->getProperty('responsive_width'); ?>
                                                    x
                                                    <?=\iceberg\App::$app->getProperty('responsive_height'); ?>
                                                </small>
                                            </p>
                                            <div class="img_responsive"></div>
                                        </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="url">Ссылка на сайт проэкта</label>
                                    <input type="text" name="url" class="form-control" id="url" placeholder="http://site.com"
                                           data-error="Minimum of 4 chars" data-minlength="6"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="video_small">Ссылка на видео с отзывом (Youtube)</label>
                                    <input type="text" name="video_small" class="form-control" id="video_small" placeholder="ukiWU9ly6d4"
                                           data-error="Minimum of 4 chars" data-minlength="6"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <div class="box box-info box-solid file-upload">
                                        <div class="box-header">
                                            <h3 class="box-title">Видео о проэкте</h3>
                                        </div>
                                        <div class="box-body">
                                            <div id="video_big" class="btn btn-success" data-url="/project/add-video" data-name="video_big" data-act="add" data-id="0">
                                                Выберите файл
                                            </div>
                                            <div class="video_big"></div>
                                        </div>
                                        <div class="overlay">
                                            <i class="fa fa-refresh fa-spin"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="customer_name">Имя и фамилия заказчика</label>
                                    <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Имя и фамилия"
                                           data-error="Minimum of 4 chars" data-minlength="6"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="customer_review">Отзыв заказчика</label>
                                    <input type="text" name="customer_review" class="form-control" id="customer_review" placeholder="Отзыв"
                                           data-error="Minimum of 4 chars" data-minlength="6"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <!--                                    <div class="box-footer">-->
                                    <button type="submit" class="btn btn-block btn-success">Сохранить</button>
                                    <!--                                    </div>-->
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

