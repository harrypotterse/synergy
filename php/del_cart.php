<?php
require_once '../FileConnection/Data_connection.php';
require_once '../Classes/Achieve.php';
require_once '../Classes/Session.php';
$session = new Session("login.php");
$class = new Achieve();
$id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
if (isset($id) && !empty($id) && is_numeric($id)) {
    try {
        $id = $class->Filter_int($id);
        if ($query = $Data_communication->prepare("DELETE FROM cart  WHERE  id =?"));
        $query->bindValue(1, $id, PDO::PARAM_INT);
        if ($query->execute()) {
        }
    } catch (PDOException $ex) {
    }
}

?>
