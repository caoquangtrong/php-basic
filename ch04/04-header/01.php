<?php
 header('Content-Type: text/html; charset=utf-8');
// header ($string, $replace = true, $http_response_code = null) {}
// $string: Chuỗi khai báo cho kết quả trả về từ Server, chuỗi này đóng vai trò quan trọng nhất vì nội dung của nó sẽ quyết định header sẽ làm gì.
// $replace: Tham số này mặc định là true, nghĩa là định dạng của chuỗi $string sẽ được replace chứ không phải khai báo mới (trường hợp khai báo nhiều header).
// $http_response_code: Mã code trả về từ Server. VD 404 là not found 301 là chuyển hướng có chủ đích

 // header('Location: http://www.domain.net/');
 // header('Location: http://www.domain.net/', true, 301);
 header('Location: http://www.domain.net/', true, 404);
?>
