<?php
error_reporting("E_ALL & ~E_NOTIC");
require_once '../FileConnection/Data_connection.php';
require_once '../Classes/Achieve.php';
require_once '../Classes/Session.php';
require_once '../Classes/Component.php';
$a = new Achieve();
$Component = new Component();
$session = new Session("login.php");
$true = TRUE;
$Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$Phone = filter_var($_POST['Phone'], FILTER_SANITIZE_STRING);
$Email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
$adress = filter_var($_POST['adress'], FILTER_SANITIZE_STRING);
$Type = filter_var($_POST['Type'], FILTER_SANITIZE_STRING);
$Message = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Phone)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Email)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($adress)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Type)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Message)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
echo $msgerr;
if ($true == TRUE):
    $array_var = array();
    $array_var[] = $Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
    $array_var[] = $Phone = filter_var($_POST['Phone'], FILTER_SANITIZE_STRING);
    $array_var[] = $Email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
    $array_var[] = $adress = filter_var($_POST['adress'], FILTER_SANITIZE_STRING);
    $array_var[] = $Type = filter_var($_POST['Type'], FILTER_SANITIZE_STRING);
    $array_var[] = $Message = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);
    $sql = "INSERT INTO `quote` (`id`,`Name`,`Phone`,`Email`,`adress`,`Type`,`Message`) VALUES (NULL, ?,?,?,?,?,?)";
    $a->sql($Data_communication, $sql, $array_var);
    echo 1;
endif;


