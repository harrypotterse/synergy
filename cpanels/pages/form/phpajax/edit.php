<?php

//error_reporting("E_ALL & ~E_NOTIC");
require_once '../Settings.php';
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Extra_functions.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$array_var = array();
$tabel = Table;
//=================================
$explained1 = filter_var($_POST['explained1'], FILTER_SANITIZE_STRING);
$explained2 = filter_var($_POST['explained2'], FILTER_SANITIZE_STRING);
$explained3 = filter_var($_POST['explained3'], FILTER_SANITIZE_STRING);
$explained4 = filter_var($_POST['explained4'], FILTER_SANITIZE_STRING);
$explained5 = filter_var($_POST['explained5'], FILTER_SANITIZE_STRING);
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
if (!$a->empty_filed($id)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($explained1)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($explained2)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($explained3)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($explained4)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($explained5)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
//=========================
if ($true == TRUE):
    try {
        $array_var = array();
        $array_var[] = $explained1 = filter_var($_POST['explained1'], FILTER_SANITIZE_STRING);
        $array_var[] = $explained2 = filter_var($_POST['explained2'], FILTER_SANITIZE_STRING);
        $array_var[] = $explained3 = filter_var($_POST['explained3'], FILTER_SANITIZE_STRING);
        $array_var[] = $explained4 = filter_var($_POST['explained4'], FILTER_SANITIZE_STRING);
        $array_var[] = $explained5 = filter_var($_POST['explained5'], FILTER_SANITIZE_STRING);
        $array_var[] = $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $SQL = "UPDATE `form` SET `explained1`= ?,`explained2`= ?,`explained3`= ?,`explained4`= ?,`explained5`= ?  WHERE `form`.`id`= ?;";
        $array = array();
        $a->sql($Data_communication, $SQL, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
echo $msgerr;
?>