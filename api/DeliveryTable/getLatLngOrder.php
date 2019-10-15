<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectDeliveryTable.php';

class LatLng {
       public $origin = "";
       public $destination = "" ;
}

$obj = new LatLng();

$order_id = $_POST['order_id'];
//$order_id = "61";

$sql = "SELECT deli_address FROM tb_delivery where order_id=".$order_id."";
$result=mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$obj->destination = $data["deli_address"];

$sql = "SELECT cart_id FROM tb_order where order_id=".$order_id."";
$result=mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$data["cart_id"];

$sql = "SELECT food_id FROM tb_cart where cart_id=".$data["cart_id"]."";
$result=mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$data["food_id"];

$sql = "SELECT Res_id FROM food where id=".$data["food_id"]."";
$result=mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$data["Res_id"];

$sql = "SELECT addmap FROM resuser where id=".$data["Res_id"]."";
$result=mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$obj->origin = $data["addmap"];

//$json_array = json_encode($object_array);
echo json_encode($obj);

mysqli_close($conn);
?>
