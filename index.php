<!DOCTYPE html>
<html>

<?php
  session_start();
	require "header.php";
	require "Database.class.php";

	$anunturi = (new Database)->getAnunturi();

	
?>

    <div class="main-container">
      <div class="main-content">
    <h2>Misiunea Bibliotecii</h2>
    <p>&emsp; Bibliotecile universitare sunt biblioteci de drept public sau de drept privat, care au ca utilizatori principali studenţii, cadrele didactice şi cercetătorii din instituţiile de învăţământ superior. Accesul in bibliotecile universitare este deschis tuturor cetăţenilor, care vor putea să utilizeze întregul patrimoniu documentar, indiferent de formatul în care acesta a fost publicat.</p>
    <h2>Publicatii disponibile</h2>
    <ul class="pub">
      <li>Manuale, indrumare de laborator</li>
      <li>Carti romanesti si straine, in format tiparit sau on-line</li>
      <li>Reviste straine si romanesti</li>
      <li>Materiale de referinta</li>
      <li>Documente tehnice speciale</li>
    </ul>
    <h2>Orar</h2>
    <p>Luni-Vineri : 8<sup>30</sup> - 20<sup>00</sup></p>
      </div>
    <div class="main-news">
      <ul style="padding:0";">
      <h2>Anunturi</h2>
      
      <?php
			foreach($anunturi as $anunt){
				$text = "<li>" . $anunt->getAnunt() . "<br>posted: " . $anunt->getTimestamp() . "</li>";
				print($text);
			}
       ?>

	   <?php
			if(isset($_SESSION["loggedin_user"])){
				if($_SESSION["loggedin_role"] === "admin"){
					$html = '<form action = "http://localhost/ProiectAI/add_anunt.php">';
					$html = $html . '<button type="submit">Adauga anunt</button></form>';
					print($html);
				}
					
			}
	   ?>
      
      </ul>
    </div>
    </div>

    <ul class="image-container">
        <li class="img-item" >
            <img src="images/index_1.jpg">
        </li>
        <li class="img-item">
            <img src="images/index_2.jpg">
        </li>
        <li class="img-item">
            <img src="images/index_3.jpg">
        </li>
        <li class="img-item">
            <img src="images/index_4.jpg">
        </li>
        <li class="img-item">
            <img src="images/index_1.jpg">
        </li>

        <li class="img-item">
            <img src="images/index_1.jpg">
        </li>
        
    </ul>

    
    <?php include "footer.php" ?>
  </body>

</html>
<script src="script.js"></script>