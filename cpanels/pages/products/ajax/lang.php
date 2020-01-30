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
$Main = filter_var($_POST['lang'], FILTER_SANITIZE_STRING);
if ($Main == "English"):
    $sel = "<option id='sel' value='' >Choose a service</option>";
 $sel2 = "<option id='sel' value='' >Choose sub service</option>";
elseif ($Main == "Arabic"):
    $sel = "<option  id='sel'  value='' >اختيار الخدمة</option>";
$sel2 = "<option id='sel' value='' >اختيار الخدمة الفرعية</option>";

endif;
echo '<ops>';
//=========================================================
$query = "select DISTINCT Title,id  from  services  where  Language = ?";
$array = array($Main);
$rows = $a->sql_feth($Data_communication, $query, $array);

if (count($rows) > 0) :
    echo $sel;
    foreach ($rows as $value):
        $id = $value['id'];
        $Name = $value['Title'];
        echo "<option value='$id' >$Name</option>";
    endforeach;
endif;
//=======================================

echo '</ops>';

//#############################
echo '<ops1>';
//=========================================================
$query = "select DISTINCT Name,id  from  sub_catagories where  Language = ? ";
$array = array($Main);
$rows = $a->sql_feth($Data_communication, $query, $array);
if (count($rows) > 0) :
    $id = $value['id'];
    $Name = $value['Name'];
    echo $sel2;
    foreach ($rows as $value):
        $id = $value['id'];
        $Name = $value['Name'];
        echo "<option value='$id' >$Name</option>";
    endforeach;
endif;
//=======================================

echo '</ops1>';



echo $msgerr;
?>
