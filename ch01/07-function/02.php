<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <?php
  function kiemtra($value){
   if($value%2)
    return false;
   return true;
  }
  $result = kiemtra(10);
  if($result){
   echo "chan";
  }else{
   echo "le";
  }
 ?>
</body>
</html>