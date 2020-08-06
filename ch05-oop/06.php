<?php
    //c1
    class sinhvien{
        function sinhvien(){
            echo 'khoi tao sv';
        }
    }

    //c2
    class giangvien{
        function __construct(){
            echo 'khoi tao gv';
        }
    }

    //c3
    class phuhuynh{
        // function phuhuynh($me){
        //     echo $me;
        // }
        function __construct($me){
            echo $me;
        }

        function show(){
            echo 'phu huynh';
        }

        function __destruct(){
            echo "huy";
        }
    }

    //thua ke thi uu tien ham dung, huy cua lop con


    // $sv = new sinhvien();
    // $gv = new giangvien();
    $ph = new phuhuynh('hello');
?>