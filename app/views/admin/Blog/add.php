<?php

use site\App;

?>

<section class="content-header">
    <h1>Добавление новости</h1>
    <ol class="breadcrumb">
        <li><a href="<?= ADMIN ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?= ADMIN ?>/blog"><i class="fa fa-folder"></i>Новости</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="register-main">
                        <div class="col-md-12 account-left form-wrap">
                            <form method="post" id="form" action="<?= ADMIN ?>/blog/add"
                                  data-toggle="validator" enctype="multipart/form-data" role="form" autocomplete="off"
                                  data-add_url="<?= ADMIN ?>/blog/add-image"
                                  data-remove_url="<?= ADMIN ?>/blog/remove-image-file"
                            >
                                <div class="form-group has-feedback">
                                    <label for="title">Название новости</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="Название"
                                           data-error="Нужно указать название статьи" data-minlength="3"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="sub-title">Краткое описание</label>
                                    <textarea type="text" name="sub_title" class="form-control" id="sub-title"
                                              placeholder="Краткое описание"
                                              rows="4"
                                              data-error="Нужно заполнить краткое описание" data-minlength="10"
                                              required></textarea>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback file-upload-wrap">
                                    <label>Фото <small> рекомендованные размеры: (ширина - <?= App::$app->getProperty('service_img_width') ?>px; высота - <?= App::$app->getProperty('service_img_height') ?>px; ) </small> </label>
                                    <div class="upload" id="upload">

                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="editor1">Текст новости</label>
                                    <textarea type="text" name="text" class="form-control" id="editor1"
                                              placeholder=""
                                              rows="20"
                                              data-error="Новость нужно заполнить текстом" data-minlength="20"
                                              required></textarea>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <!--                                    <div class="box-footer">-->
                                    <button type="submit" class="btn btn-block btn-success" id="submit-all">Сохранить
                                    </button>
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

