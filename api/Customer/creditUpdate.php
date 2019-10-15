<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCustomerTable.php';


$user_id = $_POST['cus_id'];
$credit = $_POST['credit_update'];

//$cart_id = "1540886263";
//$status = "order";

$sql = "UPDATE ".$TbName." SET credit='".$credit."' WHERE id=".$user_id."";
//$sql = "DELETE FROM ".$TbName." where food_id=".$foodid." and Cus_id=".$userid." ";

mysqli_query($conn,$sql);
mysqli_close($conn);
?>
