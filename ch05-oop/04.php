<?php

    class dongvat{
        public function an(){
            echo "dong vat an".'<br>';
        }
    }

    class conheo extends dongvat{
        public function an(){
            parent::an();
            echo "con heo an".'<br>';
        }
    }

    $x = new conheo();
    $x->an();
?>