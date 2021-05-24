<?php
    class Problem{
        private $id;
        private $id_user;
        private $nume;
        private $prenume;
        private $email;
        private $category;
        private $details;
        private $timestamp;


        function __construct($row){
            $this->id = $row["id"];
            $this->id_user = $row["id_user"];
            $this->nume = $row["nume"];
            $this->prenume = $row["prenume"];
            $this->email = $row["email"];
            $this->category = $row["category"];
            $this->details = $row["details"];
            $this->timestamp = $row["timestamp"];
        }
    public function getId(){
        return $this->id;
    }
    public function getNume(){
        return $this->nume;
    }
    public function getPrenume(){
        return $this->prenume;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getDetails(){
        return $this->details;
    }
    public function getTimestamp(){
        return $this->timestamp;
    }
}


?>
