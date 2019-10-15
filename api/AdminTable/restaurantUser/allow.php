<h2 style="margin-top:30px">ร้านอาหารที่ได้รับอนุญาติ</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>หมายเลข</th>
        <th>ชื่อร้าน</th>
        <th>ที่อยู่</th>
        <th>ชื่อ-นามสกุล</th>
        <th>เบอร์โทร</th>
        <th>ที่อยู่แผ่นที่</th>
        <th>แก้ไข ลบ</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "ConnectAdminTable.php";

      if(isset($_POST["name"])){
        $id =$_GET["id"];
        $resname = $_POST["resname"];
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $addmap = $_POST["addmap"];
        $status = $_POST["status"];

        $sql="UPDATE resuser SET resname='".$resname."', firstname='".$name."', lastname='".$lastname."', address='".$address."', phone='".$phone."', addmap ='".$addmap."' ,status='".$status."' WHERE id=".$id."";
        $result=mysqli_query($conn,$sql);
        if($result){
        //  echo "แก้ไขเรียบร้อย";
        }else{
        //  echo "แก้ไขไม่สำเร็จ";
        }

      }

              $sql = "SELECT id, resname,firstname, lastname, address, phone, addmap FROM resuser where status='allow' ";
              $result=mysqli_query($conn,$sql);
              while($data = mysqli_fetch_assoc($result)) {
                echo "<tr>".
                "<td>".$data["id"]."</td>".
                "<td>".$data["resname"]."</td>".
                "<td>".$data["address"]."</td>".
                "<td>".$data["firstname"]." ".$data["lastname"]."</td>".
                "<td>".$data["phone"]."</td>".
                "<td>".$data["addmap"]."</td>".
                "<td><button class=btn btn-sm btn-outline-secondary ><a href=homemenu.php?page=restaurantUser&menu=updateUser&id=".$data["id"].">แก้ไข</a></button>
                <button class=btn btn-sm btn-outline-secondary onclick=deleteResUser(".$data["id"].")>ลบ</button></td>".
                "</tr>";
              }
        ?>
    </tbody>
  </table>
</div>
