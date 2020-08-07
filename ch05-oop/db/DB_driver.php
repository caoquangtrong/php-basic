<?php
    class DB_driver{
        private $__conn;

        function connect(){
            //neu chua thuc hien ket noi thi thuc hien ket noi
            if(!$this->__conn){
                $this->__conn = mysqli_connect('localhost', 'root', '', 'demo') or die('Loi ket noi');
                //cu ly truy van utf8
                mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
            }
        }

        function dis_connect(){
            if($this->__conn){
                mysqli_close($this->__conn);
            }
        }

        function insert($table, $data){
            //ket noi
            $this->connect();

            //luu tru dsng sach field
            $field_list='';

            //luu dang sach gia tri tuong ung voi field-list
            $value_list='';

            //lap qua data
            foreach ($data as $key => $value) {
                $field_list .= ",$key";
                $value_list .= ",'".mysqli_escape_string($this->__conn,$value)."'";
            }

            //sau vong lap thi cac bien tren con du 1 dau phay
            //can xoa day phay do
            $field_list = trim($field_list, ',');
            $value_list = trim($value_list, ',');

            $sql = 'insert into '.$table. '('.$field_list.') values ('.$value_list.')';

            return mysqli_query($this->__conn, $sql);
        }

        function update($table, $data, $where){
            //ket noi
            $this->connect();
            $sql = '';

            //lap qua data
            foreach($data as $key=> $value){
                $sql .= "$key = '".mysqli_escape_string($this->__conn,$value)."',";
            }

            //xoa dau , 
            $sql = trim($sql, ',');
            $sql = 'update '.$table. ' set '. $sql .' where '.$where;

            return mysqli_query($this->__conn, $sql);
        }

        function remove($table, $where){
            $this->connect();

            $sql = "delete from $table where $where";
            return mysqli_query($this->__conn, $sql);
        }

        function get_list($sql){
            $this->connect();

            $result = mysqli_query($this->__conn, $sql);

            if(!$result){
                die('cau truy van sai');
            }

            $return = array();

            //lap qua ket qua de dua vao mang
            while($row = mysqli_fetch_assoc($result)){
                $return[] = $row;
            }

            //xao ket qua khoi bo nho
            mysqli_free_result($result);

            return $return;
        }

        function get_row($sql){
            $this->connect();

            $result = mysqli_query($this->__conn, $sql);

            if(!$result){
                die('cau truy van bi sai');
            }

            $row = mysqli_fetch_assoc($result);

            //xoa result  khoi bo nho
            mysqli_free_result($result);

            if($row){
                return $row;
            }

            return false;
        }

    }
?>