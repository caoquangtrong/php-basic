<?php
    include('connect.php');
    global $conn;
    $id = $_GET['id'];

    $sql = "delete from member where id = ".$id;

    if($result = mysqli_query($conn, $sql)){
        echo "Delete susscefull <a href='main.php'>HOME</a>";
        exit;
    }else{
        echo "Delete error <a href='javascript: history.go(-1)'>Tro lai</a>";
    }
    
?>