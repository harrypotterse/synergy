<?php
require_once '../FileConnection/Data_connection.php';
require_once '../Classes/Achieve.php';
require_once '../Classes/Session.php';
$session = new Session("login.php");
$class = new Achieve();
$sql = "SELECT COUNT(id), Name,id,image FROM cart where operation_number = ?  GROUP BY Name ORDER BY `COUNT(id)` DESC";
$User = filter_var($session->get_session_data("User"), FILTER_SANITIZE_STRING);
$array = array($User);
$rows = $class->sql_feth($Data_communication, $sql, $array);
if (count($rows) > 0) :
    foreach ($rows as $value):
        $id_COUNT = $value['COUNT(id)'];
        $Name = $value['Name'];
        $image = $value['image'];
        $id = $value['id'];
        $Page = password_hash("products", PASSWORD_DEFAULT);
        ?>
        <tr>
            <td class="product-thumbnail text-left">
                <a ><img src="<?php echo $image; ?>" alt="" ></a>
            </td>
            <td class="text-left">
                <a ><?php echo $Name; ?></a>
            </td>
            <td class="product-quantity">
                <?php echo $id_COUNT; ?>
            </td>
        </tr>
        <?php
    endforeach;
endif;
?>


