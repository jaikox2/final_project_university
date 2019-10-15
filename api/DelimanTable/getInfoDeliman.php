<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectDelimanTable.php';

class Deliman {
       public $name = "";
       public $lastname = "" ;
       public $number = "" ;
       public $img = "" ;
}

$obj = new Deliman();

$deliman_id = $_POST['deliman_id'];
//$deliman_id = "1";

$sql = "SELECT firstname, lastname, phone, img FROM deliverymanuser where id=".$deliman_id."";
$result=mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$obj->name = $data["firstname"];
$obj->lastname = $data["lastname"];
$obj->number = $data["phone"];
$obj->img = $data["img"];


//$json_array = json_encode($object_array);
echo json_encode($obj);

mysqli_close($conn);
?>
