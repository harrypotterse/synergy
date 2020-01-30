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
$file_name = $_FILES['Image']['name'];
$file_size = $_FILES['Image']['size'];
$file_tmp = $_FILES['Image']['tmp_name'];
$file_type = $_FILES['Image']['type'];
$error = $_FILES['Image']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=========================================================


$services = filter_var($_POST['services'], FILTER_SANITIZE_STRING);
$Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);


if (!$a->empty_filed($services)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;

if (!$a->empty_filed($Language)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!file_exists($file_tmp)) {
    $msgerr .= "<div class='alert alert-danger alert-autocloseable-danger'>من فضلك قم بتحميل الصورة</div>";
    $true = FALSE;
}

if ($true == TRUE):
    try {
        $array_var = array();
        $array_var[] = $services = filter_var($_POST['services'], FILTER_SANITIZE_STRING);
        $array_var[] = $Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
        $array_var[] = files_add($file_tmp, $file_name, "../../../../Public/sub_catagories/");
        $array_var[] = $Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
        $sql = "INSERT INTO `sub_catagories` (`id`,`services`,`Name`,`Image`,`Language`) VALUES (NULL, ?,?,?,?)";
        $array = array();
        $a->sql($Data_communication, $sql, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم اضافة قسم جديد بنجاح</div>";
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