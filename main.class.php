<?php

    class Main {

        private $index;

        function __construct($url) {
            $this->index=$url;
        }

        function _run(){
            $this->_ui();
            $this->_get();
        }

        private function _ui() {
            if(!isset($this->index)){
                include 'start.inc.php';
            } else {
                include $this->index.'.inc.php';
            }
        }

        private function _get() {
            switch ($_POST['submit']){
                case '登陆':
                    new Login($_POST['username'],$_POST['password']);
                    break;
                case '注册':
                    new Reg($_POST['username'],$_POST['password'],$_POST['notPassword'],$_POST['email']);
                    break;
            }
        }


    }