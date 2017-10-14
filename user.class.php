<?php

    abstract class User {

        protected $username;
        protected $password;
        protected $notPassword;
        protected $email;

        abstract function _query();
    }