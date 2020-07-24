<?php
 require("./students.php");

 //bien luu tru data va error
 $data = array();
 $errors = array();

 //bien kiem tra co action edit hay khong
 $is_update_action = false;

 //truong hop edit thi lay thong tin de show
 if(!empty($_GET['id'])){
  $data = getStudent($_GET['id']);
  $is_update_action = true;
 }

 //neu nguoi dung click vao nut submit
 if(!empty($_POST['add_student'])){
  //lay thong tin
  $data['student_id'] = isset($_POST['id']) ? $_POST['id'] : '';
  $data['student_name'] = isset($_POST['name']) ? $_POST['name'] : '';
  $data['student_email'] = isset($_POST['email']) ? $_POST['email'] : '';

  //validate
  if(empty($data['student_id'])){
   $errors['student_id'] = 'Ban chua nhap id';
  }
  if(empty($data['student_name'])){
   $errors['student_name'] = "Ban chua nhap name";
  }
  if(empty($data['student_email'])){
   $errors['student_mail'] = "Ban chua nhap email";
  }
  //neu du lieu hop le thi update
  //redirect ve trang chinh
  if(empty($errors)){
   updateStudent($data['student_id'], $data['student_name'], $data['student_email']);
   header("Location:student-list.php");
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <a href="student-list.php">Back</a>
 <form action="" method="post">
  <table border="1" cellspacing="0" cellpadding="10">
   <tr>
    <td>Id</td>
    <td>
     <input type="text" name="id" value="<?php echo !empty($data['student_id']) ? $data['student_id'] : '' ?>">
     <?php echo !empty($errors['student_id']) ? $errors['student_id'] : ''; ?>
    </td>
   </tr>
   <tr>
    <td>Name</td>
    <td>
     <input type="text" name="name" value="<?php echo !empty($data['student_name']) ? $data['student_name'] : '' ?>">
     <?php echo !empty($errors['student_name']) ? $errors['student_name'] : ''; ?>
    </td>
   </tr>
   <tr>
   <td>Id</td>
    <td>
     <input type="text" name="email" value="<?php echo !empty($data['student_email']) ? $data['student_email'] : '' ?>">
     <?php echo !empty($errors['student_email']) ? $errors['student_email'] : ''; ?>
    </td>
   </tr>
   <tr>
    <td></td>
    <td><input type="submit" name="add_student" value="<?php echo ($is_update_action) ? "Cap nhat" : "Them moi"; ?>" /></td>
   </tr>
  </table>
 </form>
</body>
</html>