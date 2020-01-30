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
$statement7 = filter_var($_POST['statement7'], FILTER_SANITIZE_STRING);
$statement8 = filter_var($_POST['statement8'], FILTER_SANITIZE_STRING);
$statement9 = filter_var($_POST['statement9'], FILTER_SANITIZE_STRING);
$statement10 = filter_var($_POST['statement10'], FILTER_SANITIZE_STRING);
$statement11 = filter_var($_POST['statement11'], FILTER_SANITIZE_STRING);
$statement12 = filter_var($_POST['statement12'], FILTER_SANITIZE_STRING);
$statement13 = filter_var($_POST['statement13'], FILTER_SANITIZE_STRING);
$statement14 = filter_var($_POST['statement14'], FILTER_SANITIZE_STRING);
$statement15 = filter_var($_POST['statement15'], FILTER_SANITIZE_STRING);
$statement16 = filter_var($_POST['statement16'], FILTER_SANITIZE_STRING);
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
//=================================
if (!$a->empty_filed($id)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
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
if (!$a->empty_filed($statement7)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement8)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement9)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement10)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement11)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement12)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement13)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement14)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement15)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($statement16)):
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
        $array_var[] = $statement7 = filter_var($_POST['statement7'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement8 = filter_var($_POST['statement8'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement9 = filter_var($_POST['statement9'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement10 = filter_var($_POST['statement10'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement11 = filter_var($_POST['statement11'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement12 = filter_var($_POST['statement12'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement13 = filter_var($_POST['statement13'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement14 = filter_var($_POST['statement14'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement15 = filter_var($_POST['statement15'], FILTER_SANITIZE_STRING);
        $array_var[] = $statement16 = filter_var($_POST['statement16'], FILTER_SANITIZE_STRING);
        $array_var[] = $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $SQL = "UPDATE `page_components` SET `statement1`= ?,`statement2`= ?,`statement3`= ?,`statement4`= ?,`statement5`= ?,`statement6`= ?,`statement7`= ?,`statement8`= ?,`statement9`= ?,`statement10`= ?,`statement11`= ?,`statement12`= ?,`statement13`= ?,`statement14`= ?,`statement15`= ?,`statement16`= ?   WHERE `page_components`.`id`= ?;";
        $array = array();
        $a->sql($Data_communication, $SQL, $array_var);
        $a->sql($Data_communication, $SQL, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
echo $msgerr;
?>