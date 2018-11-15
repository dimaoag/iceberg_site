<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN?>"><i class="fa fa-dashboard"></i>Home</a></li>
    </ol>
</section>

<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>
                       <?=$countProjects;?>
                    </h3>
                    <p>Проэкты</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?=ADMIN?>/project" class="small-box-footer">Все проэкты <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
<!--        <div class="col-lg-3 col-xs-6">-->
<!--            <!-- small box -->
<!--            <div class="small-box bg-green">-->
<!--                <div class="inner">-->
<!--                    <h3>-->
<!--                        0-->
<!--                    </h3>-->
<!---->
<!--                    <p>Выпольненые работы</p>-->
<!--                </div>-->
<!--                <div class="icon">-->
<!--                    <i class="ion ion-stats-bars"></i>-->
<!--                </div>-->
<!--                <a href="--><?//=ADMIN?><!--/job" class="small-box-footer">Все выпольненые работы<i class="fa fa-arrow-circle-right"></i></a>-->
<!--            </div>-->
<!--        </div>-->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->