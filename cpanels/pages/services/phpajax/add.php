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
$tabel = Table;
//=========================================================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=========================================================
$file_name1 = $_FILES['uploadFile1']['name'];
$file_size1 = $_FILES['uploadFile1']['size'];
$file_tmp1 = $_FILES['uploadFile1']['tmp_name'];
$file_type1 = $_FILES['uploadFile1']['type'];
$error1 = $_FILES['uploadFile1']['error'];
$extensions1 = array("jpeg", "jpg", "png", "gif");
$ext1 = pathinfo($file_name, PATHINFO_EXTENSION);
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
if (!file_exists($file_tmp)) {
    $msgerr .= "<div class='alert alert-danger alert-autocloseable-danger'>من فضلك قم بتحميل الصورة</div>";
    $true = FALSE;
}
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
        $array_var[] = files_add($file_tmp, $file_name, "../../../../Public/$tabel/");
        $array_var[] = $Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
        $array_var[] = $Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
        $array_var[] = files_add($file_tmp1, $file_name1, "../../../../Public/$tabel/slice/");

        $sql = "INSERT INTO `services` (`id`,`Image`,`Title`,`Language`,`slice`) VALUES (NULL, ?,?,?,?)";

        $array = array();
        $a->sql($Data_communication, $sql, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
        $section = Page;
        $labal = label;
        $time = time();
        $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
        $array = array($section, $time, $labal);
        $a->sql($Data_communication, $sql, $array);
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
echo $msgerr;
?>