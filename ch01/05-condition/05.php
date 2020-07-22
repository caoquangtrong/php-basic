<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Mo phong may tinh dien tu</title>
</head>
<body>

<?php
$n1 = 0;
$n2 = 0;
$caculate = "";
$result = 0;
 if(isset($_POST["number1"])==true && isset($_POST["number2"])==true && isset($_POST["caculate"])==true){
  $n1 = $_POST["number1"];
  $n2 = $_POST["number2"];
  $caculate = $_POST["caculate"];
  switch ($caculate) {
   case "+":
    $result = $n1+$n2;
    break;
    case "-":
     $result = $n1-$n2;
     break;
     case "+":
      $result = $n1*$n2;
      break;
      case "+":
       $result = $n1/$n2;
       break;
  }
 }
?>

<div class="content">
  <h1>Mo phong may tinh dien tu</h1>
  <form action="#" method="post" name="main-form">
  <div class="row">
    <span>So thu nhat</span>
    <input type="text" name="number1" value="<?php echo $n1;?>">
   </div>
   <div class="row">
    <span>Phep toan</span>
    <input type="text" name="caculate"value="<?php echo $caculate;?>">
   </div>
   <div class="row">
    <span>So thu hai</span>
    <input type="text" name="number2"value="<?php echo $n2;?>">
   </div>
   <div class="row">
    <input type="submit" value="Xem ket qua" name = "submit">
   </div>
   <div class="row">
    <p>Ket qua <?php echo $result?></p>
   </div>
  </form>
 </div>
</body>
</html>