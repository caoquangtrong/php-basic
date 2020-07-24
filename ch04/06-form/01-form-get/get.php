<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="get.php" method= "get">
  <input type="text" name="q" value = ""/>
  <input type="submit" name = "btn" value = "Search"/>
 </form>
 <?php
  var_dump($_GET);
 ?>
</body>
</html>