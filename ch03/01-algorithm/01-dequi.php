<?php
 function tinhtong($number){
  $result = 0;
  for($i = 1; $i <= $number; $i++){
   $result+=$i;
  }
  return $result;
 }

 function tongdequi($number){
  if($number == 1) return $number;
  else
  return $number+ tongdequi($number -1);
 }

 //day fibo: 1-1-2-3-5-8-13-21
 // u1=1
 // u2=1
 // u3=u1+u2
 function fibo($number){
  if($number == 1) return 1;
  if($number == 2) return 1;
  else{
   return fibo($number-1)+fibo($number-2);
  }
 }
 echo fibo(6); 
?>