<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCustomerTable.php';

class resUser {
       public $sex = "";
       public $address  = "";
       public $firstname  = "";
       public $lastname  = "";
       public $email  = "";
       public $phone  = "";
       public $credit  = "";
       public $img = "";
}

$obj = new resUser();

$Resid = $_POST['Res_id'];
//$Resid = "1";

$sql = "SELECT * FROM ".$TbName." where id=".$Resid." ";

$result=mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);

$obj->address =$data["address"];
$obj->sex =$data["sex"];
$obj->firstname =$data["firstname"];
$obj->lastname =$data["lastname"];
$obj->email =$data["email"];
$obj->phone =$data["phone"];
$obj->img =$data["img"];
$obj->credit =$data["credit"];

$json_data=json_encode($obj);

echo $json_data;

mysqli_close($conn);

?>
