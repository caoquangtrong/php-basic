<?php
 //prepared cau sql rong mysqli

 //ket noi
 $conn = new mysqli('localhost', 'root', '', 'demo1');

 //kiem tra ket noi
 if($conn -> connect_error){
  die("ket noi that bai: ". $conn->connect_error);
 }

 //cau sql
 $sql = "insert into news (title, content) values (?, ?) ";

 //tao doi tuong repared
 $stmt = $conn->prepare($sql);

 //gan gia tri vao cac tham so an
 $stmt->bind_param("ss", $title, $content);

 //thuc thi cau truy van lan 1
 $title = "tieu de 1";
 $content = "noi dung 1";
 $stmt->execute();

 //thuc thi truy van lan 2
 $title = "tieu de 2";
 $content = "noi duung 2";
 $stmt->execute();

 echo "them thanh cong";

 //giai phong va ngat ket noi
 $stmt->close();
 $conn->close();

?>