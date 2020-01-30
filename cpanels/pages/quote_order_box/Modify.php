<?php require_once './Settings.php'; ?>
<?php require_once '../../../FileConnection/Data_connection.php'; ?>
<?php require_once '../../../FileConnection/Extra_functions.php'; ?>

    <?php require_once '../../../Classes/Achieve.php'; ?>
<?php require_once '../../../Classes/Component.php'; ?>
<?php
$class = new Achieve();
$idx = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);



$query = "select * from  quote_order  where id = ? ;";
$array = array($idx);
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
    endforeach;
endif;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Page; ?></title>
        <?php require_once '../../General_components/css.php'; ?>
        <style>
            h1 {
                font-family: 'Cairo', sans-serif;
                background: #222d32;
                padding: 1%;
                color: white;
                text-align: center;
            }
            thead {
                background: #ff491f;
                color: white;
                font-size: 120%;
            }
        </style>


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
                        <!--                        <h1 style="text-align: right; direction: rtl;">
                                                    Data Tables
                                                    <small>advanced tables</small>
                                                </h1>-->
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-pagelines"></i> الرئسية</a></li>
                            <li><a href="spreadsheet.php"><?php echo Page; ?></a></li>
                            <li class="active">تعديل البيانات</li>
                        </ol>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <?php require_once '../../General_files/php/ap.php'; ?>
                                    <div class="box-body">
                                        <table class="table table-bordered">

                                            <tbody>
                                                <tr>

                                                    <td><?php echo $First . " " . $Last; ?></td>
                                                    <td>الاسم</td>

                                                </tr>
                                                <tr>

                                                    <td><?php echo $Company; ?></td>
                                                    <td>الشركة</td>

                                                </tr>
                                                <tr>

                                                    <td><?php echo $Address; ?></td>
                                                    <td>العنوان</td>
                                                </tr>
                                                <tr>

                                                    <td><?php echo $City; ?></td>
                                                    <td>المدينة</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $Postcode; ?></td>
                                                    <td>الرمز البريدي</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $Country; ?></td>
                                                    <td>الدولة</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $Email; ?></td>
                                                    <td>البريد</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $Phone; ?></td>
                                                    <td>موبيل</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $service; ?></td>
                                                    <td>الخدمة</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $Notes; ?></td>
                                                    <td>ملاحظات</td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $operation; ?></td>
                                                    <td>رقم العملية</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <h1>عربة التسوق   <img src="https://image.flaticon.com/icons/svg/1162/1162499.svg" width="50"></h1>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>الصورة</th>
                                                    <th>الاسم</th>
                                                    <th>الكمية</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT COUNT(id), Name,id,image FROM cart where operation_number = ?  GROUP BY Name ORDER BY `COUNT(id)` DESC";
                                                $array = array($operation);
                                                $rows = $class->sql_feth($Data_communication, $sql, $array);
                                                if (count($rows) > 0) :
                                                    foreach ($rows as $value):
                                                        $id_COUNT = $value['COUNT(id)'];
                                                        $Name = $value['Name'];
                                                        $image = $value['image'];
                                                        $id = $value['id'];
                                                        $Page = password_hash("products", PASSWORD_DEFAULT);
                                                         $image;
                                                        ?>
                                                        <tr>
                                                            <td class="product-thumbnail text-left">
                                                                <a ><img src="../../../<?php echo $image; ?>" alt=""  width="100"></a>
                                                            </td>
                                                            <td>
                                                             <?php echo $Name; ?>
                                                            </td>
                                                            <td class="product-quantity">
                                                                <?php echo $id_COUNT; ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>                
                                               
                                            </tbody>
                                        </table>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </section><!-- /.content -->
                    <div class="content">
                        <div id="targetLayer">

                        </div>
                    </div>
                </div>

            </div><!-- /.content-wrapper -->
            <?php require_once '../../General_components/fotter.php'; ?>

        </div><!-- ./wrapper -->
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <?php require_once '../../General_components/js.php'; ?>
        <script>
            $(function () {
                $('input[type=file]').change(function () {
                    var t = $(this).val();
                    var labelText = 'File : ' + t.substr(12, t.length);
                    $(this).prev('label').text(labelText);
                })
            });

        </script>
        <script type="text/javascript">
            tinymce.init({
                selector: "#textarea",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
        </script>

    </body>
</html>
