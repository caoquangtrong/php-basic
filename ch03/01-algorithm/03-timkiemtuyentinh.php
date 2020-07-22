<?php
$mang = array(1,3,32,4,5,12,54,543,323,23,2);

 // hàm kiểm tra
function kiem_tra($mang, $can_tim)
{
    for ($i = 0; $i < count($mang); $i++){ // duyệt qua từng phần tử của mảng
        if ($mang[$i] == $can_tim){ // và so sánh xem có bằng số 67 không, nếu có thì xuất ra màn hình
            return true; // và không cần làm gì trong hàm này nữa, trả về là đúng luôn
        }
    }
    return false; // sau khi lặp hết mà ko có thì return về false
}
  
// ---------------------- chương trình chính
// Cho mảng
$mang = array(321,312,3,4,5,45,56,5,7,6,787,8,7,2);
  
// biến cần tìm
$can_tim = 787;
  
// gọi hàm và xuất kết quả
if (kiem_tra($mang, $can_tim)){
    echo 'Số ' . $can_tim . ' có nằm trong mảng';
}
?>