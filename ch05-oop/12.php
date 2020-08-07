<?php
    class student{

        public function __call($method, $params){
            echo 'ten phuong thuc: '.$method .'<br>';
           
            print_r($params);
        }

        public static function __callStatic($method, $params){
            echo 'ten phuong thuc: '.$method.'<br>';
            print_r($params);
        }
    }
    $s = new student();
    $s->get('hello','hi');
    student::hello("hahaha");
?>