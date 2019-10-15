<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectDeliveryTable.php';


$order_id = $_POST['order_id'];
$deli_address = $_POST['deli_address'];
$deli_distance = $_POST['deli_distance'];
$deli_phone = $_POST['deli_phone'];
$deli_vahicle = $_POST['deli_vahicle'];
$deli_addDetail = $_POST['deli_addDetail'];
$deli_name = $_POST['deli_name'];
$deli_distanceCost = $_POST['deli_distanceCost'];

//$cart_id = "4324";
//$cus_id ="5353";
//$order_cost = "5000";


$sql = "INSERT INTO ".$TbName."(order_id, deli_address, deli_distance, deli_phone, deli_vahicle, deli_addDetail, deli_name, deli_distanceCost)
VALUES (".$order_id.", '".$deli_address."', '".$deli_distance."', '".$deli_phone."', '".$deli_vahicle."', '".$deli_addDetail."', '".$deli_name."', '".$deli_distanceCost."')";

//$sql = "INSERT INTO ".$TbName." (name, detail, img, price, stamp, Res_id)
//VALUES ('".$name."', '".$detail."', '".$img."', ".$price.", ".$stamp.", ".$Resid.")";

mysqli_query($conn,$sql);

mysqli_close($conn);
?>
