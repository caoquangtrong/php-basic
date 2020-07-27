<?php

    global $conn;

    $ketnoi['host'] = 'localhost';
    $ketnoi['dbname'] = 'demo';
    $ketnoi['username'] = 'root';
    $ketnoi['password'] = '';

    $conn = mysqli_connect($ketnoi['host'], $ketnoi['username'],$ketnoi['password'],$ketnoi['dbname']) or die("Khong the ket noi database")

?>