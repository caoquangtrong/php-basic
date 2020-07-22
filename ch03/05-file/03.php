<?php
 //kiem tra file co ton tai
 // if(file_exists('demo.txt')){
 //  echo "ton tai".'</br>';
 // }else{
 //  echo "khong ton tai".'</br>';
 // }
 
 // $fileopen = @fopen('demo.txt', 'w');

 // //kiem tra kha nang ghi
 // if(!$fileopen){
 //  echo "Mo file khong thanh cong";
 // }
 // else {
 //  if(is_writable("demo.txt")){
 //   echo "ghi dc".'</br>';
 //  }
 //  fclose($fileopen);
 // }

 //lay noi dung file
 echo file_get_contents('demo.txt');
?>