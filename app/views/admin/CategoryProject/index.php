<section class="content-header">
    <h1>Все категории</h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li>Все категории</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="<?=ADMIN?>/category-project/add" class="btn btn-success">Добавить новую категорию</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Статус</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cats as $key => $cat):?>
                                <tr>
                                    <td><?=$cat->id;?></td>
                                    <td><?=$cat->title;?></td>
                                    <td><?= $cat->status ? 'Показывать' : 'Скрывать';?></td>
                                    <td>
                                        <a href="<?=ADMIN?>/category-project/edit?id=<?=$cat->id;?>">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <a href="<?=ADMIN?>/category-project/delete?id=<?=$cat->id;?>">
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