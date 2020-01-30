<?php
$id="1";
$query1 = "SELECT * FROM `counter_db` where id = $id ";
$array = array();
$value="count";
define("row", $value);
$rows1 = $class->sql_feth($Data_communication, $query1, $array);
foreach ($rows1 as $key):
    (int) $index = $key[row];
    $vist= $index + 1;
    $time= time();
    $array=array($vist,$time);
    $query="UPDATE `counter_db` SET `count` = ? , `time` = ?  WHERE `counter_db`.`id` =$id;";
    $class->sql($Data_communication,$query,$array);
endforeach;

