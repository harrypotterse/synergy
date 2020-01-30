<?php
require_once '../FileConnection/Data_connection.php';
require_once '../Classes/Achieve.php';
require_once '../Classes/Session.php';
$session = new Session("login.php");
$class = new Achieve();
$ids = $session->get_session_data('User');
$sql = "SELECT COUNT(id), Name,id,image FROM cart where operation_number = ?  GROUP BY Name ORDER BY `COUNT(id)` DESC";
$array = array($ids);
$rows = $class->sql_feth($Data_communication, $sql, $array);
if (count($rows) > 0) :
    foreach ($rows as $value):
           $id_COUNT = $value['COUNT(id)'];
        $Name = $value['Name'];
        $image = $value['image'];
         $id = $value['id'];
        ?>
        <li class=".li">
            <a title="Remove item" class="remove" id="<?php echo  $id ; ?>" href="#">×</a>
            <a href="#">
                <img width="90" height="90" alt="" src="<?php echo $image; ?>"><?php echo $Name; ?>×<?php echo   $id_COUNT; ?>
            </a>
        
        </li>
        <?php
    endforeach;
endif;
?>

<span class="amount">

    <?php
    $array_var1 = array($ids);
    echo $cart = $class->count($Data_communication, $sql, $array_var1);
    ?>
</span>


