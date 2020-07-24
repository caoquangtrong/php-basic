<?php
 //bien ket noi toan cuc
 global $conn;

 //ham ket noi database
 function connect_db(){
  //goi toi bien toan cuc conn
  global $conn;

  //neu chua ket noi thi thuc hien ket noi
  if(!$conn){
   $conn = mysqli_connect('localhost', 'root', '', 'qlsv_db') or die('cannot connect to database');
   //thiet lap font chu ket noi
   mysqli_set_charset($conn, 'utf8');
  }
 }

 //ham ngat ket noi
 function disconnect_db(){
  //goi toi bien toan cuc $conn
  global $conn;

  //neu da ket noi thi thuc hie ngat ket noi
  if($conn){
   mysqli_close($conn);
  }
 }

 //ham lay tat ca sinh vien
 function get_all_students(){
  //goi toi bien toan cuc;
  global $conn;

  //ham ket noi
  connect_db();

  //cau truy van lay tat ca sinh vien
  $sql = "select * from tb_sinhvien";

  //thuc hien cau truy van
  $query = mysqli_query($conn, $sql);

  //khai bao mang chua ket qua
  $result = array();

  //dua record vao bien ket qua
  if($query){
   while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
   }
  }

  //tra ve ket qua
  return $result;
 }

 //ham lay sinh vien theo id
 function get_student($student_id){
  //goi toi bien toan cuc
  global $conn;

  //ham ket noi
  connect_db();

  //cau truy van lay tat ca sinh vien
  $sql = "select * form tb_sinhvien where sv_id = {$student_id}";
 
  //thuc hien cau truy van
  $query = mysqli_query($conn, $sql);

  //mang chua ket qua
  $result = array();

  //neu co ket qua thi dua ra result
  if(mysqli_num_rows($query) > 0){
   $row = mysqli_fetch_assoc($query);
   $result = $row;
  }

  //tra ve ket qua
  return $result;
 }

 //ham them sinh vien
 function add_student($student_name, $student_sex, $student_birthday){
  //goi toi bien toan cuc $conn
  global $conn;

  //ham ket noi
  connect_db();

  //chong sql injection
  $student_name = addslashes($student_name);
  $student_sex = addslashes($student_sex);
  $student_birthday = addslashes($student_birthday);

  //cau truy van them
  $sql = "insert into tb_sinhvien(sv_name, sv_sex, sv_birthday) values
  ('$student_name','$student_sex','$student_birthday')";

  //thuc hien cau truy van
  $query = mysqli_query($conn, $sql);

  return $query;
 }

 //ham sua sinh vien
 function edit_student($student_id, $student_name, $student_sex, $student_birthday){
  //goi bien toan cuc
  global $conn;

  //ham ket noi
  connect_db();

  //chong sql injection
  $student_name = addslashes($student_name);
  $student_sex = addslashes($student_sex);
  $student_birthday = addslashes($student_birthday);

  //cau truy van sua
  $sql = "update tb_sinhvien set 
  sv_name = '$student_name',
  sv_sex = '$student_sex',
  sv_birthday = '$student_birthday'
  where sv_id=$student_id
  ";

  //thuc hien cau truy van
  $query = mysqli_query($conn, $sql);

  return $query;
 }

 //ham xoa sinh vien
 function delete_student($student_id){
  //goi toi bien toan cuc
  global $conn;

  //ham ket noi
  connect_db();

  //cau truy van xoa
  $sql = "delete from tb_sinhvien where sv_id = $student_id";

  //thuc hien cau truy van hoa
  $query = mysqli_query($conn, $sql);

  //reuturn
  return $query;
 }
?>