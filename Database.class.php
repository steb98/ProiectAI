<?php
require "Anunturi.class.php";
require "Book.class.php";
require "User.class.php";
require "Borrow.class.php";

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
    
    public static function getBorrows(){
        $lisatBorrows = [];
        $sql = "SELECT * from borrows";
        $conn = self::getConn();
        foreach ($conn->query($sql) as $row) {
            $listaBorrows[] = new Borrow($row);
        }
        return $listaBorrows;
    }
    
    public static function getBorrowsByIdUser($id_user){
        $listaBorrows = [];
        $sql = "SELECT * from borrows where id_user = ".$id_user;
        $conn = self::getConn();
        foreach ($conn->query($sql) as $row) {
            $listaBorrows[] = new Borrow($row);
        }
        return $listaBorrows;
    }

    public static function getUserById($id){
        $user;
        $sql = "SELECT * from users where id = ".$id;
        $conn = self::getConn();
        return new User($conn->query($sql)->fetch());
    }


}
