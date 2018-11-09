<section class="content-header">
    <h1>Изменить <?=$job->name;?></h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/job"><i class="fa fa-dashboard"></i>Все работы</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="register-main">
                        <div class="col-md-6 account-left">
                            <form method="post" action="<?=ADMIN?>/job/edit" data-toggle="validator" role="form">
                                <div class="form-group has-feedback">
                                    <label for="name">Название</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Название работы"
                                           data-error="Minimum of 4 chars" data-minlength="4"
                                           value="<?=$job->name;?>"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="status">Показывать на сайте</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="0" <?= $job->status == '0' ? 'selected' : '';?>>Не показывать</option>
                                        <option value="1" <?= $job->status == '1' ? 'selected' : '';?>>Показывать</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id" value="<?=$job->id;?>">
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

