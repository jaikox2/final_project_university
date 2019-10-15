<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectPaymentTable.php';


$cus_id = $_POST['cus_id'];
$order_id = $_POST['order_id'];
$payCost = $_POST['paymentCost'];

//$cart_id = "4324";
//$cus_id ="5353";
//$order_cost = "5000";


$sql = "INSERT INTO ".$TbName."(order_id, Cus_id, payment_cost)
VALUES (".$order_id.", ".$cus_id.", ".$payCost.")";

//$sql = "INSERT INTO ".$TbName." (name, detail, img, price, stamp, Res_id)
//VALUES ('".$name."', '".$detail."', '".$img."', ".$price.", ".$stamp.", ".$Resid.")";

mysqli_query($conn,$sql);

mysqli_close($conn);
?>
