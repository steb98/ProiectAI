<?php
    require "Database.class.php";
    //iau id borrow
    //iau coloana corespunzatoare borrowului
    //iau idbook
    //fac update pe books cu +1
    //sterg borrow

    if(isset($_POST["id"])){
        $id_borrow = (int)$_POST["id"];
        $borrow = new Borrow(Database::getBorrowById($id_borrow));
        $id_book = $borrow->getIdBook();
        $book = new Book(Database::getBookById($id_book));
        $book -> setAvailability($book->getAvailability() + 1);
        Database::updateBook($book,$id_book);
        Database::removeBorrowById($id_borrow);
        header("Location: imprumuturi.php");

    }


?>