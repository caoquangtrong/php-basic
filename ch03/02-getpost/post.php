<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST">
            Username: <input type="text" name="username" value=""/> <br/>
            password: <input type="password" name="password" value=""/><br/>
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
        </form>
        <?php
         //neu nguoi dung click button
         //ten cua key namg trong bien $_POST
         if(isset($_POST['form_click'])){
          echo 'Ten dang nhap: '. $_POST['username'].'</br>';
          echo 'Mat khau: '. $_POST['password'];

         }
        ?>
    </body>
</html>