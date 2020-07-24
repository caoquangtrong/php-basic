<?php
 $authors = array(
  array(
   'name' => 'cao quang trong1',
   'blog' => 'hellp.net1',
   'position' => 'admin1',
  ),
  array(
   'name' => 'cao quang trong2',
   'blog' => 'hellp.net2',
   'position' => 'admin2',
  ),
  array(
   'name' => 'cao quang trong3',
   'blog' => 'hellp.net3',
   'position' => 'admin3',
  ),
  array(
   'name' => 'cao quang trong4',
   'blog' => 'hellp.net4',
   'position' => 'admin4',
  ),
 );

 // echo '<pre>';
 // var_dump($authors);
 // echo '</pre>';
 
 // echo ($authors[1]['name']);

 //them
 $new_author = array(
  'name' => 'Đặng Văn Chương',
    'blog' => 'freetuts.net',
    'position' => 'author'
 );
 $authors[] = $new_author;


 //xoa
 unset($authors[0]);

 //update
 $authors[1]['name'] = "hello";

 echo '<pre>';
 var_dump($authors);
 echo '</pre>';
?>