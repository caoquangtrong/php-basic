<?php
    session_start();
    include('connect.php');
    global $conn;

    if (isset($_SESSION['username']) && $_SESSION['username']){
        if (!empty($_POST['add-member'])){
            $id = addslashes($_POST['id']);
            $name = addslashes($_POST['name']);
            $age = addslashes($_POST['age']);
            if(!$id || !$name || !$age){
                echo "Vui long nhap day du <a href='javascript: history.go(-1)'>Tro lai</a>";
            }else{
                $sql = "insert into member (
                    id,
                    name,
                    age
                ) value(
                    '{$id}',
                    '{$name}',
                    '{$age}'
                )";
                if(mysqli_query($conn, $sql)){
                    echo "Qua trinh them thanh cong <a href='main.php'> Ve trang chu</a>";
                    echo "<br>";
                }else{
                    echo "Có lỗi xảy ra trong quá trình them. <a href='javascript: history.go(-1)'>Tro lai</a>";
                }
            }
        }
    }
    else{
        header("Location: main.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Add member</h1>
        Id:
        <input type="text" name="id"><br>
        Name:
        <input type="text" name="name"><br>
        Age:
        <input type="text" name="age"><br>
        <input type="submit" name="add-member" value="add">
        <input type="reset" name="reset" value="Reset">
        <a href="main.php"><button type="button">Cancle</button></a>
    </form>
</body>
</html>