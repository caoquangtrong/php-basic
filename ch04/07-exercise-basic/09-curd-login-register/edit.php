<?php
    session_start();
    include('connect.php');
    global $conn;
    $id = $_GET['id'];

    if (isset($_SESSION['username']) && $_SESSION['username'] && $id){
        $sql = "select * from member where id = ".$id;
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $info = $row;
        }
        if (!empty($_POST['edit-member'])){
            
            $sql = "update member set name = '".$_POST['name']."', age = ".$_POST['age']." where id =".$info['id'];
            if($result = mysqli_query($conn, $sql)){
                echo "Edit susscefull <a href='main.php'>HOME</a>";
                exit;
            }else{
                echo "Edit error <a href='javascript: history.go(-1)'>Tro lai</a>";
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
    <title>Edit</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Edit member</h1>
        Id:
        <input readonly type="text" name="id" value = "<?php echo $info['id'] ?> "><br>
        Name:
        <input type="text" name="name" value = "<?php echo $info['name'] ?>"><br>
        Age:
        <input type="text" name="age" value = "<?php echo $info['age'] ?>"><br>
        
        <input type="submit" name="edit-member" value="edit">
        
        <a href="main.php"><button type="button">Cancle</button></a>
    </form>
</body>
</html>