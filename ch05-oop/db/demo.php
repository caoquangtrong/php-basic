<?php
    //require('DB_driver.php');
    require('DB_buiness.php');

    //tao doi tuong moi
    // $DB = new DB_driver();

    //insert
    // $DB->insert('customer', array(
    //     'name' => 'le van â',
    //     'phone' => '0702321581'
    // ));

    //update
    // $DB->update('customer', array(
    //     'name'=> 'le van a'
    // ), 'id=1');

    //delete
    // $DB->remove('customer', 'id=1');

    //get list
    // var_dump($DB->get_list('select * from customer'));

    //get 1 row
    // var_dump($DB->get_row('select * from customer where id =7'))

    class customer extends DB_business{
        function __construct(){
            //khai bao ten bang
            $this->_table_name = 'customer';

            //khai bao ten field id
            $this->_key = 'id';

            //goi ham khoi tao cha
            parent::__construct();
        }
    }

    $c = new customer();

    // //them khach hang
    // $c->add_new(array(
    //     'name'=> "le van cc",
    //     'phone'=> "123232"
    // ));

    // //xoa khach hang
    // $c->delete_by_id(7);

    // $c->update_by_id(array(
    //     'name'=>'hello'
    // ),11);

    //lay chi tiet khach hang
    var_dump($c->select_by_id('*', 9));

?>