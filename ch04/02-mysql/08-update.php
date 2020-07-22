<?php
 //ket noi csdl
 $conn = new mysqli('localhost', 'root', '', 'demo1');

 //kiem tra ket noi
 if($conn->connect_error){
  die("ket noi that bai:" . $conn->connect_error);
 }

 //lenh update
 $sql = "update news set title='tieu de update' where id = 10";

 //thuc hien update
 if($conn->query($sql) === true){
  echo "update thanh cong";
 }else{
  echo "update that bai: ".$conn->error;
 }

 //ngat ket noi
 $conn->close();
?>