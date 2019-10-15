<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCartTable.php';


$userid = $_POST['user_id'];
$foodid = $_POST['food_id'];

//$userid = "2";

//$sql = "INSERT INTO ".$TbName." (food_id, Cus_id)
//VALUES ('".$foodid."', '".$userid."')";

$sql = "DELETE FROM ".$TbName." where food_id=".$foodid." and Cus_id=".$userid." ";

mysqli_query($conn,$sql);
mysqli_close($conn);
?>
