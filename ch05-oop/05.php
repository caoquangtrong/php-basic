<?php
    class hinhoc{
        function ve(){

        }
    
        function dientich(){
    
        }
    }

    class hinhvuong extends hinhoc{
        public $canh =0;

        function ve(){
            echo 've hinh vuong'.'<br>';
        }

        function dientich(){
            return $this->canh * $this->canh;
        }
    }
    class hinhchuhat extends hinhoc{
        public $dai = 0;
        public $rong = 0;
    
        public function Ve()
        {
            echo 've hinh chu nhat';
        }
    
        public function dientich()
        {
            return $this->dai * $this->rong;
        }
    }

    $hcn = new hinhchuhat();
    $hcn->dai = 5;
    $hcn->rong = 3;

    echo $hcn->dientich();
    

?>