<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectDelimanTable.php';


class upload {
       public $status  = "";
}


@mkdir("upload-img"); 		//ถ้าไม่มีไดเร็กทอรี้นี้ ให้สร้างใหม่

$obj = new upload();
$newfilename = $_POST['img'];

if(isset($_FILES['upload_file'])) {          //Upload image

  while (file_exists("upload-img/" . $newfilename)){
      if($newfilename != "pro.jpg"){
        unlink("upload-img/".$newfilename);
      }
      $temp = explode(".", $_FILES['upload_file']['name']);
      $newfilename = round(microtime(true)) . '.' . end($temp);  //check the same image name
    }


    //check the same image name
	$target = "upload-img/" . $newfilename;
 	move_uploaded_file($_FILES['upload_file']['tmp_name'], $target);

  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $sex = $_POST['sex'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $userid = $_POST['user_id'];
  $img = $newfilename;

  /*$name = "jiojh";
  $lastname ="kofd90";
  $sex = "male";
  $address = "pattani";
  $phone = "vnidniu";
  $img ="pro1.jpg";
  $userid = 1;*/

$sql = "UPDATE ".$TbName." SET 	firstname='".$name."',lastname='".$lastname."',sex='".$sex."',address='".$address."',phone='".$phone."',img='".$img."' WHERE id=".$userid."";

$result=mysqli_query($conn,$sql);

if($result){
  $obj->status = "update success";
  echo json_encode($obj);
}else {
  $obj->status ="update Error";
  echo json_encode($obj);
}

} else {
  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $sex = $_POST['sex'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $userid = $_POST['user_id'];
  $img = $newfilename;

/*  $name = "jiojh";
  $lastname ="kofd90";
  $sex = "male";
  $address = "pattani";
  $phone = "vnidniu";
  $img ="pro1.jpg";
  $userid = 1;*/


$sql = "UPDATE ".$TbName." SET 	firstname='".$name."',lastname='".$lastname."',sex='".$sex."',address='".$address."',phone='".$phone."',img='".$img."' WHERE id=".$userid."";

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
