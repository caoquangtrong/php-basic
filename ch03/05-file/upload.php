<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="avatar"/>
  <input type="submit" name = "uploadclick" value = "upload"/>
 </form>
 <?php
  //xu ly upload
  
  //neu nguoi dung click upload
  if(isset($_POST['uploadclick'])){
   //neu nguoi dung co chon fike
   if(isset($_FILES['avatar'])){
    //neu file khong bi loi
    //thuoc tinh error > 0
    if($_FILES['avatar']['error']>0){
     echo "file upload bi loi";
    }
    else{
     //uplaod file
     move_uploaded_file($_FILES['avatar']['tmp_name'], './upload/'.$_FILES['avatar']['name']);
     echo 'file uploaded';
    }
   }else{
    echo 'Bạn chưa chọn file upload';
   }
  }
 ?>
</body>
</html>