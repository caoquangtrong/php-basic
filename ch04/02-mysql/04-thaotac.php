<?php
 //ket noi mysql bang mysqli object-oriented

 //tao doi tuong mysqli
 $conn = new mysqli('localhost', 'root', '', 'demo1');

 //kiem tra ket noi hay that bai
 //neu that bai thi bao loi
 if($conn->connect_errno){
  die("ket noi that bai: ". $conn->connect_error);
 }

 //thong bao ket noi thanh cong
 echo "ket noi thanh cong";

 // //lenh tao database
 // $sql = "create database demo1";
 // //thuc thi truy van
 // if($conn->query($sql) == true){
 //  echo '</br>'."tao database thanh cong";
 // }else{
 //  echo '</br>'."tao database that bai: ".$conn->error;
 // }
 
 // //sql creat table
 // $sql = "create table news(
 //  id int(6) unsigned auto_increment primary key,
 //  title varchar(30) not null,
 //  content text,
 //  add_date timestamp
 // )";
 // //thuc thi truy van
 // if($conn->query($sql)== true){
 //  echo "Tạo table thành công";
 // }else{
 //  echo "Tạo table thất bại: " . $conn->error;
 // }

 // // cau sql insert
 // $sql = "insert into news (title, content) values ('tieu de','noi dung')";

 // //thuc hien them record
 // if($conn->query($sql)== true){
 //  $last_id = $conn->insert_id;
 //  echo "them record thanh cong co id la $last_id";
 // }else{
 //  echo "loi: ". $sql . "<br>" . $conn->error; 
 // }

 //insert nhieu record 1 lan
 $sql = "insert into news (title, content) values ('tieu de 1', 'noi dun 1');";
 $sql .= " insert into news (title, content) values ('tieu de 2', 'noi dun 2');";

 //thuc thi cau lenh
 if($conn->multi_query($sql) === true){
  echo "them thanh cong";
 }else{
  echo "loi: ".$sql . '<br>' .$conn->error;
 }
 //ngat ket noi
 $conn->close();
?>