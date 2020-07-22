<?php
 $path = "demo.txt";
 $fileopen = @fopen($path, "a+");

 if(!$fileopen){
  echo "Mo file khong thanh cong";
 }
 else{
  $data = "\nthem vao sau";
  fwrite($fileopen, $data);
 }
 fclose($fileopen);
?>