<?php
 function sumDigit($number){
  $sum = 0;
  while($number >0){
   $a = $number%10;
   $sum += $a;
   $number /= 10;
  }
  return $sum;
 }
?>