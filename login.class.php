<?php

    class Login extends User {

    function __construct($username,$password) {
        $this->username=$username;
        $this->password=$password;
        $this->_query();
    }

    function _query(){
        $mysql = new MySql("SELECT * FROM user");
        $data = $mysql->_get();
        $username[] = $data[0];
        $password[] = $data[1];
        $email[] = $data[2];
        for($i=0;$i<count($username[0]);$i++){
            if($username[0][$i]==$this->username && $password[0][$i]==$this->password){
                $login = true;
                break;
            } else {
                $login = false;
            }
        }
        if($login){
            echo '登陆成功';
        } else {
            echo '登陆失败';
        }
    }
}