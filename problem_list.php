<?php
    require "header.php";
    require "Database.class.php";
    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(isset($_SESSION["loggedin_role"]) && $_SESSION["loggedin_role"] != "admin"){
        $err = "<center><p>Trebuie sa fiti admin pentru a vedea lista de probleme</p></center>";
        $err = $err . '<p>Go <a href="index.php">home</a></p>';
        print($err);
        require "footer.php";
        die();
    }

    $problems = (new Database)->getProblems();
    $table = '<form method="post" action="delete_problem.php">';
    $table = $table . '<table class = "lista"> <thead> <tr>';
    $table = $table . '<th>User</th>';
    $table = $table . '<th>Nume</th>';
    $table = $table . '<th>Prenume</th>';
    $table = $table . '<th>Email</th>';
    $table = $table . '<th>Categorie</th>';
    $table = $table . '<th>Descriere</th>';
    $table = $table . '<th>Timestamp</th>';
    if(isset($_SESSION["loggedin_role"])){
		if($_SESSION["loggedin_role"] == "admin"){
			$table = $table . '<th>Sterge</th>';
		}
    }
    $table = $table . '</tr></thead>';
    $table = $table . '<tbody>';
    foreach ($problems as $problem) {
        $table = $table . '</tr>';
        $table = $table . '<td>' . (Database::getUserById((int)$problem->getIdUser()))->getUsername() . '</td>';
        $table = $table . '<td>' . $problem->getNume() . '</td>';
        $table = $table . '<td>' . $problem->getPrenume() . '</td>';
        $table = $table . '<td>' . $problem->getEmail() . '</td>';
        $table = $table . '<td>' . $problem->getCategory() . '</td>';
        $table = $table . '<td>' . $problem->getDetails() . '</td>';
        $table = $table . '<td>' . $problem->getTimestamp() . '</td>';
        $table = $table . '<td>' . '<button type="submit" name="id" value="'.$problem->getId().'">Sterge</button>'. '</td>';
        $table = $table . '</tr>';
    }
    $table = $table . '</tbody>';
	$table = $table . '</table>';
	$table = $table . '</form>';
    print($table);

?>
