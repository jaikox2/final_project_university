<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectDeliveryTable.php';

class status {
  public $status = "";
}


$deli_id = $_POST['deli_id'];
$deliman_id = $_POST['deliman_id'];

//$c_id = "148";
//$quan = "6";

//$deli_id = "60";
//$deliman_id = "200";


$obj = new status();

$sql = "UPDATE ".$TbName." SET deliman_id=".$deliman_id." WHERE deli_id=".$deli_id."";
//$sql = "DELETE FROM ".$TbName." where food_id=".$foodid." and Cus_id=".$userid." ";

$result=mysqli_query($conn,$sql);

if($result){
  $obj->status = "update success";
  echo json_encode($obj);
}else {
  $obj->status ="update Error";
  echo json_encode($obj);
}

mysqli_close($conn);
?>
