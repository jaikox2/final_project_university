<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectDeliveryTable.php';

class deliver{
       public $deli_id = "";
       public $order_id = "";
       public $time  = "";
       public $date = "";
       public $res_name  = "";
       public $deliman_id = "";
       public $res_location = "";
       public $delivery_location = "";
}

  $obj = new deliver();

  //$userid = $_POST['user_id'];
  $userid = $_POST['user_id'];
  //$userid = "1";
  //$Resid = $_POST['Res_id'];

  $sql = "SELECT vahicle  FROM deliverymanuser where id=".$userid." ";

  $result=mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($result);
  $data["vahicle"];

  $sql = "SELECT tb_delivery.deli_id, tb_delivery.order_id, tb_delivery.deliman_id, tb_delivery.deli_address, tb_order.cart_id, tb_order.order_time, tb_order.order_date FROM tb_delivery
  INNER JOIN tb_order ON tb_delivery.deli_vahicle='".$data["vahicle"]."' AND (tb_delivery.deliman_id=".$userid." OR tb_delivery.deliman_id='0') AND tb_delivery.order_id=tb_order.order_id AND tb_order.order_status='not'";


  $result=mysqli_query($conn,$sql);

  $object_array = array();

  while($data = mysqli_fetch_assoc($result)) {
    $obj->deli_id = $data["deli_id"];
    $obj->order_id = $data["order_id"];
    $obj->deliman_id = $data["deliman_id"];
    $obj->delivery_location = $data["deli_address"];
      $obj->time = $data["order_time"];
      $obj->date = $data["order_date"];
      $sql = "SELECT food_id FROM tb_cart where cart_id=".$data["cart_id"]." ";
      $result2=mysqli_query($conn,$sql);
      while($data2 = mysqli_fetch_assoc($result2)) {
        $sql = "SELECT Res_id FROM food where id=".$data2["food_id"]." ";
        $result3=mysqli_query($conn,$sql);
        while($data3 = mysqli_fetch_assoc($result3)) {
          $sql = "SELECT resname, addmap FROM resuser where id=".$data3["Res_id"]." ";
          $result4=mysqli_query($conn,$sql);
          while($data4 = mysqli_fetch_assoc($result4)) {
            $obj->res_name = $data4["resname"];
            $obj->res_location = $data4["addmap"];
          }
        }
      }
    array_push($object_array,$obj);
    $obj = new deliver();
  }
  $json_array = json_encode($object_array);

  echo $json_array;

mysqli_close($conn);
?>
