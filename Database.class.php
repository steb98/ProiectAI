<?php
require "Anunturi.class.php";
require "Book.class.php";

class Database
{
    private const dsn = 'mysql:host=localhost;dbname=proiectai_biblioteca';
    private const user = 'root';
    private const pass = '';
    private static $conn = null;

    public static function getConn()
    {

        if (is_null(self::$conn)) {
            self::$conn = new PDO(self::dsn,self::user,self::pass);
        }
        return self::$conn;
    }

    public static function getAnunturi(){
        $listAnunt = [];
        $sql = "SELECT * from anunturi ORDER BY timestamp DESC";
        $conn = self::getConn();
        foreach ($conn->query($sql) as $row) {
            $listaAnunt[] = new Anunt($row);
        }
        return $listaAnunt;

    }
    public static function getBooks(){
        $listCarti = [];
        $sql = "SELECT * from books";
        $conn = self::getConn();
        foreach ($conn->query($sql) as $row) {
            $listaCarti[] = new Book($row);
        }
        return $listaCarti;

    }
    public static function getBookById($id){
        $sql = "SELECT * from books where id = ". $id;
        $conn = self::getConn();
        return $conn->query($sql)->fetch();

    }
    
}