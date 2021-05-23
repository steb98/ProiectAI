<!DOCTYPE html>
<html>

<?php
    session_start();
    if(!isset($_SESSION["loggedin_user"])){
       header("Location: index.php");
       die();
    }
    if($_SESSION["loggedin_role"] != "admin"){
       header("Location: index.php");
       die();
    }

	require "header.php";
    require "Database.class.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $carte = (new Database)->getBookById($id);
        if($carte){
            $carte = new Book($carte);
            if($carte->getAvailability() == '0'){
                $err = "Nu este disponibila aceasta carte";
            }else{
                $conn = Database::getConn();
                $sql = "SELECT * FROM users";
                foreach ($conn->query($sql) as $row) {
                    $useri[] = new User($row);
                }
                $form = '<form class="login-form" method=POST>';
                $form = $form . '<select name="user">User';
                foreach($useri as $user){
                    $form = $form . '<option value = "'.$user->getId().'">'.$user->getUsername().'</option>';
                }
                $form = $form . '</select>';
                $form = $form . '<br>';
                $form = $form . '<input type="submit" value = "Imprumuta"></input>';
            }
                
        }
        

    }

    if(isset($_POST["user"])){
        if(isset($_GET["id"])){
            $user = $_POST["user"];
            $id = $_GET["id"];
            $carte = (new Database)->getBookById($id);
            $carte = new Book($carte);
            var_dump($carte);
            $conn = Database::getConn();
            $sql = "INSERT INTO borrows (id_book, id_user) VALUES (?, ?)";
            try{
                $conn->prepare($sql)->execute([$id,$user]);
                $err = "Imprumut realizat cu succes!";
                $sql = "UPDATE books SET availability = ? WHERE id=?";
                if( (int)$carte->getAvailability() <= 0){
                    throw new Exception('Cartea nu mai este disponibila');
                }
                $conn->prepare($sql)->execute([($carte->getAvailability()) - 1, $id]);
            }catch(Exception $e){
                $err = "Imprumutul nu a putut fi realizat." . $e->getMessage();
            }

        }
    }

   if(isset($err)) print($err);
   if(isset($form)) print($form);
?>






<?php include "footer.php" ?>
  </body>

</html>
<script src="script.js"></script>