<?php
 //Ket noi mysql bang mysqli procedural
 //thuc hien ket noi
 $conn = mysqli_connect('localhost', 'root', '');

 //kiem tra ket noi thanh cong hay that bai
 //that bai thi bao loi
 if(!$conn){
  die("ket noi that bai: ". mysqli_connect_error());
 }

 //thong bao thanh cong
 echo "ket noi thanh cong";

 //ngat ket noi
 mysqli_close();
?>