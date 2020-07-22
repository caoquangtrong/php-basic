<?php
 $path = 'demo.txt';
 $fp = @fopen($path, "r");
 //r: read only
 //r+: read+write
 //w: write only
 //w+: write+read

 //kiem tra file mo thanh cong khong
 if(!$fp){
  echo 'Mo file khong thanh cong';
 }else{
  echo 'Mo file thanh cong'.'</br>';
  while(!feof($fp)){
   //tung ki tu
   //echo fgetc($fp);

   //tung dong
   // echo fgets($fp);
   // echo '</br>';

   //doc het file
   $data = fread($fp, filesize('demo.txt'));
   echo $data;
  }
  fclose($fp);

  


 }
?>