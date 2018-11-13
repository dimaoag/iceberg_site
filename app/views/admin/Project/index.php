<section class="content-header">
    <h1>Все проэкты</h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li>Все проэкты</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="<?=ADMIN?>/project/add" class="btn btn-success">Добавить новый проэкт</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Фото</th>
                                <th>Название</th>
                                <th>Категория</th>
                                <th>Url</th>
                                <th>Заказчик</th>
                                <th>Статус</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($projects as $key => $project):?>
                                <tr>
                                    <td>
                                        <img style="max-width: 50px" src="/images/<?=$project['img_preview'];?>" alt="">
                                    </td>
                                    <td><?=$project['title'];?></td>
                                    <td><?=$project['cat_title'];?></td>
                                    <td><a href="<?=$project['url'];?>"><?=$project['url'];?></a></td>
                                    <td><?=$project['customer_name'];?></td>
                                    <td><?=$project['status'] ? 'Показывать' : 'Скрывать';?></td>
                                    <td>
                                        <a href="<?=ADMIN?>/project/edit?id=<?=$project['id'];?>">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <a href="<?=ADMIN?>/project/delete?id=<?=$project['id'];?>">
                                            <i class="fa fa-fw fa-trash delete text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-content">
                        <p><?=count($projects);?> проэкт(проэктов) с <?=$count?></p>
                        <?php if ($pagination->getCountPages() > 1):?>
                            <?=$pagination?>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>