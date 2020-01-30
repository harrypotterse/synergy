<?php require_once './Settings.php'; ?>
<?php require_once '../../../FileConnection/Data_connection.php'; ?>
<?php require_once '../../../FileConnection/Extra_functions.php'; ?>
<?php require_once '../../../Classes/Achieve.php'; ?>
<?php require_once '../../../Classes/Component.php'; ?>
<?php
$class = new Achieve();
$query = "select * from  form  where id = ? ";
$array_var = array();
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$array = array($id);
$rows = $class->sql_feth($Data_communication, $query, $array);
if (count($rows) > 0) :
    foreach ($rows as $value):
        $id = $value['id'];
        $explained1 = $value['explained1'];
        $explained2 = $value['explained2'];
        $explained3 = $value['explained3'];
        $explained4 = $value['explained4'];
        $explained5 = $value['explained5'];
        $Language = $value['Language'];
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
            textArea{
                resize: none;
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
                                        <form action="phpajax/edit.php" id="uploadImage" method="post" enctype="multipart/form-data">
                                            <div class="content">
                                                <div class='col-lg-offset-2 col-lg-10 '>
                                                    <div class="input-group margin" style="display: none">
                                                        <input type="text" class="form-control input-lg" name="id" value="<?php echo $id; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">الوظيفة</button>
                                                        </span>
                                                    </div>
                                                    <div class="form-group margin">
                                                        <button class="btn btn-info btn-flat btn-block" type="button"><?php echo $explained1; ?></button>
                                                        <textarea class="form-control" rows="3"   class="textarea" name="explained1" placeholder="مواعيد العمل"><?php echo $explained1; ?></textarea>
                                                    </div>
                                                    <div class="form-group margin">
                                                        <button class="btn btn-info btn-flat btn-block" type="button"><?php echo $explained2; ?></button>
                                                        <textarea class="form-control" rows="3"   class="textarea" name="explained2" placeholder="مواعيد العمل"><?php echo $explained2; ?></textarea>
                                                    </div>
                                                    <div class="form-group margin">
                                                        <button class="btn btn-info btn-flat btn-block" type="button"><?php echo $explained3; ?></button>
                                                        <textarea class="form-control" rows="3"   class="textarea" name="explained3" placeholder="مواعيد العمل"><?php echo $explained3; ?></textarea>
                                                    </div>
                                                    <div class="form-group margin">
                                                        <button class="btn btn-info btn-flat btn-block" type="button"><?php echo $explained4; ?></button>
                                                        <textarea class="form-control" rows="3"   class="textarea" name="explained4" placeholder="مواعيد العمل"><?php echo $explained4; ?></textarea>
                                                    </div>
                                                    <div class="form-group margin">
                                                        <button class="btn btn-info btn-flat btn-block" type="button"><?php echo $explained5; ?></button>
                                                        <textarea class="form-control" rows="3"   class="textarea" name="explained5" placeholder="مواعيد العمل"><?php echo $explained5; ?></textarea>
                                                    </div>  
                                                    <input type="submit" class="btn btn-info btn-block btn-lg margin btn" value="تعديل الموضوع">
                                                </div>
                                            </div>

                                        </form>

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
