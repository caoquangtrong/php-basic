
<?php
//get: cacs du lieu hien thi tren url decode
//post: khong co hien thi

 // echo $_POST["login"];
 // echo "</br>";
 // echo $_POST["password"];

 // echo $_GET["login"];
 // echo "</br>";
 // echo $_GET["password"];

 $userName =  $_REQUEST["login"];
 
 $passWord =  $_REQUEST["password"];

 echo $userName;
 echo "</br>";
 echo $userName;

 $result = ($userName = "admin" && $passWord="1234") ? "Dang nhap thanh cong" : "Dang nhap that bai"; 

