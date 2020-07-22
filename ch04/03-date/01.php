<?php

 date_default_timezone_get('Asia/Ho_Chi_Minh');

 // $timezone = DateTimeZone::listIdentifiers();
 // foreach ($timezone as $item){
 //  echo $item . '<br>';
 // }
 echo date('d/m/Y - H:i:s');
 echo '<br>';
 echo date('\B\â\y \g\i\ờ \l\à H \g\i\ờ');
 echo '<br>';
 //chuyen doi thoi gian sang int
 echo strtotime(date('Y-m-d H:i:s'));
 echo '<br>';
 //dinh dang ngay thang trong mysql
 echo date('Y-m-d H:i:s');
 echo '<br>';
 //cong ngay thang nam
 $dateint = mktime(0,0,0,11,(20+12),2016);
 echo date('d/m/Y', $dateint);
?>