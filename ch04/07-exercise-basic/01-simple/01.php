<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php
  //xu li tinh toan
  $result = '';
  if(isset($_POST['calculate'])){
   $a = isset($_POST['a'])? (float)trim($_POST['a']):'';
   $b = isset($_POST['b'])? (float)trim($_POST['b']):'';

   if($a == ''){
    echo 'Ban chua nhap a'.'<br>';
   }else if($b ==''){
    echo 'Ban chua nhap b'.'<br>';
   }else if($a==0){
    $result = 'so a phai != 0';
   }else{
    $result= -$b/$a;
   }
  }

 ?>
 <form action="01.php" method="post">
  <input type="text" name="a" value = "" style="width:20px"/>x + 
  <input type="text" name= "b" value = "" style="width:20px"/>=0
  <br>
  <input type="submit" name = calculate value="tinh">
 </form>
 <?php
  echo $result;
 ?>
</body>
</html>