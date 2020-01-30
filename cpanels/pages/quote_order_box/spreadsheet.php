<?php 
error_reporting("E_ALL & ~E_NOTIC");
?>
<?php require_once './Settings.php'; ?>
<?php require_once '../../../FileConnection/Data_connection.php'; ?>
<?php require_once '../../../FileConnection/Extra_functions.php'; ?>
<?php require_once '../../../Classes/Achieve.php'; ?>
<?php require_once '../../../Classes/Component.php'; ?>
<?php $class = new Achieve(); ?>
<!DOCTYPE html>
<?php
 $SQL_dd = "UPDATE quote_order SET Notifications= 1 ";
$array = array();
$class->sql($Data_communication, $SQL_dd, $array_var);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Page; ?></title>
        <?php require_once '../../General_components/css.php'; ?>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            <?php require_once '../../General_components/top_nave.php'; ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php require_once '../../General_components/nav.php'; ?>

            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">

                <div class="content">
                    <!-- Content Wrapper. Contains page content -->

                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <img src="<?php echo Link; ?>" width="150"><br>
                                    <h3 class="box-title" style="text-align: right;direction: rtl;"><?php echo Page; ?></h3>

                                </div><!-- /.box-header -->
                                <ol class="breadcrumb">
                                    <li><a href="../home/spreadsheet.php"><i class="fa fa-pagelines"></i> الرئسية</a></li>
                                    <li><a href="spreadsheet.php"><?php echo Page; ?></a></li>
                                    <li class="active">جدول عرض البيانات</li>
                                </ol>
                                </section>
                                <!-- Main content -->
                                <section class="content">
                                    <div class="row">
                                        <div class="box-body">
                                            <table id="example2" class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 186.284px;">العمليات الأساسية</th>
                                                        <th>المدينة</th>
                                                        <th>العنوان</th>
                                                        <th>الشركة </th>
                                                        <th>الاسم</th>
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <?php
                                                        $query = "select * from  quote_order  ORDER BY `quote_order`.`id` DESC ";
                                                        $array = array();
                                                        $rows = $class->sql_feth($Data_communication, $query, $array);
                                                        if (count($rows) > 0) :
                                                            foreach ($rows as $value):
                                                                $id = $value['id'];
                                                                $First = $value['First'];
                                                                $Last = $value['Last'];
                                                                $Company = $value['Company'];
                                                                $Address = $value['Address'];
                                                                $City = $value['City'];
                                                                $Postcode = $value['Postcode'];
                                                                $Country = $value['Country'];
                                                                $Email = $value['Email'];
                                                                $Phone = $value['Phone'];
                                                                $service = $value['service'];
                                                                $Notes = $value['Notes'];
                                                                $operation = $value['operation'];
                                                                $Notifications = $value['Notifications'];
                                                                ?>
                                                                   <td id="op">
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-info"> <li class="fa fa-database"></li></button>
                                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                            <span class="caret"></span>
                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                        </button>
                                                                        <ul class="dropdown-menu" role="menu">
                                                                            <li><a href="Modify.php?id=<?php echo $id; ?>">عرض البيانات</a></li>
                                                                            <li><a href="#" class="del" id="<?php echo $id; ?>" Image="<?php echo $image; ?>" image2="<?php echo $image2; ?>" image3="<?php echo $image3; ?>" >والحذف</a></li>

                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo $City; ?></td>
                                                                <td><?php echo $Address; ?></td>

                                                                <td><?php echo $Company; ?></td>
                                                                <td><?php echo $First . $Last; ?></td>
                                                                <td>&nbsp;<img src="https://img.icons8.com/material/20/31b0d5/health-data.png"></td>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div><!-- /.box-body -->
                                        <?php $add_btn = "2"; ?>
                                        <?php require_once './php/btn.php'; ?>
                                    </div><!-- /.box -->

                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </section><!-- /.content -->

                </div>

            </div><!-- /.content-wrapper -->



            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            <?php require_once '../../General_files/php/del_box.php'; ?>
            <?php require_once '../../General_components/fotter.php'; ?>
        </div><!-- ./wrapper -->
        <?php require_once '../../General_components/js.php'; ?>

        <script>
            $(document).on("click", '.del', function (event) {
                var id = $(this).attr('id');
                var Image = $(this).attr('Image');
                $('#delete').modal('show');
                $("#del2").click(function () {
                    $.post('./phpajax/Delete_the_file.php', {id: id, Image: Image}, function (data) {
                        //  alert(data);
                        location.reload();
                    });
                });
            });
        </script>
        <script>
            $("#boxs").click(function () {
                var text = $(this).attr('ids');
                alert(text);s
//                $.post('ajax/elevators.php', {text: text}, function (data) {
//                    //alert(data);
//                    $('.sorting-container').hide().html(data).fadeToggle("slow");
//                });
                return false;
            });
        </script>
        <script src="../../General_files/js/Shortcuts.js" type="text/javascript"></script>
    </body>
</html>
