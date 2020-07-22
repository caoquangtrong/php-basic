<?php
 //cach 1
 // require("child.php");
 // require "child.php";
 //neu gap loi => chuong trinh dung

 //cach 2
 // include("child.php");
 // echo 'parent.php';
 //neu gap loi => chuong trinh tiep tuc chayj nhuwng doan phia sau

 //include_one
 // require_once
 require_once("child.php");
 require("child.php");
 
 echo 'parent.php'
?>