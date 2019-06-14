<?php

use app\models\admin\Blog;
use site\App;


?>


<section class="content-header">
    <h1>Изменить <?= $blog->username ?></h1>
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
                        <div class="col-md-12 account-left form-wrap edit-form-wrap">
                            <form method="post" id="form" action="<?= ADMIN ?>/blog/edit?id=<?= $blog->id ?>"
                                  data-toggle="validator" enctype="multipart/form-data" role="form" autocomplete="off"
                                  data-add_url="<?= ADMIN ?>/blog/add-image"
                                  data-remove_photo_db_url="<?= ADMIN ?>/blog/delete-image"
                            >

                                <div class="form-group has-feedback">
                                    <label for="username">Название новости</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="Название"
                                           data-error="Нужно указать название статьи" data-minlength="3"
                                           required value="<?= $blog->title ?>">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="username">Краткое описание</label>
                                    <textarea type="text" name="sub_title" class="form-control" id="sub-title"
                                              placeholder="Краткое описание"
                                              rows="4"
                                              data-error="Нужно заполнить краткое описание" data-minlength="3"
                                              required><?= $blog->sub_title ?></textarea>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <?php if (!$blog->image): ?>
                                    <div class="form-group has-feedback file-upload-wrap">
                                        <label>Фото
                                            <small> рекомендованные размеры: (ширина
                                                - <?= App::$app->getProperty('service_img_width') ?>px; высота
                                                - <?= App::$app->getProperty('service_img_height') ?>px; )
                                            </small>
                                        </label>
                                        <div class="upload" id="upload">

                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="form-group">
                                        <div class="col-md-4 gallery-item">
                                            <a href="<?= PATH ?>/upload/<?= $blog->image ?>" target="_blank">
                                                <img src="<?= PATH ?>/upload/<?= $blog->image ?>" class="img-responsive"
                                                     alt="image"/>
                                            </a>
                                            <button type="button" class="btn btn-link remove_image"
                                                    data-name="<?= $blog->image ?>" data-id="<?= $blog->id ?>">Удалить
                                            </button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                <?php endif; ?>
                                <div class="form-group has-feedback">
                                    <label for="editor1">Текст новости</label>
                                    <textarea type="text" name="text" class="form-control" id="editor1"
                                              placeholder=""
                                              rows="20"
                                              data-error="Новость нужно заполнить текстом" data-minlength="10"
                                              required><?= $blog->text ?></textarea>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="clearfix"></div>
                                <input type="hidden" name="date_create" value="<?= $blog->date_create ?>">
                                <input type="hidden" name="id" value="<?= $blog->id; ?>">
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
