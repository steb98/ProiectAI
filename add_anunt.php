<!DOCTYPE html>
<html>

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION["loggedin_user"])){
        header("Location: index.php");
        die();
    }
    if($_SESSION["loggedin_role"] != "admin"){
        header("Location: index.php");
        die();
    }

	include "header.php";
	require "Database.class.php";
    
?>

<?php
    if( isset($_POST["anunt"]) ){
        $anunt = $_POST["anunt"];
        $sql = 'INSERT INTO anunturi(anunt) VALUES (:anunt)';
        $pdo = (new Database())->getConn();
        $pdo->prepare($sql)->execute(["anunt"=>$anunt]);
    }

?>

<form class="" method="POST">
  <h2>Adauga Anunt</h2>
  <label for="anunt">Anunt:</label>
  <textarea name = "anunt" rows="5" cols="40" id="anunt"></textarea></br>

  <input class="button" type="submit">
</form>



</html>
<?php include "footer.php" ?>