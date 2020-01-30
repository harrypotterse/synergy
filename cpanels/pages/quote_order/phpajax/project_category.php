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

$Name = filter_var($_POST['Nameo'], FILTER_SANITIZE_STRING);
$Language = filter_var($_POST['Languageo'], FILTER_SANITIZE_STRING);
if (!$a->empty_filed($Name)):
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
        $array_var[] = $Name = filter_var($_POST['Nameo'], FILTER_SANITIZE_STRING);
        $array_var[] = $Language = filter_var($_POST['Languageo'], FILTER_SANITIZE_STRING);
        $sql = "INSERT INTO `project_category` (`id`,`Name`,`Language`) VALUES (NULL, ?,?)";
        $array = array();
        $a->sql($Data_communication, $sql, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم اضافة قسم جديد بنجاح</div>";
//    ===============================================
        $section = Page;
        $labal = "label label-danger";
        $time = time();
        $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
        $array = array($section, $time, $labal);
        $a->sql($Data_communication, $sql, $array);
        header("Refresh:0");
        exit();
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
echo $msgerr;
?>