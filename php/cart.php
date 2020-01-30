<?php
require_once '../FileConnection/Data_connection.php';
require_once '../FileConnection/Extra_functions.php';
require_once '../Classes/Achieve.php';
require_once '../Classes/Session.php';
$session = new Session("login.php");
$a = new Achieve();
$true = TRUE;
$Name = filter_var($_POST['Producer'], FILTER_SANITIZE_STRING);
$image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);
$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($image)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;

if ($true == TRUE):
    try {
        $array_var = array();
        $array_var[] = filter_var($session->get_session_data("User"), FILTER_SANITIZE_STRING);
        $array_var[] = $Name = filter_var($_POST['Producer'], FILTER_SANITIZE_STRING);
        $array_var[] = $image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);
        $sql = "INSERT INTO `cart` (`id`,`operation_number`,`Name`,`image`) VALUES (NULL, ?,?,?)";
        $array = array();
        $a->sql($Data_communication, $sql, $array_var);
        if ($_SESSION['lang'] == "ar") {
            echo 2;
        } else {
            echo 1;
        }
    } catch (PDOException $ex) {
        
    }
endif;






