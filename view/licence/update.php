<html> 
    <body>
      <form class="updateFormulaire" method="post" action="admin.php?controller=Licence&action=updated&idLicence=<?php echo $v->getIdLicence();?>">
        <fieldset>
          <legend>Licence :</legend>
          <p>
            <label for="nomLicence_id"> Nom </label>
            <?php echo '<input type="text" id="nomLicence_id" name="nomLicence" value="'.$v->getNomLicence().'">' ?>
          </p>

          <p>
              <label for="idIUT_id">IUT</label> 
              <select name="idIUT" size="1" id="idIUT_id">
                <?php
                require_once File::build_path(array("model","ModelIUT.php"));
                $IUT=ModelIUT::getIUTById($v->getIdIUT());
                echo '<option value="'.$IUT->getIdIUT().'" selected>'.$IUT->getNomIUT().'</option>'."\n";
                $liste=ModelIUT::getAllIUTs();
                foreach($liste as $valeur){
                  echo '<option value="'.$valeur->getIdIUT().'">'.$valeur->getNomIUT().'</option>'."\n";
                }
                ?>
              </select>
          </p>

          <p>
            <label for="nomResponsable_id"> Nom du responsable </label>
            <?php echo '<input type="text" id="nomResponsable_id" name="nomResponsable" value="'.$v->getNomResponsable().'">'; ?>
          </p>

          <p>
            <label for="prenomResponsable_id">Prenom du responsable </label>
            <?php echo '<input type="text" id="prenomResponsable_id" name="prenomResponsable" value="'.$v->getPrenomResponsable().'">'; ?>
          </p>

          <p>
            <label for="mailResponsable_id"> Mail du responsable </label>
            <?php echo '<input type="email" id="mailResponsable_id" name="mailResponsable" value="'.$v->getMailResponsable().'">'; ?>
          </p>

          <p>
            <label for="siteLicence_id">Site web </label> :
            <br>
            <?php echo '<textarea name="siteLicence" id="siteLicence_id" required>'.$v->getSiteLicence().'</textarea>'; ?>
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