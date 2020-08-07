<?php
    require "DB_driver.php";

    class DB_business extends DB_driver{
        //ten table
        protected $_table_name = '';

        //ten khoa chinh
        protected $_key = '';

        //ham khoi tao
        function __construct(){
            parent::connect();
        }

        //ham ngat ket noi
        function __destruct(){
            parent::dis_connect();
        }

        //ham xao theo id
        function delete_by_id($id){
            return $this->remove($this->_table_name, $this->_key.'='.(int)$id);
        }

        //ham them moi
        function add_new($data){
            return parent::insert($this->_table_name, $data);
        }

        //ham cao cap nhat theo id
        function update_by_id($data, $id){
            return $this->update($this->_table_name, $data, $this->_key.'='.(int)$id);
        }

        //ham select theo id
        function select_by_id($select, $id){
            $sql = "select $select from ".$this->_table_name." where ".$this->_key." = ".(int)$id;
            return $this->get_row($sql);
        }

    }
?>