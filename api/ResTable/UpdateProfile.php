<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectResTable.php';


class upload {
       public $status  = "";
}


@mkdir("upload-proimg"); 		//ถ้าไม่มีไดเร็กทอรี้นี้ ให้สร้างใหม่

$obj = new upload();
$newfilename = $_POST['img'];

if(isset($_FILES['upload_file'])) {          //Upload image

  while (file_exists("upload-proimg/" . $newfilename)){
      if($newfilename != "pro.jpg"){
        unlink("upload-proimg/".$newfilename);
      }
      $temp = explode(".", $_FILES['upload_file']['name']);
      $newfilename = round(microtime(true)) . '.' . end($temp);  //check the same image name
    }


    //check the same image name
	$target = "upload-proimg/" . $newfilename;
 	move_uploaded_file($_FILES['upload_file']['tmp_name'], $target);

  $res_name =$_POST['resname'];
  $res_add = $_POST['address'];
  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $addmap = $_POST['addmap'];
  $Resid = $_POST['Res_id'];
  $img = $newfilename;

  /*$res_name ="fesfesf";
  $res_add = "fsdfds";
  $name = "jiojh";
  $lastname ="kofd90";
  $email = "iu09uo";
  $phone = "vnidniu";
  $addmap = "4789305fd";
  $Resid = 1;*/

$sql = "UPDATE ".$TbName." SET 	resname='".$res_name."',firstname='".$name."',lastname='".$lastname."',address='".$res_add."',phone='".$phone."',img='".$img."',addmap='".$addmap."' WHERE id=".$Resid."";

$result=mysqli_query($conn,$sql);

if($result){
  $obj->status = "update success";
  echo json_encode($obj);
}else {
  $obj->status ="update Error";
  echo json_encode($obj);
}

} else {
  $res_name =$_POST['resname'];
  $res_add = $_POST['address'];
  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $addmap = $_POST['addmap'];
  $Resid = $_POST['Res_id'];
  $img = $newfilename;
  //echo $res_name."<br>".$res_add."<br>".$name."<br>".$lastname."<br>".$phone."<br>".$addmap."<br>".$Resid."<br>".$img;

  /*$res_name ="fesfesf";
  $res_add = "fsdfds";
  $name = "jiojh";
  $lastname ="kofd90";
  $email = "iu09uo";
  $phone = "vnidniu";
  $addmap = "4789305fd";
  $img = "profile.jpg";
  $Resid = 12;*/


$sql = "UPDATE ".$TbName." SET 	resname='".$res_name."',firstname='".$name."',lastname='".$lastname."',address='".$res_add."',phone='".$phone."',img='".$img."',addmap='".$addmap."' WHERE id=".$Resid."";

  $result=mysqli_query($conn,$sql);

  if($result){
    $obj->status = "update success";
  	echo json_encode($obj);
  }else {
    $obj->status ="update Error";
    echo json_encode($obj);
  }
}

mysqli_close($conn);
?>
