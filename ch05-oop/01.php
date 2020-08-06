<?php
    class dongvat{
        var $mat;
        var $mui;
        var $mieng;
        var $chan;

        function an($thuc_an){
            echo 'an '. $thuc_an;
        }
    }
    $conheo = new dongvat();

    $conheo->chan = 4;
    echo $conheo->chan.'<br >';
    echo $conheo->an("cam");
?>