<!DOCTYPE html>
<html>

<?php

	require "header.php";
	require "Database.class.php";
	
	$err = "";
	$table = "<form>";

	$table =$table . '<table class = "lista"> <thead> <tr>';
	//generare head tabel
	$table = $table . '<th>Titlu</th>';
	$table = $table . '<th>Id carte</th>';
	$table = $table . '<th>User</th>';
	$table = $table . '<th>Id User</th>';
	$table = $table . '<th>Timestamp</th>';
	$table = $table . '</tr></thead>';
	//inceput body tabel
	$table = $table . '<tbody>';
	session_start();
    if(!isset($_SESSION["loggedin_user"])){
        $err = "Trebuie sa fiti logati pentru a putea vedea cartile imprumutate";
    }else{
		if(isset($_SESSION["loggedin_role"]) && $_SESSION["loggedin_role"] == "admin"){
			//afiseaza toate imprumuturile
			$listaBorrows = Database::getBorrows();


		}
		if(isset($_SESSION["loggedin_role"]) && $_SESSION["loggedin_role"] == "student"){
			//afiseaza imprumuturile acestui user
			$user = Database::getUserById($_SESSION["loggedin_user"]);
			$listaBorrows = Database::getBorrowsByIdUser($user->getId());
			
		}
		//generare linii tabel
		foreach($listaBorrows as $imprumut){
			$table = $table . '<tr>';
			//Titlu carte
			$table = $table . '<td>' .Database::getBookById($imprumut->getIdBook())["title"]. '</td>';
			//id carte
			$table = $table . '<td>' . $imprumut->getIdBook() . '</td>';
			//Username
			$table = $table . '<td>' .Database::getUserById($imprumut->getIdUser())->getUsername(). '</td>';
			//id user
			$table = $table . '<td>' . $imprumut->getIdUser() . '</td>';
			//timestamp
			$table = $table . '<td>' . $imprumut->getTimestamp() . '</td>';

			$table = $table . '</tr>';
		}

	}

    $table = $table . '</tbody>';
	$table = $table . '</table>';
	$table = $table . '</form>';

print($table);

?>



</div>
    <?php include "footer.php" ?>
  </body>
</html>