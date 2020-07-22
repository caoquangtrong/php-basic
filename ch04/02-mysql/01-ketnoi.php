<?php
 //ket noi mysql bang mysqli object-oriented

 //tao doi tuong mysqli
 $conn = new mysqli('localhost', 'root', '');

 //kiem tra ket noi hay that bai
 //neu that bai thi bao loi
 if($conn->connect_errno){
  die("ket noi that bai: ". $conn->connect_error);
 }

 //thong bao ket noi thanh cong
 echo "ket noi thanh cong";

 //lenh tao database
 $sql = "create database demo1";

 //thuc thi truy van
 if($conn->query($sql) == true){
  echo '</br>'."tao database thanh cong";
 }else{
  echo '</br>'."tao database that bai: ".$conn->error;
 }

 //ngat ket noi
 $conn->close();
?>