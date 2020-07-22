<?php
 $mang = array(1,5,6,34,7,242,2);
 
 function sort_noibot($mang){
  $sophantu = count($mang);
  for($i = 0; $i < $sophantu-1; $i++){
   for($j = $i+1; $j < $sophantu; $j++){
    if($mang[$i]> $mang[$j]){
     //hoan vi
     $temp = $mang[$i];
     $mang[$i] = $mang[$j];
     $mang[$j] = $temp;
    }
   }
  }
  return $mang;
 }

 $mang = sort_noibot($mang);
 for($i = 0; $i < count($mang); $i++){
  echo $mang[$i].'</br>';
 }

 