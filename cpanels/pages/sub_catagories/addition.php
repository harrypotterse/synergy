<?php require_once './Settings.php'; ?>
<?php require_once '../../../FileConnection/Data_connection.php'; ?>
<?php require_once '../../../FileConnection/Extra_functions.php'; ?>
<?php require_once '../../../Classes/Achieve.php'; ?>
<?php require_once '../../../Classes/Component.php'; ?>
<?php $class = new Achieve(); ?>
<!DOCTYPE html>
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
                        <!--                        <h1 style="text-align: right; direction: rtl;">
                                                    Data Tables
                                                    <small>advanced tables</small>
                                                </h1>-->
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-pagelines"></i> الرئسية</a></li>
                            <li><a href="spreadsheet.php"><?php echo Page; ?></a></li>
                            <li class="active">اضافة بيانات</li>
                        </ol>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <?php require_once '../../General_files/php/ap.php'; ?>
                                    <div class="box-body">

                                        <form action="phpajax/add.php" id="uploadImage" method="post" enctype="multipart/form-data">
                                            <div class="content">
                                                <div class='col-lg-offset-2 col-lg-10 '>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="Name" >
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">العنوان</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <select class="form-control input-lg" id="sel1" name="Language">
                                                            <option value="English">English</option>
                                                            <option value="Arabic">Arabic</option>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary">  اللغة</span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <select class="form-control input-lg" id="services" name="services">
                                                            <?php
                                                            $query = "select DISTINCT Title,id  from  services  ";
                                                            $array = array();
                                                            $rows = $class->sql_feth($Data_communication, $query, $array);
                                                            if (count($rows) > 0) :
                                                                foreach ($rows as $value):
                                                                    $id = $value['id'];
                                                                    $Name = $value['Title'];
                                                                    echo "<option value='$id' >$Name</option>";
                                                                endforeach;
                                                            endif;
                                                            ?>
                                                        </select>
                                                        <span class="input-group-addon btn btn-primary"> الخدمات الرئسية</span>
                                                    </div>
                                                   
                                                       <span class="control-fileupload">
                                                           <span>صورة البنر</span>&nbsp;&nbsp;&nbsp;
                                                        <label for="file">Choose a file :</label>
                                                        <input type="file" id="uploadFile" name="uploadFile1">
                                                    </span>  
                                                    
                                                    
                                                    <span class="control-fileupload">
                                                             <span>صورة </span>&nbsp;&nbsp;&nbsp;
                                                        <label for="file">Choose a file :</label>
                                                        <input type="file" id="uploadFile" name="uploadFile">
                                                    </span>  
                                                    <input type="submit" class="btn btn-info btn-block btn-lg margin btn" value="اضافة موضوع جديد">
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
