<?php
    //neu khong phai la xu kien dang ki thi khong xu ly
    if(!isset($_POST['txtUsername'])){
        die("");
    }

    //nhung file ket noi db
    include('ketnoi.php');
    header('Content-Type: text/html; charset=UTF-8');

    global $conn;

    //lay du lieu tu file dangky.php
    echo $username = addslashes($_POST['txtUsername']);
    echo $password = addslashes($_POST['txtPassword']);
    echo $email = addslashes($_POST['txtEmail']);
    echo $fullname = addslashes($_POST['txtFullname']);
    echo $birthday = addslashes($_POST['txtBirthday']);
    echo $sex = addslashes($_POST['txtSex']);

    //kiem tra nguoi dung nhap du lieu day du chuwa
    if(!$username || !$password || !$email || !$fullname || !$birthday || !$sex){
        echo "Vui long nhap day du. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //mã hoá mật khẩu
    $password = md5($password);

    //kiem tra ten dang nhap da dung chua
    $sql = "select username from member where username='$username'";
    if(mysqli_num_rows(mysqli_query($conn, $sql))>0){
        echo "Ten trung. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //kiem tra email co dung dinh dang hay khong
    // if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)){
    //     echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     exit;
    // }
    if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL))
    echo 'Email is incorrect';

    //kiem tra email da co nguoi dung chua
    $sql = "SELECT email FROM member WHERE email='$email'";
    if(mysqli_num_rows(mysqli_query($conn, $sql))>0){
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra dạng nhập vào của ngày sinh
    // if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday))
    // {
    //     echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    //     exit;
    // }

    if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$birthday)) {
        echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    //luu thong tin thanh vien vao bang
    $addmember = mysqli_query($conn, "INSERT INTO member (
        username,
        password,
        email,
        fullname,
        birthday,
        sex
    )
    VALUE (
        '{$username}',
        '{$password}',
        '{$email}',
        '{$fullname}',
        '{$birthday}',
        '{$sex}'
    )");
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";

?>
