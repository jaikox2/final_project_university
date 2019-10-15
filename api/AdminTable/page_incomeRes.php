

          <h2 style="margin-top:30px">รายได้ของร้านอาหาร</h2>
          <form action="homemenu.php?page=restaurantIncome" method="POST" style="margin-top:10px">
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
                  <th>ชื่อร้านอาหาร</th>
                  <th>รายการที่สั่ง</th>
                  <th>รายได้</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sum = 0;
                $cart = 0;

                if(isset($_POST["date"])){
                  $date = $_POST["date"];

                  $cart_id = 0 ;
                  $sql = "SELECT id, resname
                  FROM resuser where status='allow' ";
                  $result=mysqli_query($conn,$sql);
                  while($data = mysqli_fetch_assoc($result)) {

                    $sql1 = "SELECT id
                    FROM food where Res_id=".$data["id"]." ";
                    $result1=mysqli_query($conn,$sql1);
                    while($data1 = mysqli_fetch_assoc($result1)){

                      $sql2 = "SELECT cart_id
                      FROM tb_cart where food_id=".$data1["id"]." ";
                      $result2=mysqli_query($conn,$sql2);
                      while($data2 = mysqli_fetch_assoc($result2)){

                        if( $cart_id != $data2["cart_id"] ){
                          $cart_id = $data2["cart_id"];

                        $sql3 = "SELECT order_cost
                        FROM tb_order where cart_id=".$data2["cart_id"]." AND order_date='".$date."'AND order_status='success' ";
                        $result3=mysqli_query($conn,$sql3);
                        while($data3 = mysqli_fetch_assoc($result3)){

                          $cart = $cart + 1;

                          $sum = $sum + $data3["order_cost"];

                        }
                      }
                      }
                    }

                         echo "<tr>".
                        "<td>".$data["id"]."</td>".
                        "<td>".$data["resname"]."</td>".
                        "<td>".$cart."</td>".
                        "<td>".$sum."</td>".
                        "</tr>";
                        $sum = 0;
                        $cart = 0;

                }

                }else {
                  $cart_id = 0 ;
                  $sql = "SELECT id, resname
                  FROM resuser where status='allow' ";
                  $result=mysqli_query($conn,$sql);
                  while($data = mysqli_fetch_assoc($result)) {

                    $sql1 = "SELECT id
                    FROM food where Res_id=".$data["id"]." ";
                    $result1=mysqli_query($conn,$sql1);
                    while($data1 = mysqli_fetch_assoc($result1)){

                      $sql2 = "SELECT cart_id
                      FROM tb_cart where food_id=".$data1["id"]." ";
                      $result2=mysqli_query($conn,$sql2);
                      while($data2 = mysqli_fetch_assoc($result2)){

                        if( $cart_id != $data2["cart_id"] ){
                          $cart_id = $data2["cart_id"];

                        $sql3 = "SELECT order_cost
                        FROM tb_order where cart_id=".$data2["cart_id"]." AND order_status='success' ";
                        $result3=mysqli_query($conn,$sql3);
                        while($data3 = mysqli_fetch_assoc($result3)){

                          $sum = $sum + $data3["order_cost"];

                        }
                      }
                      }
                    }

                         echo "<tr>".
                        "<td>".$data["id"]."</td>".
                        "<td>".$data["resname"]."</td>".
                        "<td>".$sum."</td>".
                        "</tr>";
                        $sum = 0;

                }

                }
                  ?>
              </tbody>
            </table>
          </div>
