<div class="col-lg-offset-2">
    <div class="box-body" style="float: right;display: contents;">
        <a class="btn btn-app" href="../../pages/contact/spreadsheet.php">
            <?php
            $sql = "select * from  contact  where Notifications = 0 ";
            $array_var = array();
            $contact = $a->count($Data_communication, $sql, $array_var);
            ?>
            <span class="badge bg-yellow"><?php
                echo $contact;
            ?></span>
            <i class="fa fa-bullhorn"></i> الرسائل الجديدة
        </a>
        
        
        
        <a class="btn btn-app" href="../../pages/services/spreadsheet.php">
            <?php
            $sql = "select * from  services ";
            $array_var = array();
            $job = $a->count($Data_communication, $sql, $array_var);
            ?>
            <span class="badge bg-green"><?php
                echo $job;
                ?></span>
            <i class="fa fa-barcode"></i>الخدمات
        </a>
        
        
        
        <a class="btn btn-app" href="../../pages/projects/spreadsheet.php">
            <?php
            $sql = "select * from  projects ";
            $array_var = array();
            $registration = $a->count($Data_communication, $sql, $array_var);
            ?>
            <span class="badge bg-purple"><?php echo $registration; ?></span>
            <i class="fa fa-users"></i>المشاريع
        </a>
        
        
        
        <a class="btn btn-app" href="../../pages/user_admin/spreadsheet.php">
            <?php
            $sql = "select * from  user_admin ";
            $array_var = array();
            $user_admin = $a->count($Data_communication, $sql, $array_var);
            ?>
            <span class="badge bg-purple"><?php echo $user_admin; ?></span>
            <i class="fa fa-users"></i> مستخدمين لوحة التحكم
        </a>
        
        
        
        
        <a class="btn btn-app" href="../../pages/quote_order_box/spreadsheet.php">
            <?php
            $sql = "select * from  quote_order  where Notifications = 0  ";
            $array_var = array();
            $job = $a->count($Data_communication, $sql, $array_var);
            ?>  
            <span class="badge bg-teal"><?php
                echo $job;
                ?></span>
            <i class="fa fa-inbox"></i> طلبات المنتجات
        </a>
        
        
        <a class="btn btn-app" href="../../pages/contact/spreadsheet.php">
            <?php
            $sql = "select * from  contact  where Notifications = 1 ";
            $array_var = array();
            $contact = $a->count($Data_communication, $sql, $array_var);
            ?> 
            <span class="badge bg-aqua"><?php echo $contact; ?></span>
            <i class="fa fa-envelope"></i> رسائل البريد
        </a>
        <a class="btn btn-app" href="../../pages/quote/spreadsheet.php" >
            <?php
            $sql = "select * from  quote  where Notifications = 0  ";
            $array_var = array();
            $cv = $a->count($Data_communication, $sql, $array_var);
            ?>  
            <span class="badge bg-red"><?php echo $cv; ?></span>
            <i class="fa fa-heart-o"></i>طلبات عرض الاسعار
        </a>
    </div>
</div>

<!-- /.box-body -->

