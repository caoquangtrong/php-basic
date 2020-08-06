<?php
    class A{
        protected $protected_A = 'protected';
        private $private_A = 'private';
        public $public_A = 'public';

        private function showPrivate(){
            echo $this->private_A;
        }

        protected function showProtected(){
            echo $this->protected_A;
        }

        public function showPublic(){
            echo $this->public_A;
        }
    }

    class B extends A{
        //ke thua lop A
        public function classB(){
            echo $this->showProtected();
        }
    }

    class C extends B{
        public function showInfo(){
            //ok
            $this->protected_A = 'nguyen van a';

            //ok
            $this->public_A = 'Nguyen van b';

            //not ok
            //$this->private_A = 'nguyen van c';
        }
    }

    $c = new C();

    $c->showPublic();

    //$c->showProtected();

    //$c->showPrivate();

    $c->ClassB();

?>