<?php

    require "Database.class.php";
    if(isset($_POST["id"])){
        Database::removeProblemById((int)$_POST["id"]);
        header("Location: problem_list.php");

    }else{
        print("de POST-it cand POST-esti?");
    }



?>