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
  $Resid = $_POST['Res_id'];

  $sql = "SELECT * FROM ".$TbName." where Res_id=".$Resid." ";

  $result=mysqli_query($conn,$sql);

  $object_array = array();

  while($data = mysqli_fetch_assoc($result)) {
    $obj->id = $data["id"];
    $obj->name = $data["name"];
    $obj->price = $data["price"];
    $obj->stamp = $data["stamp"];
    $obj->detail = $data["detail"];
    $obj->img = $data["img"];
    $sql1 = "SELECT c_id FROM tb_cart where cart_status = 'notOrder' and Cus_id = ".$userid." and food_id = ".$data["id"]."";
    $result1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1) > 0){
      $obj->status ="pass";
    }else {
      $obj->status ="false";
    }
    array_push($object_array,$obj);
    $obj = new food();
  }
  $json_array = json_encode($object_array);

  echo $json_array;

mysqli_close($conn);
?>
