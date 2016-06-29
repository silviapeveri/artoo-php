<?php
    class User {
        // definition of a variable
        // php supports three kind of scopes: - public, -protected, -private
        private $username = 'default value';
        public $enabled = true;
        protected $test = 'Ciao';
        // definition of a function 
        // public function test ($name){
        //     $this -> username = $name;
        //     $this -> test2();
        //     var_dump($this -> username);
        // }
        // public function test2 (){
            
        // }
        public function getUsername(){
            return $this -> username;
        }
        public function setUsername($username){
            if (is_string($username))
                $this -> username = $username;
        }
    }