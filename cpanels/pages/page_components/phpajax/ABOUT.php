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
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
$statement1 = filter_var($_POST['statement1'], FILTER_SANITIZE_STRING);
$statement2 = filter_var($_POST['statement2'], FILTER_SANITIZE_STRING);
$statement3 = filter_var($_POST['statement3'], FILTER_SANITIZE_STRING);
$statement4 = filter_var($_POST['statement4'], FILTER_SANITIZE_STRING);
$file_name1 = $_FILES['uploadFile1']['name'];
$file_size1 = $_FILES['uploadFile1']['size'];
$file_tmp1 = $_FILES['uploadFile1']['tmp_name'];
$file_type1 = $_FILES['uploadFile1']['type'];
$error1 = $_FILES['uploadFile1']['error'];
$extensions1 = array("jpeg", "jpg", "png", "gif");
$ext1 = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($statement1)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement2)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement3)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement4)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;

if ($true == TRUE):
    try {
        $int = 400;
        $array_var = array();
        $array_var[] = $statement1 = filter_var($_POST['statement1'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement2 = filter_var($_POST['statement2'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement3 = filter_var($_POST['statement3'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement4 = filter_var($_POST['statement4'], FILTER_SANITIZE_STRING);
        $array_var[] = files_modified($file_tmp, "../../../../Public/ABOUT/", $_POST['file'], $file_name);
        $array_var[] = files_modified($file_tmp1, "../../../../Public/ABOUT/", $_POST['file1'], $file_name1, $int);
        $SQL = "UPDATE `page_components` SET `statement1`= ?,`statement2`= ?,`statement3`= ?,`statement4`= ?,`statement5`= ?,`statement6`= ? WHERE `page_components`.`id`= 1;";
        $array = array();
        $a->sql($Data_communication, $SQL, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
echo $msgerr;
?>