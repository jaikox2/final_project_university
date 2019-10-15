

          <h2 style="margin-top:30px">จัดการอาหารแนะนำ</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>หมายเลขอาหาร</th>
                  <th>ชื่อเมนู</th>
                  <th>ร้านอาหาร</th>
                  <th>จำนวนการสั่ง</th>
                  <th>อาหารแนะนำ</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "ConnectAdminTable.php";

                if(isset($_POST["advice"])){
                  $id = $_GET["id"];
                  $advice = $_POST["advice"];
                  $sql = "UPDATE food SET recom='".$advice."' WHERE id=".$id." ";
                  $result=mysqli_query($conn,$sql);
                }

                  $sql = "SELECT food.id, food.name, food.recom, resuser.resname, SUM(tb_cart.cart_amount) as count FROM food
                  INNER JOIN resuser ON resuser.status ='allow' AND food.Res_id = resuser.id
                  LEFT OUTER JOIN tb_cart ON tb_cart.food_id = food.id GROUP BY food.id ORDER BY count DESC";
                  $result=mysqli_query($conn,$sql);
                  while($data = mysqli_fetch_assoc($result)){

                  /*  $sql1 = "SELECT SUM(cart_amount) as count FROM tb_cart
                    where cart_status ='Order' AND food_id=".$data["id"]." ";
                    $result1=mysqli_query($conn,$sql1);
                    while($data1 = mysqli_fetch_assoc($result1)){*/
                    echo "<tr>".
                         "<td>".$data["id"]."</td>".
                         "<td>".$data["name"]."</td>".
                         "<td>".$data["resname"]."</td>".
                         "<td>".$data["count"]."</td>".
                         "<td>
                         <form action=homemenu.php?page=foodRecom&id=".$data["id"]." method=POST style=margin-top:10px>
                         <div class=form-group style=margin-bottom:20px>
                           <select name=advice class=form onchange=this.form.submit()>";
                           if($data["recom"] == 'NotRecom'){
                              echo "<option value=Recom >แนะนำ</option>";
                              echo "<option value=NotRecom selected>ไม่แนะนำ</option>";
                           }else{
                              echo "<option value=Recom selected >แนะนำ</option>";
                              echo "<option value=NotRecom >ไม่แนะนำ</option>";
                           }
                        echo "</select>
                         </div>
                       </form>
                         </td>".
                         "</tr>";
                    //}
                  }
                  ?>
              </tbody>
            </table>
          </div>
