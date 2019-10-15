

          <h2 style="margin-top:30px">รายได้ของผู้ส่งอาหาร</h2>
          <form action="homemenu.php?page=deliveryIncome" method="POST" style="margin-top:10px">
          <div class="form-group" style="margin-bottom:20px">
            <label for="pwd">ค้นหาตามวันที่:</label>
            <select name="date" class="form-control col-sm-4">
              <?php
              include "ConnectAdminTable.php";
              $sql = "SELECT order_date FROM tb_order where order_status='success' ORDER BY order_date DESC";
              $result=mysqli_query($conn,$sql);
              $date = 0;
              if(isset($_POST["date"])){
                echo " <option value=".$_POST["date"].">".$_POST["date"]."</option>";
              }
              while($data = mysqli_fetch_assoc($result)) {
                if($date != $data["order_date"]){
                echo " <option value=".$data["order_date"].">".$data["order_date"]."</option>";
                $date =  $data["order_date"];
                }
              }
               ?>
            </select>
          </div>
          <button type="submit" class="btn btn-sm btn-outline-secondary">ค้นหา</button>
        </form>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>หมายเลข</th>
                  <th>ชื่อ-นามสกุล</th>
                  <th>ชื่อร้าน</th>
                  <th>รายได้</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sum = 0;
                $resname = "null";

                if(isset($_POST["date"])){
                  $date = $_POST["date"];

                  $sql = "SELECT id, firstname, lastname
                  FROM deliverymanuser where status='allow' ";
                  $result=mysqli_query($conn,$sql);
                  while($data = mysqli_fetch_assoc($result)) {

                    $sql4 = "SELECT tb_order.cart_id
                    FROM tb_order
                    INNER JOIN tb_delivery ON tb_delivery.order_id = tb_order.order_id
                    AND tb_delivery.deliman_id =".$data["id"]." AND tb_order.order_date='".$date."' ";
                   $result4=mysqli_query($conn,$sql4);
                   while($data4 = mysqli_fetch_assoc($result4)) {

                     echo $data4["cart_id"];

                     $sql5 = "SELECT food.Res_id FROM tb_cart
                     INNER JOIN food ON tb_cart.cart_id = ".$data4["cart_id"]."
                     AND tb_cart.food_id = food.id ";
                    $result5=mysqli_query($conn,$sql5);
                    while($data5 = mysqli_fetch_assoc($result5)) {

                      $sql6 = "SELECT resname FROM resuse where id = ".$data5["Res_id"]." ";
                     $result6=mysqli_query($conn,$sql5);
                     while($data6 = mysqli_fetch_assoc($result6)) {

                       echo "<tr>".
                      "<td>".$data["id"]."</td>".
                      "<td>".$data["firstname"]." ".$data["lastname"]."</td>".
                      "<td>".$data6["resname"]."</td>".
                      "<td>".$sum."</td>".
                      "</tr>";
                      $sum = 0;




                     }




                    }




                   }


                          $sql3 = "SELECT tb_delivery.deli_distanceCost
                          FROM tb_order
                          INNER JOIN tb_delivery ON tb_delivery.order_id = tb_order.order_id
                          AND tb_delivery.deliman_id =".$data["id"]." AND tb_order.order_date='".$date."' ";
                         $result3=mysqli_query($conn,$sql3);
                          while($data3 = mysqli_fetch_assoc($result3)) {

                            $sum = $sum + $data3["deli_distanceCost"];

                         }

                }

                }else {
                  $sql = "SELECT id, firstname, lastname
                  FROM deliverymanuser where status='allow' ";
                  $result=mysqli_query($conn,$sql);
                  while($data = mysqli_fetch_assoc($result)) {

                          $sql3 = "SELECT tb_delivery.deli_distanceCost
                          FROM tb_order
                          INNER JOIN tb_delivery ON tb_delivery.order_id = tb_order.order_id AND tb_delivery.deliman_id =".$data["id"]." AND tb_order.order_status='success' ";
                         $result3=mysqli_query($conn,$sql3);
                          while($data3 = mysqli_fetch_assoc($result3)) {

                            $sum = $sum + $data3["deli_distanceCost"];

                         }

                         echo "<tr>".
                        "<td>".$data["id"]."</td>".
                        "<td>".$data["firstname"]." ".$data["lastname"]."</td>".
                        "<td>".$sum."</td>".
                        "</tr>";
                        $sum = 0;

                }

                }
                  ?>
              </tbody>
            </table>
          </div>
