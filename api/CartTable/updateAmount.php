<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCartTable.php';


$c_id = $_POST['c_id'];
$quan = $_POST['quan'];

//$c_id = "148";
//$quan = "6";

$sql = "UPDATE ".$TbName." SET cart_amount=".$quan." WHERE c_id=".$c_id."";
//$sql = "DELETE FROM ".$TbName." where food_id=".$foodid." and Cus_id=".$userid." ";

mysqli_query($conn,$sql);
mysqli_close($conn);
?>
