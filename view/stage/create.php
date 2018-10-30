<html> 
    <body>
      <form method="post" action="index.php?action=created&controller=stage">
        <fieldset>
          <legend>Stage :</legend>
          <p>
            <label for="intituleStage_id">Intitule</label> :
            <input type="text" placeholder="Ex : Developpement logiciel" name="intituleStage" id="intituleStage_id" required/>
          </p>

          <p>
            <label for="dateDebStage_id">Date de Début</label> :
            <input type="date" placeholder="Ex : 20/10/2018" name="dateDebStage" id="dateDebStage_id" required/>
          </p>

          <p>
            <label for="dateFinStage_id">Date de Fin</label> :
            <input type="date" placeholder="Ex : 20/10/2018" name="dateFinStage" id="dateFinStage_id" required/>
          </p>

          <p>
            <label for="gratifie_id">Stage Gratifie</label> :
            <select name="remunere" id="remunere_id" required>
              <option value="true">Oui </option>
              <option value="false">Non </option>
            </select>
          </p>

          <p>
             <label for="descriptionStage_id">Description du Stage</label><br />
             <textarea name="descriptionStage" id="descriptionStage_id"></textarea>
         </p>

         <p>
            <label for="IUT_id">IUT</label> 
            <select name="idIUT" size="1" id="IUT_id">
              <?php 
                $liste = ModelStage::getAllStages();
                foreach ($liste as $valeur){
                  echo '<option value="'.$valeur->getIdStage().'">'.$valeur->getIntituleStage().'</option>';
                } 
              ?>
          </select>
        </p>


          <p>
            <input type="submit" value="Envoyer" />
          </p>

        </fieldset> 
      </form>
    </body>
</html>