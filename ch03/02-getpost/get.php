<?php
echo 'Dữ Liệu Chúng Tôi Nhận Được Là <br/>';
foreach ($_GET as $key => $val)
{
    echo '<strong>' . $key . ' => ' . $val . '</strong><br/>';
}
//http://localhost/php/php-training/ch03/02-getpost/get.php?id=12&title=method_get