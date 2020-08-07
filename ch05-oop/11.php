<?php
    class classname{
        public $username = 'caoquangtrong';

        function __set($key, $value){
            if($key=='somekey'){
                $this->username = $value;
            }
        }
        function __get($key){
            if($key=='somekey'){
                return $this->username;
            }
        }
    }

    $c = new classname();

    echo $c->somekey;

    $c->somekey = "hello";

    echo '<br>'.$c->username;

?>