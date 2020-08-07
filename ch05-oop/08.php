<?php
    interface A{
        const constA = "consta";
    }

    class B implements A{
        //sai
        //const constA = 'other consta';
    }

    class D implements A{
        //dung
    }

    //dinh nghia ham
    interface dogtemp{
        public function run();//dung, khong dinh nghia ham
        public function eat();//dung
        // public function eat(){}//sai
    }

    //ding nghia muc truy cap
    class dog implements dogtemp{
        // private function run(){}//sai
        public function run(){
            //phai co trong class nay
        }
        public function eat(){
            //phai co trong class nay
        }
    }
?>