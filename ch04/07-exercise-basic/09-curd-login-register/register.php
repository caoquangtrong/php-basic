<?php
    if(isset($_POST['txtusername'])){
        include('connect.php');
        header('Content-Type: text/html;charset=UTF-8');

        global $conn;

        $username = addslashes($_POST['txtusername']);
        $password = addslashes($_POST['txtpassword']);

        if(!$username || !$password){
            echo "Vui long nhap day du. <a href='javascript: history.go(-1)'>Back</a>";
            exit;
        }

        $password = md5($password);

        $sql = "select username from admin where username='$username'";
        if(mysqli_num_rows(mysqli_query($conn, $sql))>0){
            echo "Ten trung. <a href='javascript: history.go(-1)'>Back</a>";
            exit;
        }

        $sql = "insert into admin (
            username,
            password
        ) value(
            '{$username}',
            '{$password}'
        )";
        if(mysqli_query($conn, $sql)){
            echo "Qua trinh dang ki thanh cong <a href='main.php'> Ve trang chu</a>";
            echo "<br>";
            echo "Dang nhap<a href='login.php'> here</a>";
        }else{
            echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Dang ky</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name='txtusername'>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name='txtpassword'>
                </td>
            </tr>
        </table>
        <input type="submit" value='Register'>
        <input type="reset" value='Reset'>
    </form>
</body>
</html>