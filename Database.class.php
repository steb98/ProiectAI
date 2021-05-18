<?php
require "Anunturi.class.php";

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
}