<?php
//error_reporting("E_ALL & ~E_NOTIC");
require_once '../FileConnection/Data_connection.php';
require_once '../Classes/Achieve.php';
require_once '../Classes/Session.php';
require_once '../Classes/Component.php';
$a = new Achieve();
$Component = new Component();
$session = new Session("login.php");
$true = TRUE;
$msgerr=null;
$First = filter_var($_POST['First'], FILTER_SANITIZE_STRING);
$Last = filter_var($_POST['Last'], FILTER_SANITIZE_STRING);
$Company = filter_var($_POST['Company'], FILTER_SANITIZE_STRING);
$Address = filter_var($_POST['Address'], FILTER_SANITIZE_STRING);
$City = filter_var($_POST['City'], FILTER_SANITIZE_STRING);
$Postcode = filter_var($_POST['Postcode'], FILTER_SANITIZE_STRING);
$Country = filter_var($_POST['Country'], FILTER_SANITIZE_STRING);
$Email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
$Phone = filter_var($_POST['Phone'], FILTER_SANITIZE_NUMBER_INT);
$service = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
$Notes = filter_var($_POST['Notes'], FILTER_SANITIZE_STRING);
if (!$a->empty_filed($First)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Last)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Company)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Address)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($City)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Postcode)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Country)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Email)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Phone)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($service)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Notes)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
echo $msgerr;
if ($true == TRUE):
    $array_var = array();
    $array_var[] = $First = filter_var($_POST['First'], FILTER_SANITIZE_STRING);
    $array_var[] = $Last = filter_var($_POST['Last'], FILTER_SANITIZE_STRING);
    $array_var[] = $Company = filter_var($_POST['Company'], FILTER_SANITIZE_STRING);
    $array_var[] = $Address = filter_var($_POST['Address'], FILTER_SANITIZE_STRING);
    $array_var[] = $City = filter_var($_POST['City'], FILTER_SANITIZE_STRING);
    $array_var[] = $Postcode = filter_var($_POST['Postcode'], FILTER_SANITIZE_STRING);
    $array_var[] = $Country = filter_var($_POST['Country'], FILTER_SANITIZE_STRING);
    $array_var[] = $Email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
    $array_var[] = $Phone = filter_var($_POST['Phone'], FILTER_SANITIZE_STRING);
    $array_var[] = $service = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
    $array_var[] = $Notes = filter_var($_POST['Notes'], FILTER_SANITIZE_STRING);
    $array_var[] = filter_var($session->get_session_data("User"), FILTER_SANITIZE_STRING);
    $sql = "INSERT INTO `quote_order` (`id`,`First`,`Last`,`Company`,`Address`,`City`,`Postcode`,`Country`,`Email`,`Phone`,`service`,`Notes`,`operation`) VALUES (NULL, ?,?,?,?,?,?,?,?,?,?,?,?)";
    $array = array();
    $a->sql($Data_communication, $sql, $array_var);
    echo 1;
endif;


