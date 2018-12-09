<html> 
    <body>
      <form method="post" action="admin.php?controller=IUT&action=created">
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
          <p>
              <label for="idVille_id">Ville</label> 
              <select name="idVille" size="1" id="idVille_id">
                <?php
                require_once File::build_path(array("model","ModelVille.php"));
                $liste=ModelVille::getAllVilles();
                foreach($liste as $valeur){
                  echo '<option value="'.$valeur->getId().'">'.$valeur->getNom().' ('.$valeur->getDepartement().')</option>';
                }
                ?>
              </select>
          </p>

          <p>
            <label for="mailSecretariatIUT_id">email secrétariat </label> :
            <br>
            <textarea name="mailSecretariatIUT" id="mailSecretariatIUT_id" required></textarea>
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