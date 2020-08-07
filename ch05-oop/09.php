<?php
    //interface
    //tinh ke thua
    interface A{
        public function funca();
    }

    interface B extends A{
        public function funcb();
    }

    //lop nay dung vi khai bao day du cacs ham
    class C implements B{
        public function funca(){
            echo 'funca';
        }
        public function funcb(){
            echo 'funcb';
        }
    }
    //lop nay sai
    //khai bao khong day du cac ham
    // class D implements B{
    //     public function fucna(){}
    // }
?>