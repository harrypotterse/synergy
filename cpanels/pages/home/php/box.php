<div class="content">
    <div class="row">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <?php
                        $sql = "select * from  products ";
                        $array_var = array();
                        $job = $a->count($Data_communication, $sql, $array_var);
                        ?>
                        <h3><?php echo $job; ?></h3>
                        <p>المنتجات</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <a href="../../pages/products/spreadsheet.php" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <?php
                        $sql = "select * from  projects ";
                        $array_var = array();
                        $cv = $a->count($Data_communication, $sql, $array_var);
                        ?>
                        <h3><?php echo $cv; ?><sup style="font-size: 20px"></sup></h3>
                        <p>المشاريع</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="../../pages/projects/spreadsheet.php"  class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <?php
                        $sql = "select * from  services ";
                        $array_var = array();
                        $registration = $a->count($Data_communication, $sql, $array_var);
                        ?>
                        <h3><?php echo $registration; ?></h3>
                        <p>الخدمات</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="../../pages/services/spreadsheet.php"  class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <?php
                        $sql = "select * from  user_admin ";
                        $array_var = array();
                        $user_admin = $a->count($Data_communication, $sql, $array_var);
                        ?>
                        <h3><?php echo $user_admin; ?></h3>
                        <p>مستخدمين لوحة التحكم</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="../../pages/user_admin/spreadsheet.php"  class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
        </div>
    </div>
</div>