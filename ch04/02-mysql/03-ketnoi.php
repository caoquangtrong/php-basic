<?php
 //ket noi mysql bang pdo
 try{
  //ket noi
  $conn = new PDO("mysql:host=localhost;dbname=test", 'root', '');

  //thiet lap che do loi
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //thong bao thanh cong
  echo "ket noi thanh cong";
 }catch (PDOEXception $e){
  echo "ket noi that bai: ". $e->getMessage();
 }

 //ngat ket noi
 $conn = null;
?>