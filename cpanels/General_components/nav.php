<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">  
            <div class="pull-left image">
                <img src="a.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $session->get_session_data("users"); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span>الرئسية</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../slider/spreadsheet.php"><i class="fa fa-circle-o"></i> السلايدر</a></li>
                    <li><a href="../events/spreadsheet.php"><i class="fa fa-circle-o"></i>الخطوات</a></li>
                    <li><a href="../our_selection/spreadsheet.php"><i class="fa fa-circle-o"></i> لماذا اخترتنا </a></li>
                    <li><a href="../contact/spreadsheet.php"><i class="fa fa-circle-o"></i> نموذج الاتصال</a></li>
                    <li><a href="../quote_order/spreadsheet.php"><i class="fa fa-circle-o"></i> المشاريع</a></li>
                    <li><a href="../quote/spreadsheet.php"><i class="fa fa-circle-o"></i> طلب عرض السعر</a></li>
                    <li><a href="../ads/spreadsheet.php"><i class="fa fa-circle-o"></i>الاعلانات</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>مكونات الصفحات</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>             
                <ul class="treeview-menu">
                    <li><a href="../page_components_ar/spreadsheet.php"><i class="fa fa-circle-o"></i> مكونات الصفحات  العربية</a></li>
                    <li><a href="../page_components/spreadsheet.php"><i class="fa fa-circle-o"></i> مكونات الصفحات  الأنجليزية</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>الخدمات الرئسية</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>             
                <ul class="treeview-menu">
                    <li><a href="../services/spreadsheet.php"><i class="fa fa-circle-o"></i> عرض البيانات</a></li>
                    <li><a href="../services/addition.php"><i class="fa fa-circle-o"></i> اضافة خدمة جديدة</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>الخدمات الفرعية</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>             
                <ul class="treeview-menu">
                    <li><a href="../sub_catagories/spreadsheet.php"><i class="fa fa-circle-o"></i> عرض البيانات</a></li>
                    <li><a href="../sub_catagories/addition.php"><i class="fa fa-circle-o"></i> اضافة خدمة جديدة</a></li>
                </ul>
            </li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>المنتجات</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>             
                <ul class="treeview-menu">
                    <li><a href="../products/spreadsheet.php"><i class="fa fa-circle-o"></i> عرض البيانات</a></li>
                    <li><a href="../products/addition.php"><i class="fa fa-circle-o"></i> اضافة منتج جديدة</a></li>
                    <li><a href="../quote_order_box/spreadsheet.php"><i class="fa fa-circle-o"></i>طلبات المنتجات</a></li>

                </ul>
            </li>



            <li class="header">LABELS</li>
            <li><a href="../home/spreadsheet.php"><i class="fa fa-circle-o text-aqua"></i> <span>الصفحة الرئسية</span></a></li>
            <li><a href="../latest_additions/spreadsheet.php"><i class="fa fa-circle-o text-red"></i> <span>اخر الاضافات</span></a></li>
            <li><a href="../counter_db/spreadsheet.php"><i class="fa fa-circle-o text-yellow"></i> <span>افضل الصفحات</span></a></li>
            <li><a href="../user_admin/spreadsheet.php"><i class="fa fa-circle-o text-aqua"></i> <span>مستخدمين لوحة التحكم</span></a></li>
            <li><a href="?logout"><i class="fa fa-circle-o text-aqua"></i> <span>تسجيل الخروج</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
