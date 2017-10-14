<?php

    class MySql {

        private $sql;

        function __construct($sql) {
            $this->sql=$sql;
        }

        //获取数据
        function _get(){
            $mysqli = new mysqli('localhost','root','970721','test');
            $result = $mysqli->query($this->sql);
            while(!!$data = $result->fetch_row()){
                $username[]=$data[1];
                $password[]=$data[2];
                $email[]=$data[3];
            }
            for($i=0;$i<count($username);$i++){
                return $data = array($username,$password,$email);
            }
        }

        //发送数据
        function _set(){
            $mysqli = new mysqli('localhost','root','970721','test');
            echo $mysqli->query($this->sql);
        }
    }