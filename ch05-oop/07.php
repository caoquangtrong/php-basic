<?php
    //lop truu tuong
    //khai bao
    abstract class baseclass{
        abstract protected function hello();
        abstract public function hi();
        //khong co phuong thuc private
        //khong tu khoi tao dc
        //$b = new baseclass() //sai
        //thuoc tinh khong dc abstract
        //phai rewrite
    }

    //vi du
    abstract class persion{
        protected $ten;
        protected $cmnd;
        protected $ns;
        abstract public function showinfo();
    }

    class sinhvien extends persion{
        public function showinfo(){
            echo 'sinh vien';
        }
    }

    final class cuoi{
        //class nay ko dc ke thua
        
    }
?>