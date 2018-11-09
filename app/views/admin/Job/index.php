<section class="content-header">
    <h1>Все работы</h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li>Все работы</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="<?=ADMIN?>/job/add" class="btn btn-success">Добавить новою работу</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Названи</th>
                                <th>Галерея c фото</th>
                                <th>Статус</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($jobs as $job):?>
                                <tr>
                                    <td><?=$job->name;?></td>
                                    <td>
                                        <a href="<?=ADMIN?>/gallery?id=<?=$job->id;?>">
                                            Галерея
                                        </a>
                                    </td>
                                    <td><?=$job->status ? 'Показывать' : 'Скрывать';?></td>
                                    <td>
                                        <a href="<?=ADMIN?>/job/edit?id=<?=$job->id;?>">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <a href="<?=ADMIN?>/job/delete?id=<?=$job->id;?>">
                                            <i class="fa fa-fw fa-trash delete text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>