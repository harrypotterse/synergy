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
$Main = filter_var($_POST['Main'], FILTER_SANITIZE_STRING);
echo '<ops>';
//=========================================================
$query = "select DISTINCT Name,id  from  sub_catagories where  services = ? ";
$array = array($Main);
$rows = $a->sql_feth($Data_communication, $query, $array);
if (count($rows) > 0) :
    echo "<option id='sel' value='' >Choose sub service</option>";
    foreach ($rows as $value):
     $id = $value['id'];
    $services = $value['services'];
    $Name = $value['Name'];
    $Image = $value['Image'];
    $Language = $value['Language'];


        echo "<option value='$id' >$Name</option>";
    endforeach;
endif;
//=======================================
echo '</ops>';
//#############################
echo $msgerr;
?>
