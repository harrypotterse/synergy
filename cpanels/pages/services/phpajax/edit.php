<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../Settings.php';
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Extra_functions.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$array_var = array();
$tabel = Table;
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
//=================================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=========================
//=================================
$file_name1 = $_FILES['uploadFile1']['name'];
$file_size1 = $_FILES['uploadFile1']['size'];
$file_tmp1 = $_FILES['uploadFile1']['tmp_name'];
$file_type1 = $_FILES['uploadFile1']['type'];
$error1 = $_FILES['uploadFile1']['error'];
$extensions1 = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=========================

if (!$a->empty_filed($Title)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Language)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if ($true == TRUE):
    try {
        $array_var = array();
        $array_var[] = files_modified($file_tmp, "../../../../Public/services/", $_POST['file'], $file_name);
        $array_var[] = $Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
        $array_var[] = $Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
        $array_var[] = files_modified($file_tmp1, "../../../../Public/services/slice/", $_POST['file1'], $file_name1);
        $array_var[] = $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $SQL = "UPDATE `services` SET `Image`= ?,`Title`= ?,`Language`= ? ,`slice`= ? WHERE `services`.`id`= ?;";
        $array = array();
        $a->sql($Data_communication, $SQL, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
echo $msgerr;
?>