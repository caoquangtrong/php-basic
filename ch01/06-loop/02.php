<?php
 //3x+10y=100
 //x+y=17
 //tim x,y voi loop

  for($x = 1; $x<17; $x++){
   for($y = 17-$x; $y<17; $y++){
    if((3*$x+10*$y)==100){
     echo 'x='.$x.'</br>'.'y='.$y;
    }
   }
  }
?>