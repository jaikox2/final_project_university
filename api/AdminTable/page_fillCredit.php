

          <h2 style="margin-top:30px">เติมเครดิต</h2>
          <form action="homemenu.php?page=fillCredit" method="POST" style="margin-top:10px">
          <div class="form-group" style="margin-top:20px">
            <label for="email">ชื่อหรืออีเมลล์:</label>
            <input type="text" class="form-control col-sm-4" id="email" placeholder="Enter name or email" name="search"  >
          </div>
          <button type="submit" class="btn btn-sm btn-outline-secondary">ค้นหา</button>
        </form>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>หมายเลขผู้ใช้</th>
                  <th>ชื่อ-นามสกุล</th>
                  <th>อีเมลล์</th>
                  <th>เครดิตปัจจุบัน</th>
                  <th>เติมเครดิต</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "ConnectAdminTable.php";

                if(isset($_POST["credit"])){
                    $id = $_GET["id"];
                    $credit = $_POST["credit"];
                    $sum = 0.0;
                    if($credit != null){
                    $sql = "SELECT credit FROM cususer where id=".$id."";
                    $result=mysqli_query($conn,$sql);
                    $data = mysqli_fetch_assoc($result);
                    $sum = $data["credit"];
                    $sum = $sum + $credit;
                    $sql = "UPDATE cususer SET credit=".$sum." WHERE id=".$id." ";
                    $result=mysqli_query($conn,$sql);
                    }
                  }

                if(isset($_POST["search"])){
                  $search = $_POST["search"];
                  $sql = "SELECT id, firstname, lastname, email, credit FROM cususer where (firstname LIKE '%".$search."%' or lastname LIKE '%".$search."%' or email LIKE '%".$search."%' )";
                  $result=mysqli_query($conn,$sql);
                  while($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>".
                         "<td>".$data["id"]."</td>".
                         "<td>".$data["firstname"]." ".$data["lastname"]."</td>".
                         "<td>".$data["email"]."</td>".
                         "<td>".$data["credit"]."</td>".
                         "<td>
                         <form action=homemenu.php?page=fillCredit&id=".$data["id"]." method=POST style=margin-top:1px>
                         <div class=form-group style=margin-top:10px>
                           <input type=number class=control name=credit  >
                           <button type=submit class=btn btn-sm btn-outline-secondary>บันทึก</button>
                         </div>
                       </form>
                         </td>".
                         "</tr>";
                  }
                }else {
                  $sql = "SELECT id, firstname, lastname, email, credit FROM cususer";
                  $result=mysqli_query($conn,$sql);
                  while($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>".
                         "<td>".$data["id"]."</td>".
                         "<td>".$data["firstname"]." ".$data["lastname"]."</td>".
                         "<td>".$data["email"]."</td>".
                         "<td>".$data["credit"]."</td>".
                         "<td>
                         <form action=homemenu.php?page=fillCredit&id=".$data["id"]." method=POST style=margin-top:1px>
                         <div class=form-group style=margin-top:10px>
                           <input type=number class=control name=credit  >
                           <button type=submit class=btn btn-sm btn-outline-secondary>บันทึก</button>
                         </div>
                       </form>
                         </td>".
                         "</tr>";
                  }
                }

                  ?>
              </tbody>
            </table>
          </div>
