<html> 
    <body>

      <form class="updateFormulaire" method="post" action="admin.php?controller=IUT&action=updated&idIUT=<?php echo $v->getIdIUT(); ?>">

        <fieldset>
          <legend>IUT :</legend>
          <p>
           <label for="nomIUT_id">Nom de l'IUT</label> :

            <?php echo '<input type="text" value="'.$v->getNomIUT().'" id="nomIUT_id" name="nomIUT">' ?>
          </p>
          <p>
            <label for="adresseIUT_id">Adresse </label> :
            <br>
            <?php echo '<textarea name="adresseIUT" id="adresseIUT_id" required>'.$v->getAdresseIUT().'</textarea>'?>
          </p>

          <p>
            <label for="siteIUT_id">Site </label> :
            <br>
            <?php echo '<textarea name="siteIUT" id="siteIUT_id" required>'.$v->getSiteIUT().'</textarea>'?>
          </p>

          <p>
            <label for="telephoneIUT_id"> Telephone </label>

            <?php echo '<input type="text" value="'.$v->getTelephoneIUT().'" id="telephoneIUT_id" name="telephoneIUT">'?>

          </p>
          <p>
              <label for="idVille_id">Ville</label> 
              <select name="idVille" size="1" id="idVille_id">
                <?php
                require_once File::build_path(array("model","ModelVille.php"));
                //echo '<option value="'.$v->getId().'">'.$v->getNom().' ('.$v->getCodePostal().')</option>';
                $liste=ModelVille::getAllVilles();
                foreach($liste as $valeur){
                  echo '<option value="'.$valeur->getId().'">'.$valeur->getNom().' ('.$valeur->getCodePostal().')</option>';
                }
                ?>
              </select>
          </p>

          <p>
            <label for="mailSecretariatIUT_id">email secrétariat </label> :
            <br>

            <?php echo '<textarea name="mailSecretariatIUT" id="mailSecretariatIUT_id">'.$v->getMailSecretariatIUT().'</textarea>'?>

          </p>

          <p>
            <input id="bouton-envoyer" type="submit" value="Envoyer" />
          </p>

          <p>
              <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
          </p>

        </fieldset> 
      </form>
    </body>
</html>