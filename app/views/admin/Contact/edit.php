<?php

use app\models\admin\Contact;

/** @var $contact Contact */

?>


<section class="content-header">
    <h1>Изменить контакты</h1>
    <ol class="breadcrumb">
        <li><a href="<?= ADMIN ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="register-main">
                        <div class="col-md-12 account-left doc-edit-form-wrap">
                            <form method="post" action="<?= ADMIN ?>/contact/edit?id=<?= $contact->id ?>"
                                  data-toggle="validator" role="form" autocomplete="off">

                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group has-feedback">
                                                <label for="address">Адрес</label>
                                                <input type="text" name="address" class="form-control" id="address"
                                                       placeholder="Адрес"
                                                       data-error="Нужно заполнить" data-minlength="1"
                                                       value="<?= $contact->address ?>"
                                                       required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group has-feedback">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" class="form-control" id="address"
                                                       placeholder="Email"

                                                       value="<?= $contact->email ?>"
                                                       required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-group has-feedback">
                                                <label for="phone_1">Телефон 1</label>
                                                <input type="text" name="phone_1" class="form-control" id="phone_1"
                                                       placeholder="Телефон 1"
                                                       value="<?= $contact->phone_1 ?>">
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="form-group has-feedback">
                                                <label for="phone_2">Телефон 2</label>
                                                <input type="text" name="phone_2" class="form-control" id="phone_2"
                                                       placeholder="Телефон 2"
                                                       value="<?= $contact->phone_2 ?>">
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="form-group has-feedback">
                                                <label for="phone_3">Телефон 3</label>
                                                <input type="text" name="phone_3" class="form-control" id="phone_3"
                                                       placeholder="Телефон 3"
                                                       value="<?= $contact->phone_3 ?>">
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-group has-feedback">
                                                <label for="telegram">Telegram</label>
                                                <input type="text" name="telegram" class="form-control" id="telegram"
                                                       placeholder="Telegram"
                                                       data-error="Нужно заполнить" data-minlength="1"
                                                       value="<?= $contact->telegram ?>">
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="form-group has-feedback">
                                                <label for="whatsapp">Whatsapp</label>
                                                <input type="text" name="whatsapp" class="form-control" id="whatsapp"
                                                       placeholder="Whatsapp"
                                                       data-error="Нужно заполнить" data-minlength="1"
                                                       value="<?= $contact->whatsapp ?>"
                                                       required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="form-group has-feedback">
                                                <label for="behance">Behance</label>
                                                <input type="text" name="behance" class="form-control" id="behance"
                                                       placeholder="Behance"
                                                       data-error="Нужно заполнить" data-minlength="1"
                                                       value="<?= $contact->behance ?>"
                                                       required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <input type="hidden" name="id" value="<?= $contact->id; ?>">
                                    <div class="form-group input-group box-body">
                                        <button type="submit" class="btn btn-block btn-success">Сохранить</button>
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

