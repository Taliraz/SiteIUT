<html> 
    <body>
      <form class="updateFormulaire" method="post" action="admin.php?action=updated&controller=temoignage&idTemoignage=<?php echo $v->getIdTemoignage() ?>" enctype="multipart/form-data">
        <fieldset>
          <legend>Temoignages :</legend>
          <p>
            <label for="titreTemoignage_id"> Titre </label>
            <?php echo '<input type="text" value="'.$v->getTitreTemoignage().'" id="titreTemoignage_id" name="titreTemoignage"> '?>
          </p>
          <p>
            <label for="contenuTemoignage_id">contenu</label> :
            <br>
            <?php echo'<textarea name="contenuTemoignage" id="contenuTemoignage" required>'.$v->getContenuTemoignage().'</textarea>'?>
          </p>

          <p>
            <label for="anneeEtude_id">Année d'étude</label> :
            <select name="anneeEtude" required>
              <?php
                $year=$v->getAnneeEtude();
                for($i=1940; $i<=intval(date("Y")); $i++) {
                  if($i==$year)echo '<option selected value="'.$i.'">'.$i.'</option>';
                  else echo '<option value="'.$i.'">'.$i.'</option>';
                }
              ?>
            </select>
          </p>

          <p>
            <label for="nomEtudiant_id"> Nom </label>
            <?php echo '<input type="text" value="'.$v->getNomEtudiant().'" id="nomEtudiant_id" name="nomEtudiant">'?>
          </p>

          <p>
            <label for="prenomEtudiant_id"> Prénom </label>
             <?php echo '<input type="text" value="'.$v->getPrenomEtudiant().'" id="prenomEtudiant_id" name="prenomEtudiant">'?>
          </p>
            
            <p>
                <label for="photo_id">Photo témoignage</label> :
                <input type="file" name="photo"  required/>
            </p>

            <p>
              <label for="IUT_id">IUT</label> 
              <select name="idIUT" size="1" id="IUT_id">
                <?php
                require_once File::build_path(array("model","ModelIUT.php"));
                $liste=ModelIUT::getAllIUTs();
                $iut=ModelIUT::getIUTById($v->getIdIUT());
                foreach($liste as $valeur){
                  if($valeur==$iut) echo '<option selected value="'.$valeur->getIdIUT().'">'.$valeur->getNomIUT().'</option>';
                  else echo '<option value="'.$valeur->getIdIUT().'">'.$valeur->getNomIUT().'</option>';
                }
                ?>
              </select>
          </p>

          <p>
            <label for="accepte_id">Accepté</label> :
            <select name="accepte" id="accepte_id" required>
              <?php
                if($v->estAccepte()) echo '<option value="1">Accepte </option>
                                          <option value="0">En attente de validation </option>';
                else echo '<option value="0">En attente de validation </option>
                          <option value="1">Accepte </option>';
              ?>
            </select>
          </p>

          <p>
            <input id="bouton-envoyer" type="submit" value="Envoyer">
          </p>

          <p>
              <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
          </p>

        </fieldset> 
      </form>
    </body>
</html>