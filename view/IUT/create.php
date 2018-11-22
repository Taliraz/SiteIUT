<html> 
    <body>
      <form method="post" action="index.php?action=created">
        <fieldset>
          <legend>IUT :</legend>
          <p>
            <label for="nomIUT_id"> Nom </label>
            <input type="text" id="nomIUT_id" name="nomIUT">
          </p>
          <p>
            <label for="adresseIUT_id">Adresse </label> :
            <br>
            <textarea name="adresseIUT" id="adresseIUT_id" required></textarea>
          </p>

          <p>
            <label for="siteIUT_id">Site </label> :
            <br>
            <textarea name="siteIUT" id="siteIUT_id" required></textarea>
          </p>

          <p>
            <label for="telephoneIUT_id"> Telephone </label>
            <input type="text" id="telephoneIUT_id" name="telephoneIUT">
          </p>
          <?php
                $liste=ModelVille::getAllVilles();
                var_dump($liste);
                ?>

          <p>
              <label for="idVille_id">Ville</label> 
              <select name="idVille" size="1" id="idVille_id">
                <?php
                $liste=ModelVille::getAllVilles();
                var_dump($liste);
                foreach($liste as $valeur){
                  echo '<option value="'.$valeur->getIdVille().'">'.$valeur->getNomVille().'</option>';
                }
                ?>
              </select>
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