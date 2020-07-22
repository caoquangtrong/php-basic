<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<style>
 *{
  margin: 0px;
  padding: 0px;
 }
 .content {
  width: 800px;
  height: auto;
  border: 2px solid #0cc;
  margin: 20px auto;
  padding: 20px;
 }

 div.content div{
  border: 1px solid #0cc;
  padding: 5px;
  text-align: center;
  margin-bottom: 10px;
 }

 div.content div p{
  font-weight: bold;
 }

 div.content div span{
  font-style: italic;
 }
</style>
<body>
 <div class="content">
  <?php
   function createBox(){
    $result = '
    <div style="width: 200px; height: 50px;">
    <p>Box A <span>(200x50)</span></p>
    </div>';
    return $result;
   }
   $result = createBox();
   echo $result;
  ?>

  

 </div>
</body>
</html>