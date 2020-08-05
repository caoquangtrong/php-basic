<?php
    session_start();

    include('connect.php');
    global $conn;

    $sql = "select * from member";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    //print_r($data);
    $delete_admin = '';
    $edit_admin = '';
    $html_foot = '';
    if(isset($_SESSION['username']) && $_SESSION['username']){
        $delete_admin = 'Delete';
        $edit_admin = "Edit";
        $html_foot = '<td><a href="add.php"><button id="button">Them thanh vien</button></a></td>';
    }
    $html_body = '';
    foreach ($data as $value) {
    
        $html_body .= '
        <tr>
            <td>'.$value['id'].'</td>
            <td>'.$value['name'].'</td>
            <td>'.$value['age'].'</td>
            <td><a href="edit.php?id='.$value['id'].'">'.$edit_admin.'</a></td>
            <td><a href="delete.php?id='.$value['id'].'">'.$delete_admin.'</a></td>
        </tr>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <style type="text/css">
        table{
            text-align:center;
        }
        tr{
            border: 1px solid;
        }
        th{
            border: 1px solid;
        }
        td {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_SESSION['username']) && $_SESSION['username']){
            echo 'Bạn đã đăng nhập với tên là '.$_SESSION['username']."<br/>";
            echo 'Click vào đây để <a href="logout.php">Log out</a>';
        }else{
            echo 'Bạn chưa đăng nhập';
        }
    ?>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>

    <!-- table list menber -->
    <table id="datatable" style="border: 1px solid">
        <h1>Manage member</h1>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                echo $html_body;
            ?>
        </tbody>
        <tfoot>
            <tr>
            <?php
                echo $html_foot;
            ?>
            </tr>
        </tfoot>

    </table>
</body>
</html>