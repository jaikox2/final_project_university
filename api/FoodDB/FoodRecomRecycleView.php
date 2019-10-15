<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectFoodTable.php';


//  $Resid = $_POST['Res_id'];
  //$Resid = "4";

//  $sql = "SELECT * FROM ".$TbName." where Res_id=".$Resid." ";



$sql = "SELECT food.id, food.name, food.price, food.img, resuser.id, resuser.resname, resuser.address, resuser.img FROM food
INNER JOIN resuser ON food.recom = 'Recom' and food.Res_id = resuser.id;";

  $result=mysqli_query($conn,$sql);

  $object_array = array();

  while($data = mysqli_fetch_array($result)) {
    array_push($object_array,$data);
  }
  $json_array = json_encode($object_array);

  echo $json_array;

mysqli_close($conn);
?>
