<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectFoodTable.php';

class food{
       public $id = "";
       public $name  = "";
       public $detail = "";
       public $price  = "";
       public $stamp = "";
       public $img = "";
       public $status = "";

}

  $obj = new food();

  //$userid = $_POST['user_id'];
  $userid = $_POST['user_id'];
  //$Resid = $_POST['Res_id'];

  $sql = "SELECT * FROM ".$TbName." where Res_id=".$userid." ";

  $result=mysqli_query($conn,$sql);

  $object_array = array();

  while($data = mysqli_fetch_assoc($result)) {
    $obj->id = $data["id"];
    $obj->name = $data["name"];
    $obj->price = $data["price"];
    $obj->stamp = $data["stamp"];
    $obj->detail = $data["detail"];
    $obj->img = $data["img"];
    array_push($object_array,$obj);
    $obj = new food();
  }
  $json_array = json_encode($object_array);

  echo $json_array;

mysqli_close($conn);
?>
