<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectResTable.php';

class resUser {
       public $id = "";
       public $resname = "";
       public $address  = "";
       public $firstname  = "";
       public $lastname  = "";
       public $email  = "";
       public $phone  = "";
       public $addmap  = "";
       public $img = "";
}

$obj = new resUser();



  //$sql = "SELECT * FROM ".$TbName."";

  //$Resid = "4";

  //$sql = "SELECT * FROM ".$TbName." where id=".$Resid." ";

  $sql = "SELECT * FROM ResUser where status='allow'";
    //$sql = "SELECT * FROM Food";

  $result=mysqli_query($conn,$sql);

  $object_array1 = array();

  while($data = mysqli_fetch_array($result)) {
    $obj->id =$data["id"];
    $obj->resname =$data["resname"];
    $obj->address =$data["address"];
    $obj->firstname =$data["firstname"];
    $obj->lastname =$data["lastname"];
    $obj->email =$data["email"];
    $obj->phone =$data["phone"];
    $obj->addmap =$data["addmap"];
    $obj->img =$data["img"];

    /*$obj->id =$data["id"];
    $obj->resname =$data["name"];
    $obj->address =$data["detail"];
    $obj->firstname =$data["price"];
    $obj->lastname =$data["recom"];
    $obj->email =$data["stamp"];
    $obj->img =$data["img"];*/
    array_push($object_array1,$obj);
    $obj = new resUser();
  }
  $json_array = json_encode($object_array1);

  echo $json_array;

  mysqli_close($conn);
?>
