<!DOCTYPE html>
<html>
<?php

	include "header.php";
	include "Database.class.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	if(isset($_POST["nume"])){
		if(isset($_SESSION["loggedin_user"])){
			$id_user = $_SESSION["loggedin_user"];
		}else{
			$id_user = null;
		}
		$_POST["id_user"] = $id_user;
		//$_POST["id"] = "";
		//$_POST["timestamp"] = "";
		
		Database::insertProblem($_POST);
	}


?>
    <div class="Contact">
      <form method="post">
       
        <span id="FormNumeInputS" class="numeS">
          <label for="nume"><strong>Nume</strong></label>
        <input type="text" name="nume" id="FormNumeInput" value aria-label="Nume" aria-required="true" aria-invalid="false">
        
        </span>

        <span id="FormPrenumeInputS" class="PrenumeS">
          <label for="prenume"><strong>Prenume</strong></label>
          <input type="text" name="prenume" id="FormPrenumeInput" value aria-label="Prenume" aria-required="true" aria-invalid="false">
          
          </span>

        <span id="FormMailInputS" class="MailS">
          <label for="email"><strong> E-mail</strong></label>
          <input type="email" name="email" id="FormMailInput" value aria-label="Mail" aria-required="true" aria-invalid="false">
          
          </span>
          </br>
          </br>
        <span id="FormTipProblemaS" class="TipProblemaS">
          <label for="category"><strong> Tipul cererii</strong></label>
          <select name="category" id="TipProblemaSelect">
            <optgroup label="Lipsa">
            <option value = "LipsaCarte">Lipsa carte imprumutata</option>
            <option value = "LipsaCard">Lipsa card de acces</option>
            </optgroup>

            <optgroup label="Intarzieri">
              <option value="IntarziereTermen">Intarziere termen de predare</option>
              <option value="IntarziereLichidare">Intarziere termen de lichidare</option>
            </optgroup>

            <optgroup label="Indisponibilitate">
              <option value="LipsaAutor">Autor indisponibil</option>
              <option value="LipsaCarte">Carte indisponibila</option>
              <option value="LipsaArie">Arie indisponibila</option>

            <optgroup label="Altele">
                <option value="Altele">Altele</option>
            </br>
          </select>
          
        </span>
        </br>
        <br>
        <span id="FormTextInputS" class="TextS" role="textbox" contenteditable>
          <!--role="textbox" contenteditable -->
          <!-- <textarea rows="5" cols="40"></textarea> -->
          <label for="FormTextInput"><strong> Problema</strong></label>
           
          <!-- <input type="text" name="FormTextInput" id="FormTextInput" value aria-label="problema" aria-required="true" aria-invalid="false"> -->
          <textarea name="details" rows="5" cols="40"></textarea>
        </span>
         </br>
          <input type="submit">







      </form>

     <i class="fas fa-dragon"></i>




    </div>


    </div>
    <?php include "footer.php" ?>
  </body>
</html>