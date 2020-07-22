<?php
 function tim_max($a, $b, $c){
  $max = $a;
  if($max < $b){
   $max = $b;
  }
  if($max < $c){
   $max = $c;
  }
  return $max;
 }
 echo $max = tim_max(44,2,3);