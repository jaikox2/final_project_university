<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectOrderTable.php';

$cart_id = $_POST['cart_id'];
$cus_id = $_POST['cus_id'];
$order_cost = $_POST['order_cost'];

//$cart_id = "4324";
//$cus_id ="5353";
//$order_cost = "5000";


$sql = "INSERT INTO ".$TbName."(cart_id, Cus_id, order_time, order_date, order_cost)
VALUES (".$cart_id.", ".$cus_id.", CURTIME(), CURDATE(), ".$order_cost.")";

//$sql = "INSERT INTO ".$TbName." (name, detail, img, price, stamp, Res_id)
//VALUES ('".$name."', '".$detail."', '".$img."', ".$price.", ".$stamp.", ".$Resid.")";

mysqli_query($conn,$sql);

mysqli_close($conn);
?>
