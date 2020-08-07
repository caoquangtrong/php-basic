<?php
    //bient hanh vien tinh
    
    class animal{
        protected static $_name = "chua co ten";

        function setname($name){
            animal::$_name = $name;
        }
        
        function getname(){
            return animal::$_name;
        }
    }

    
    //neu khong co static
    //vit
    //chua co ten

    //neu co static
    //vit
    //vit
    $vit =new animal();
    $vit->setname("vit");
    echo $vit->getname();
    echo '<br>';
    $heo = new animal();
    echo $heo->getname();
    
    //truy xuat truc tiep khong can khoi tao object
    animal::setname('hello');
    echo '<br>'.animal::getname();

    //ke thua

    class conheo extends animal{
        public function setname($name){
            parent::setname($name);
        }
    }

    $heo = new conheo();
    $heo::setname('con heo');
    echo $heo->getname();
    
?>