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
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$Mobil = filter_var($_POST['Mobil'], FILTER_SANITIZE_NUMBER_INT);
$Mail = filter_var($_POST['Mail'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Mobil)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Mail)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($message)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
echo $msgerr;
if ($true == TRUE):
    $array_var = array();
    $array_var[] = $Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
    $array_var[] = $Mobil = filter_var($_POST['Mobil'], FILTER_SANITIZE_STRING);
    $array_var[] = $Mail = filter_var($_POST['Mail'], FILTER_SANITIZE_STRING);
    $array_var[] = $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $sql = "INSERT INTO `contact` (`id`,`Name`,`Mobil`,`Mail`,`message`) VALUES (NULL, ?,?,?,?)";
    $a->sql($Data_communication, $sql, $array_var);
    echo 1;
endif;
echo $msgerr;

