<!DOCTYPE html>
<html>
<?php

include "header.php";


?>
    <div class="Contact">
      <form method="post enctype="multipart/formdata"">
       
        <span id="FormNumeInputS" class="numeS">
          <label for="FormNumeInput"><strong>Nume</strong></label>
        <input type="text" name="FormNumeInput" id="FormNumeInput" value aria-label="Nume" aria-required="true" aria-invalid="false">
        
        </span>

        <span id="FormPrenumeInputS" class="PrenumeS">
          <label for="FormPrenumeInput"><strong>Prenume</strong></label>
          <input type="text" name="FormPrenumeInput" id="FormPrenumeInput" value aria-label="Prenume" aria-required="true" aria-invalid="false">
          
          </span>

        <span id="FormMailInputS" class="MailS">
          <label for="FormMailInput"><strong> e-mail</strong></label>
          <input type="email" name="FormMailInput" id="FormMailInput" value aria-label="Mail" aria-required="true" aria-invalid="false">
          
          </span>
          </br>
          </br>
        <span id="FormTipProblemaS" class="TipProblemaS">
          <label for="TipProblemaSelect"><strong> Tipul cererii</strong></label>
          <select name="TipProblemaSelect" id="TipProblemaSelect">
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
        
        <span id="FormTextInputS" class="TextS" role="textbox" contenteditable>
          <!--role="textbox" contenteditable -->
          <!-- <textarea rows="5" cols="40"></textarea> -->
          <label for="FormTextInput"><strong> Problema</strong></label>
           </br>
          <!-- <input type="text" name="FormTextInput" id="FormTextInput" value aria-label="problema" aria-required="true" aria-invalid="false"> -->
          <textarea rows="5" cols="40"></textarea>
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