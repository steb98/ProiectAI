<!DOCTYPE html>
<html>

<?php

	require "header.php";
    require "Database.class.php";
    $id = $_GET["id"];
    $carte = (new Database)->getBookById($id);
    var_dump($carte);
    session_start();
?>






<?php include "footer.php" ?>
  </body>

</html>
<script src="script.js"></script>