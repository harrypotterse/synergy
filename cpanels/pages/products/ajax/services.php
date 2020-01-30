<?php

error_reporting("E_ALL & ~E_NOTIC");
require_once '../Settings.php';
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../FileConnection/Extra_functions.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$array_var = array();
 $file_name = $_FILES['image3']['name'];
$file_size = $_FILES['image3']['size'];
$file_tmp = $_FILES['image3']['tmp_name'];
$file_type = $_FILES['image3']['type'];
$error = $_FILES['image3']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$Image = filter_var($_POST['Image'], FILTER_SANITIZE_STRING);
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);



if (!$a->empty_filed($Title)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Language)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;

if ($true == TRUE):
    $array_var = array();
    $array_var[] = files_add($file_tmp, $file_name, "../../../../Public/services/");
    $array_var[] = $Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
    $array_var[] = $Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
    $sql = "INSERT INTO `services` (`id`,`Image`,`Title`,`Language`) VALUES (NULL, ?,?,?)";
    $array = array();
    $a->sql($Data_communication, $sql, $array_var);
    $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
endif;

//#############################
echo $msgerr;
?>
