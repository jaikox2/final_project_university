<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectDeliveryTable.php';

class deli {
       public $deliman_id  = "";
}

$obj = new deli();

$orderid = $_POST['order_id'];

//$orderid = "15";

$sql = "SELECT * FROM ".$TbName." where order_id=".$orderid."";

$result=mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);

$obj->deliman_id =$data["deliman_id"];

echo json_encode($obj);

mysqli_close($conn);
?>
