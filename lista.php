<!DOCTYPE html>
<html>

<?php

  require "header.php";
  //require "Book.class.php";
  require "Database.class.php";

  session_start();

  $carti = (new Database)->getBooks();

  
?>

  <div class="categoriiCarti" id="catCarti">
    <div class="spaceTitle" style="height:20px">
     
      <h3 class = "largeTitle" role="heading">
        Categorii carti 
      </h3>
    </div>

    <div class="tiles" role="grid">
      <div class="inlineTile" style="width:10%;">

        <div data-value="Informatica" class="row">

          <div class="sectiuneRow">
            <a href="/lista.php?category=Informatica"><img alt src="images/icons/informatica.svg" class="rowImage" height="75px" role="presentation"></a>
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Informatica</span>
            </div>

        </div>
      </div>

      <div class="inlineTile" style="width:10%;">
        <div data-value="Mecanica" class="row">

          <div class="sectiuneRow">
		  <a href="/lista.php?category=Mecanica"><img alt src="images/icons/mecanica.svg" class="rowImage" height="75px" role="presentation"></a>
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Mecanica</span>
            </div>

        </div>
      </div>

      <div class="inlineTile" style="width:10%;">
        <div data-value="Chimie" class="row">

          <div class="sectiuneRow">
		  <a href="/lista.php?category=Chimie"><img alt src="images/icons/chimie.svg" class="rowImage" height="75px" role="presentation"></a>
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Chimie</span>
            </div>

        </div>
      </div>

       <div class="inlineTile" style="width:10%;">
        <div data-value="Automotive" class="row">

          <div class="sectiuneRow">
		  <a href="/lista.php?category=Automotive"><img alt src="images/icons/auto.svg" class="rowImage" height="75px" role="presentation"></a>
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Automotive</span>
            </div>

        </div>
      </div>

       <div class="inlineTile" style="width:10%;">
        <div data-value="Constructii" class="row">

          <div class="sectiuneRow">
		  <a href="/lista.php?category=Constructii"><img alt src="images/icons/constructii.svg" class="rowImage" height="75px" role="presentation"></a>
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Constructii</span>
            </div>

        </div>
      </div>

       <div class="inlineTile" style="width:10%;">
        <div data-value="Electrica" class="row">

          <div class="sectiuneRow">
		  <a href="/lista.php?category=Electronica"><img alt src="images/icons/electrica.svg" class="rowImage" height="75px" role="presentation"></a>
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Electronica</span>
            </div>

        </div>
      </div>

       <div class="inlineTile" style="width:10%;">
        <div data-value="Arhitectura" class="row">

          <div class="sectiuneRow">
		  <a href="/lista.php?category=Arhitectura"><img alt src="images/icons/arhitectura.svg" class="rowImage" height="75px" role="presentation"></a>
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Arhitectura</span>
            </div>

        </div>
      </div>

      <div class="inlineTile" style="width:10%;">
        <div data-value="Hidrotehnica" class="row">

          <div class="sectiuneRow">
		  <a href="/lista.php?category=Hidrotehnica"><img alt src="images/icons/hidro.svg" class="rowImage" height="75px" role="presentation"></a>
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Hidrotehnica</span>
            </div>

        </div>
      </div>
      




  </div>
  </br>


<?php
	//inceput tabel
	$table = "<form>";

	$table =$table . '<table class = "lista"> <thead> <tr>';
	//generare head tabel
	$table = $table . '<th>Titlu</th>';
	$table = $table . '<th>Autor</th>';
	$table = $table . '<th>Publicatie</th>';
	$table = $table . '<th>Disponibilitate</th>';
	$table = $table . '<th>Categorie</th>';
	if(isset($_SESSION["loggedin_role"])){
		if($_SESSION["loggedin_role"] == "admin"){
			$table = $table . '<th>Imprumuta</th>';
		}
	}
	$table = $table . '</tr></thead>';
	//inceput body tabel
	$table = $table . '<tbody>';

	//generare linii tabel

	foreach($carti as $carte){
		if(isset($_GET["category"])){
			$category = $_GET["category"];
			if($carte->getCategory() == $category)
			{
				$table = $table . '<tr>';
				$table = $table . '<td>' . $carte->getTitle() . '</td>';
				$table = $table . '<td>' . $carte->getAuthor() . '</td>';
				$table = $table . '<td>' . $carte->getPublisher() . '</td>';
				$table = $table . '<td>' . $carte->getAvailability() . '</td>';
				$table = $table . '<td>' . $carte->getCategory() . '</td>';
				if(isset($_SESSION["loggedin_role"])){
					if($_SESSION["loggedin_role"] == "admin"){
						$id = $carte->getId();
						if($carte->getAvailability() != '0'){
							$table = $table . '<td><a href = /imprumuta.php?id='.$id.'>Imprumuta</a></td>';
						}else{
							$table = $table . '<td>Carte indisponibila</td>';
						}
							
			}
		}
		$table = $table . '</tr>';

			}
		}else{
			$table = $table . '<tr>';
			$table = $table . '<td>' . $carte->getTitle() . '</td>';
			$table = $table . '<td>' . $carte->getAuthor() . '</td>';
			$table = $table . '<td>' . $carte->getPublisher() . '</td>';
			$table = $table . '<td>' . $carte->getAvailability() . '</td>';
			$table = $table . '<td>' . $carte->getCategory() . '</td>';
			if(isset($_SESSION["loggedin_role"])){
				if($_SESSION["loggedin_role"] == "admin"){
					$id = $carte->getId();
					if($carte->getAvailability() != '0'){
						$table = $table . '<td><a href = /imprumuta.php?id='.$id.'>Imprumuta</a></td>';
					}else{
						$table = $table . '<td>Carte indisponibila</td>';
					}
				}
			}
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