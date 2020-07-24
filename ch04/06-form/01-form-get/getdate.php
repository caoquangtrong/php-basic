<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="getdate.php" method="get">
  <input type="text" name = "year" value = ""/> 
  <input type="submit" name = "btn" value="tim tuoi" />
 </form>

 <?php
 //neu nguoi dung click bao btn
  if(!empty($_GET['btn'])){
   //b1: Lay thong tin
   $year = isset($_GET['year'])? (int)$_GET['year']:0;

   //b2: lay nam hien tai
   $current_year = date('Y');
   //kiem tra nam sinh co hop le khong
   if($year <= 0 || $year > $current_year){
    echo 'nawm sinh khong hop le';
   }
   else{
    echo 'so tuoi cua ban la: '.($current_year-$year);
   }
  }
 ?>
</body>
</html>