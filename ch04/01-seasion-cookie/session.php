<?php
 session_start();
 
 //Xoa bien session name
 // if(isset($_SESSION['name'])){
 //  unset($_SESSION['name']);
 // }

 //xoa het session
 // session_destroy();

 //nếu click vao nut, luu session
 if(isset($_POST['save-session'])){
  //lwuu session
  $_SESSION['name'] = $_POST['username'];
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h1>
 <?php
  //hien thi thong tin luu tai session
  //phai kiem tra co ton tai khong truoc khi xuat
  if(isset($_SESSION['name'])){
   echo 'Ten dang nhap la: '.$_SESSION['name'];
  }
 ?>
 </h1>
 <form action="" method="POST">
  <input type="text" name = "username" value = "" /> <br/>
  <input type="submit" name = "save-session" value = "luu session"/>
 </form>
</body>
</html>