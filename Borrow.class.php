<?php 

    class Borrow{
        private $id;
        private $id_book;
        private $id_user;
        private $timestamp;



        function __construct($row){
            $this->id = $row['id'];
            $this->id_book = $row['id_book'];
            $this->id_user = $row['id_user'];
            $this->timestamp = $row['timestamp'];
        }

        public function getId(){
            return $this->id;
        }
        public function getIdBook(){
            return $this->id_book;
        }
        public function getIdUser(){
            return $this->id_user;
        }
        public function getTimestamp(){
            return $this->timestamp;
        }

    }






?>