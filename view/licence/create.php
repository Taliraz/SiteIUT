<html> 
    <body>
      <form method="post" action="admin.php?controller=Licence&action=created">
        <fieldset>
          <legend>Licence :</legend>
          <p>
            <label for="nomLicence_id"> Nom </label>
            <input type="text" id="nomLicence_id" name="nomLicence">
          </p>

          <p>
              <label for="idIUT_id">IUT</label> 
              <select name="idIUT" size="1" id="idIUT_id">
                <?php
                require_once File::build_path(array("model","ModelIUT.php"));
                $liste=ModelIUT::getAllIUTs();
                foreach($liste as $valeur){
                  echo '<option value="'.$valeur->getIdIUT().'">'.$valeur->getNomIUT().'</option>'."\n";
                }
                ?>
              </select>
          </p>

          <p>
            <label for="nomResponsable_id"> Nom du responsable </label>
            <input type="text" id="nomResponsable_id" name="nomResponsable">
          </p>

          <p>
            <label for="prenomResponsable_id">Prenom du responsable </label>
            <input type="text" id="prenomResponsable_id" name="prenomResponsable">
          </p>

          <p>
            <label for="mailResponsable_id"> Mail du responsable </label>
            <input type="email" id="mailResponsable_id" name="mailResponsable">
          </p>

          <p>
            <label for="siteLicence_id">Site web </label> :
            <br>
            <textarea name="siteLicence" id="siteLicence_id" required></textarea>
          </p>
          <p>
            <input type="submit" value="Envoyer" />
          </p>

          <p>
              <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
          </p>

        </fieldset> 
      </form>
    </body>
</html>