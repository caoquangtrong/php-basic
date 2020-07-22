<?php 
 function pow2(&$n1, $n2){
  $result = 0;
  $n1 = $n1*$n1;
  $n2 = $n2*$n2;
  $result = $n1+$n2;
  return $result;
 }
 $n1 = 2;
 $n2 = 4;
 $result = pow2($n1, $n2);
 echo $n1.'  '.$n2.'   '.$result;
 
?>