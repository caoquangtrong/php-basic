<?php

    class dongvat{
        var $chan = '';
        var $mat = '1';
        var $gioitinh = '';

        function an(){
            echo 'an';
        }
        function ngu(){}
    }

    class contrau extends dongvat{
        var $sung = '';
        var $mat = '2';
        function gioithieu(){
            $mat = 'mat trau';
            $mui = 'mui trau';
            parent::an();
        }
    }

    $a = new contrau();
    echo $a->gioithieu();
    //echo $a->gioithieu().$mat; // error
    echo $a ->mat;
?>