<?php
    session_start();

    header('Content-type: text/html; charset=UTF-8');

    if(isset($_POST['login'])){
        include('connect.php');
        global $conn;

        $username = addslashes($_POST['txtusername']);
        $password = addslashes($_POST['txtpassword']);

        if(!$username || !$password){
            echo "Vui long nhap day du <a href='javascript: history.go(-1)'>Tro lai</a>";
            exit;
        }

        $password = md5($password);

        $sql = "select username, password from admin where username='$username'";
        if(mysqli_num_rows(mysqli_query($conn, $sql)) == 0){
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        //lay mat khau trong db
        $row = mysqli_fetch_array(mysqli_query($conn, $sql));

        //so sanh 2 mat khau
        if($password != $row['password']){
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        //luu ten dang nhap
        $_SESSION['username'] = $username;
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='main.php'>Về trang chủ</a>";
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php?do=login" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td>
                    <input type="text" name="txtusername">
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <input type="password" name="txtpassword">
                </td>
            </tr>
        </table>
        <input type="submit" name="login" value='Login'>
        <a href="register.php" title='dang ky'>Dang ky</a>
    </form>
</body>
</html>