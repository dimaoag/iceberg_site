<?php

use app\models\admin\Employee;
use site\libs\Pagination;

?>

<section class="content-header">
    <h1>Новости</h1>
    <ol class="breadcrumb">
        <li><a href="<?= ADMIN ?>"><i class="fa fa-dashboard"></i>Главная</a></li>
        <li><a href="<?= ADMIN ?>/blog"><i class="fa fa-folder"></i>Новости</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <a href="<?= ADMIN ?>/blog/add" class="btn btn-success">Добавить новость</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Дата создания</th>
                                <th>Управление</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($blogs as $blog): ?>
                                <tr>
                                    <td><?= $blog['title']; ?></td>
                                    <td><?= $blog['date_create']; ?></td>
                                    <td>
                                        <a href="<?= ADMIN ?>/blog/edit?id=<?= $blog['id']; ?>">
                                            <i class="fa fa-fw fa-edit"></i>
                                        </a>
                                        <a href="<?= ADMIN ?>/blog/delete?id=<?= $blog['id']; ?>">
                                            <i class="fa fa-fw fa-trash delete text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-content">
                        <p><?= count($blogs); ?> Новостей с <?= $count ?></p>
                        <?php if ($pagination->getCountPages() > 1): ?>
                            <?= $pagination ?>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>