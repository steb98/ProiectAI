<?php
class User{
        private $id;
        private $username;
        private $password;
        private $created_at;



        function __construct($row){
            $this->id = $row['id'];
            $this->username = $row['username'];
            $this->password = $row['password'];
            $this->timestamp = $row['created_at'];
        }

        public function getId(){
            return $this->id;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getCreated_at(){
            return $this->created_at;
        }

    }
?>
