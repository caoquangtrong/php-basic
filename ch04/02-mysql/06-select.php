<?php
 //ket noi csdl
 $conn = new mysqli('localhost', 'root', '', 'demo1');

 //kiem tra ket noi
 if($conn->connect_error){
  die("ket noi that bao:" . $conn->connect_error);
 }

 //cau sql select
 $sql = "select id, title, content from news";

 //thuc thi truy van
 $result = $conn->query($sql);

 //kiem tra so luong record co lon hon 0
 //neu lon hon khong tuc co ket qua, nguoc lai
 if($result->num_rows > 0){
  //su dung while de lap xuat kq
  while($row = $result->fetch_assoc()){
   echo 'title: '. $row['title']. ' - content: '. $row['content'].'<br>';
  }
 }else{
  echo "khong co record nao";
 }
?>