<section class="content-header">
    <h1>Изменить <?=$cat->title;?></h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?=ADMIN?>/category-project"><i class="fa fa-dashboard"></i>Все категории</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="register-main">
                        <div class="col-md-12 account-left">
                            <form method="post" action="<?=ADMIN?>/category-project/edit" data-toggle="validator" role="form">
                                <div class="form-group has-feedback">
                                    <label for="name">Название</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Название статьи"
                                           data-error="Minimum of 4 chars" data-minlength="3"
                                           value="<?=$cat->title;?>"
                                           required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group has-feedback">
                                    <label for="status">Active</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="0" <?php if ($cat->status == '0') echo ' selected';?>>Скрывать</option>
                                        <option value="1" <?php if ($cat->status == '1') echo ' selected';?>>Показывать</option>
                                    </select>
                                </div>
                                <input type="hidden" name="id" value="<?=$cat->id;?>">
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

