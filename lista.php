<!DOCTYPE html>
<html>

<?php

  include "header.php";

  
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
            <img alt src="images/icons/informatica.svg" class="rowImage" height="75px" role="presentation">
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Informatica</span>
            </div>

        </div>
      </div>

      <div class="inlineTile" style="width:10%;">
        <div data-value="Mecanica" class="row">

          <div class="sectiuneRow">
            <img alt src="images/icons/mecanica.svg" class="rowImage" height="75px" role="presentation">
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Mecanica</span>
            </div>

        </div>
      </div>

      <div class="inlineTile" style="width:10%;">
        <div data-value="Chimie" class="row">

          <div class="sectiuneRow">
            <img alt src="images/icons/chimie.svg" class="rowImage" height="75px" role="presentation">
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Chimie</span>
            </div>

        </div>
      </div>

       <div class="inlineTile" style="width:10%;">
        <div data-value="Automotive" class="row">

          <div class="sectiuneRow">
            <img alt src="images/icons/auto.svg" class="rowImage" height="75px" role="presentation">
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Automotive</span>
            </div>

        </div>
      </div>

       <div class="inlineTile" style="width:10%;">
        <div data-value="Constructii" class="row">

          <div class="sectiuneRow">
            <img alt src="images/icons/constructii.svg" class="rowImage" height="75px" role="presentation">
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Constructii</span>
            </div>

        </div>
      </div>

       <div class="inlineTile" style="width:10%;">
        <div data-value="Electrica" class="row">

          <div class="sectiuneRow">
            <img alt src="images/icons/electrica.svg" class="rowImage" height="75px" role="presentation">
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Electronica</span>
            </div>

        </div>
      </div>

       <div class="inlineTile" style="width:10%;">
        <div data-value="Arhitectura" class="row">

          <div class="sectiuneRow">
            <img alt src="images/icons/arhitectura.svg" class="rowImage" height="75px" role="presentation">
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Arhitectura</span>
            </div>

        </div>
      </div>

      <div class="inlineTile" style="width:10%;">
        <div data-value="Hidrotehnica" class="row">

          <div class="sectiuneRow">
            <img alt src="images/icons/hidro.svg" class="rowImage" height="75px" role="presentation">
          </div>

            <div class="sectiuneTitlu">
              <span class="sectiuneTitluS">Hidrotehnica</span>
            </div>

        </div>
      </div>
      




  </div>
  </br>



<form>
    <table class = "lista">
<thead>
  <tr>
    <th>Titlu</th>
    <th>Autor</th>
    <th>Publicatie</th>
    <th>Disponibile</th>
    <th>Imprumuta</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Amintiri din copilarie</td>
    <td>Ion Creanga</td>
    <td>Gramar</td>
    <td>3</td>
    <td><input class="button" type="submit" value="Imprumuta"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</tbody>
</table>
</form>
    </div>
    <?php include "footer.php" ?>
  </body>
</html>