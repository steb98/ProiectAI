<?php
require "Anunturi.class.php";
require "Book.class.php";
require "User.class.php";
require "Borrow.class.php";
require "Problem.class.php";

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
            self::$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
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

    public static function insertProblem($problem){
 

        $sql = "INSERT INTO problems(nume,prenume,email,category,details,id_user) values(?,?,?,?,?,?)";
        $conn = self::getConn();
        $stmt = $conn -> prepare($sql);
        $data=[];
        foreach($problem as $p){
            $data[]=$p;
        }
        try{
            $code = ($stmt->execute($data));
            print("<center><p>Formular trimis cu succes</p></center>");
            
        }catch(Exception $e){
            print("<center><p>".$e->getMessage()."</p></center>");
            print('<br><center><p>Go <a href="index.php">home</a></p></center>');
            die();
        }
        
    }

    public static function getProblems(){
        $listaProblems = [];
        $sql = "SELECT * from problems";
        $conn = self::getConn();
        foreach ($conn->query($sql) as $row) {
            $listaProblems[] = new Problem($row);
        }
        return $listaProblems;
    }

    public static function removeProblemById($id){
        $sql = "DELETE from problems where id = ?";
        $conn = self::getConn();
        $stmt = $conn -> prepare($sql);
        $stmt->execute([$id]);
    }


}
