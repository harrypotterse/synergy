<?php

error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
$id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
$Image = $_POST['Image'];
$Image2 = $_POST['Image2'];
$Image3 = $_POST['Image3'];
if (isset($id) && !empty($id) && is_numeric($id)) {
    try {
        $a = new Achieve();
        $id = $a->Filter_int($id);
        if ($query = $Data_communication->prepare("DELETE FROM products  WHERE  id =?"));
        $query->bindValue(1, $id, PDO::PARAM_INT);
        if ($query->execute()) {
            $DelFilePath1 = "../../../../Public/products/p1/" . $Image;
            $DelFilePath2 = "../../../../Public/products/p2/" . $Image2;
            $DelFilePath3 = "../../../../Public/products/p3/" . $Image3;
            if (file_exists($DelFilePath1)) {
                unlink($DelFilePath1);
            } else {echo "no";}
            if (file_exists($DelFilePath2)) {
                unlink($DelFilePath2);
            } else {echo "no";}
            if (file_exists($DelFilePath3)) {
                unlink($DelFilePath3);
            } else {echo "no";}
        }
    } catch (PDOException $ex) {
    }
}
?>