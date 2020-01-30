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


$statement1 = filter_var($_POST['statement1'], FILTER_SANITIZE_STRING);
$statement2 = filter_var($_POST['statement2'], FILTER_SANITIZE_STRING);
$statement3 = filter_var($_POST['statement3'], FILTER_SANITIZE_STRING);
$statement4 = filter_var($_POST['statement4'], FILTER_SANITIZE_STRING);
$statement5 = filter_var($_POST['statement5'], FILTER_SANITIZE_STRING);
$statement6 = filter_var($_POST['statement6'], FILTER_SANITIZE_STRING);


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
if (!$a->empty_filed($statement5)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement6)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;


if ($true == TRUE):
    try {
        $array_var = array();
        $array_var[] = $statement1 = filter_var($_POST['statement1'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement2 = filter_var($_POST['statement2'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement3 = filter_var($_POST['statement3'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement4 = filter_var($_POST['statement4'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement5 = filter_var($_POST['statement5'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement6 = filter_var($_POST['statement6'], FILTER_SANITIZE_STRING);
        $SQL = "UPDATE `page_components_ar` SET `statement1`= ?,`statement2`= ?,`statement3`= ?,`statement4`= ?,`statement5`= ?,`statement6`= ? WHERE `page_components_ar`.`id`= 5;";
        $array = array();
        $a->sql($Data_communication, $SQL, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
echo $msgerr;
?>
