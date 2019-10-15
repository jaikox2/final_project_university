

  <?php
  include "ConnectAdminTable.php";

  $Res_id = 0;
  $order_id = 0;

    $sql = "SELECT cususer.firstname, cususer.lastname, tb_order.order_id, tb_order.cart_id, tb_order.order_time, tb_order.order_date, tb_order.order_cost FROM tb_order
    INNER JOIN cususer ON tb_order.Cus_id = cususer.id AND tb_order.order_status='not' ORDER by tb_order.order_id ";
    $result=mysqli_query($conn,$sql);
    while($data = mysqli_fetch_assoc($result)) {
      $sql1 = "SELECT food_id FROM tb_cart where cart_id=".$data["cart_id"]." ";
      $result1=mysqli_query($conn,$sql1);
      while($data1 = mysqli_fetch_assoc($result1)) {
        $sql4 = "SELECT deliverymanuser.firstname, deliverymanuser.lastname ,tb_delivery.deli_distanceCost FROM tb_delivery
        INNER JOIN deliverymanuser  ON tb_delivery.deliman_id = deliverymanuser.id  AND tb_delivery.order_id=".$data["order_id"]." ";
        $result4=mysqli_query($conn,$sql4);
        while($data4 = mysqli_fetch_assoc($result4)) {
        $sql2 = "SELECT Res_id FROM food where id=".$data1["food_id"]." ";
        $result2=mysqli_query($conn,$sql2);
        while($data2 = mysqli_fetch_assoc($result2)) {
          if($Res_id != $data2["Res_id"] || $order_id != $data["order_id"]){
            $Res_id = $data2["Res_id"];
            $order_id = $data["order_id"];
          $sql3 = "SELECT resname FROM resuser where id=".$data2["Res_id"]." ";
          $result3=mysqli_query($conn,$sql3);
          while($data3 = mysqli_fetch_assoc($result3)) {

            echo "<tr>".
                 "<td>".$data["order_id"]."</td>".
                 "<td>".$data3["resname"]."</td>".
                 "<td>".$data["order_time"]."</td>".
                 "<td>".$data["order_date"]."</td>".
                 "<td>".$data4["firstname"]." ".$data4["lastname"]."</td>".
                 "<td>".$data["firstname"]." ".$data["lastname"]."</td>".
                 "</tr>";
         }
         }
        }
      }
    }
    }
    ?>
