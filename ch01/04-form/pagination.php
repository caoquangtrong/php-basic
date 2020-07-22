<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <div class="content">
  <div id="tnt_pagination">
   <span class="disable_tnt_pagination">Prev</span>
   <a href="pagination.php?page=1">1</a>
   <a href="pagination.php?page=2">2</a>
   <a href="pagination.php?page=3">3</a>
   <a href="pagination.php?page=4">4</a>
   <a href="pagination.php?page=5">5</a>
   <a href="pagination.php?page=6">6</a>
   <a href="pagination.php?page=7">7</a>
   <a href="pagination.php?page=8">8</a>
   <a href="pagination.php?page=9">9</a>
   <a href="pagination.php?page=10">10</a>
   <a href="#forwaed">Next</a>
  </div>
  <?php
   $page = (isset($_GET["page"])==true) ? $_GET["page"] : 0;
  ?>
  <p class="result">Ban dang o trang thu <?php echo $page; ?></p>
 </div>
</body>
</html>