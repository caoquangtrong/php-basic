<?php

 //ket noi
 $conn = new mysqli('localhost', 'root', '', 'demo1');

 //kiem tra ket noi
 if($conn->connect_error){
  die("ket noi that bai". $conn->connect_error);
 }

 //cau sql delete
 $sql = "delete from news where id=11";

 //thuc hien cau truy van
 if($conn->query($sql) === true){
  echo 'xao thanh cong';
 }
 else{
  echo "xoa that bai". $conn->error;
 }

 $conn->close();
?>