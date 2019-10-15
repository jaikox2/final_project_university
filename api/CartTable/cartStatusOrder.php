<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCartTable.php';


$cart_id = $_POST['cart_id'];
$status = $_POST['status'];

//$cart_id = "1540886263";
//$status = "order";

$sql = "UPDATE ".$TbName." SET cart_status='".$status."' WHERE cart_id=".$cart_id."";
//$sql = "DELETE FROM ".$TbName." where food_id=".$foodid." and Cus_id=".$userid." ";

mysqli_query($conn,$sql);
mysqli_close($conn);
?>
