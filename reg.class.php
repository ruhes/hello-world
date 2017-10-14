<?php

    class Reg extends User {

        function __construct($username,$password,$notPassword,$email) {
            $this->username=$username;
            $this->password=$password;
            $this->notPassword=$notPassword;
            $this->email=$email;
            $this->_query();
        }

        function _query(){
            echo '1';
            $mysql = new MySql("INSERT INTO user (username,password,email) 
                      VALUE ('$this->username','$this->password','$this->email')");
            $mysql->_set();
        }
    }