<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectOrderTable.php';

$order_id = $_POST['order_id'];

//$c_id = "148";
//$quan = "6";

$sql = "UPDATE ".$TbName." SET order_status='success' WHERE order_id=".$order_id."";
//$sql = "DELETE FROM ".$TbName." where food_id=".$foodid." and Cus_id=".$userid." ";

mysqli_query($conn,$sql);
mysqli_close($conn);
?>
