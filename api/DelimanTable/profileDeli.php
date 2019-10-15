<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectDelimanTable.php';

class User {
       public $firstname  = "";
       public $lastname  = "";
       public $sex  = "";
       public $address  = "";
       public $email  = "";
       public $phone  = "";
       public $licensePlate  = "";
       public $vahicle  = "";
       public $img = "";
}

$obj = new User();

$user_id = $_POST['user_id'];
//$user_id = "1";

$sql = "SELECT * FROM ".$TbName." where id=".$user_id." ";

$result=mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);

$obj->firstname =$data["firstname"];
$obj->lastname =$data["lastname"];
$obj->sex =$data["sex"];
$obj->address =$data["address"];
$obj->email =$data["email"];
$obj->phone =$data["phone"];
$obj->img =$data["img"];
$obj->licensePlate=$data["licensePlate"];
$obj->vahicle=$data["vahicle"];

$json_data=json_encode($obj);

echo $json_data;

mysqli_close($conn);

?>
