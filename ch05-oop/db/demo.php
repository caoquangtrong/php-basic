<?php
    require('DB_driver.php');

    //tao doi tuong moi
    $DB = new DB_driver();

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
    var_dump($DB->get_row('select * from customer where id =7'))

?>