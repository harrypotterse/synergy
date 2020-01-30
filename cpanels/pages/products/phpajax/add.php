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
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
$error = $_FILES['image']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
//========================================
$file_name2 = $_FILES['image2']['name'];
$file_size2 = $_FILES['image2']['size'];
$file_tmp2 = $_FILES['image2']['tmp_name'];
$file_type2 = $_FILES['image2']['type'];
$error2 = $_FILES['image2']['error'];
$extensions2 = array("jpeg", "jpg", "png", "gif");
//===================================
$file_name3 = $_FILES['image3']['name'];
$file_size3 = $_FILES['image3']['size'];
$file_tmp3 = $_FILES['image3']['tmp_name'];
$file_type3 = $_FILES['image3']['type'];
$error3 = $_FILES['image3']['error'];
$extensions3 = array("jpeg", "jpg", "png", "gif");
//=======================================
$Main = filter_var($_POST['Main'], FILTER_SANITIZE_STRING);
$sub = filter_var($_POST['sub'], FILTER_SANITIZE_STRING);
$Producer = filter_var($_POST['Producer'], FILTER_SANITIZE_STRING);
$explained = $_POST['explained'];
$details = filter_var($_POST['details'], FILTER_SANITIZE_STRING);
$instructions = $_POST['instructions'];
$Dimensions = $_POST['Dimensions'];
$Meta_Details = filter_var($_POST['Meta_Details'], FILTER_SANITIZE_STRING);
$Meta_Keywords = filter_var($_POST['Meta_Keywords'], FILTER_SANITIZE_STRING);
$Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
if (!$a->empty_filed($Main)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($sub)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Producer)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($explained)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($details)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($instructions)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Dimensions)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Meta_Details)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Meta_Keywords)):
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
        $array_var[] = $Main = filter_var($_POST['Main'], FILTER_SANITIZE_STRING);
        $array_var[] = $sub = filter_var($_POST['sub'], FILTER_SANITIZE_STRING);
        $array_var[] = $Producer = filter_var($_POST['Producer'], FILTER_SANITIZE_STRING);
        $array_var[] = files_add($file_tmp, $file_name, "../../../../Public/$tabel/p1/");
        $array_var[] = files_add($file_tmp2, $file_name2, "../../../../Public/$tabel/p2/");
        $array_var[] = files_add($file_tmp3, $file_name3, "../../../../Public/$tabel/p3/");
        $array_var[] = $explained = filter_var($_POST['explained'], FILTER_SANITIZE_STRING);
        $array_var[] = $details = filter_var($_POST['details'], FILTER_SANITIZE_STRING);
        $array_var[] = $instructions = filter_var($_POST['instructions'], FILTER_SANITIZE_STRING);
        $array_var[] = $Dimensions = filter_var($_POST['Dimensions'], FILTER_SANITIZE_STRING);
        $array_var[] = $Meta_Details = filter_var($_POST['Meta_Details'], FILTER_SANITIZE_STRING);
        $array_var[] = $Meta_Keywords = filter_var($_POST['Meta_Keywords'], FILTER_SANITIZE_STRING);
        $array_var[] = $Language = filter_var($_POST['Language'], FILTER_SANITIZE_STRING);
        $sql = "INSERT INTO `products` (`id`,`Main`,`sub`,`Producer`,`image`,`image2`,`image3`,`explained`,`details`,`instructions`,`Dimensions`,`Meta_Details`,`Meta_Keywords`,`Language`) VALUES (NULL, ?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $array = array();
        $a->sql($Data_communication, $sql, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
        $section = Page;
        $labal = "label label-info";
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