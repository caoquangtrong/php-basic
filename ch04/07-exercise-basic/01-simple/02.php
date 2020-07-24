<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php
  $result='';
  if(isset($_POST["caculate"])){
   $a = isset($_POST['a'])?(float)trim($_POST['a']):'';
   $b = isset($_POST['b'])?(float)trim($_POST['b']):'';
   $c = isset($_POST['c'])?(float)trim($_POST['c']):'';
   if($a=='' || $b == '' || $c== ''){
    echo "nhap thieu";
   }else if($a==0){
    echo "a phai !=0";
   }else{
    $denta = $b*$b - 4*$a*$c;
    if($denta<0){
     echo "phuong trinh vo nghiem";
    }else if($denta == 0){
     echo 'phuong tinh co 1 ngiem'. (-$b/(2*$a));
    }else{
     echo 'x1 = '. ((-$b+sqrt($denta))/(2*$a));
     echo '<br>';
     echo 'x2 = '. ((-$b-sqrt($denta))/(2*$a));
    }
   }

  }
 ?>
 <h2>Giai phuong tring bac 2</h2>
 <form action="02.php" method="post">
  <input type="text" name="a" value = '' style='width:20px'>x<sup>2</sup>+
  <input type="text" name="b" value='' style='width:20px'>x+
  <input type="text" name="c" value='' style='width:20px'>=0
  <br>
  <input type="submit" name="caculate" value="Tinh">
  <?php

  ?>
 </form>
</body>
</html>