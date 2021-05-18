<?php

class Anunt{
    private $id;
    private $anunt;
    private $timestamp;

    function __construct($row){
        $this->id = $row['id'];
        $this->anunt = $row['anunt'];
        $this->timestamp = $row['timestamp'];
    }

    public function getId(){
        return $this->id;
    }
    public function getAnunt(){
        return $this->anunt;
    }
    public function getTimestamp(){
        return $this->timestamp;
    }
}

?>