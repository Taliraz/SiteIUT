<html> 
    <body>
      <form method="post" action="admin.php?action=created&controller=temoignage" enctype="multipart/form-data">
        <fieldset>
          <legend>Temoignages :</legend>
          <p>
            <label for="titreTemoignage_id"> Titre </label>
            <input type="text" id="titreTemoignage_id" name="titreTemoignage">
          </p>
          <p>
            <label for="contenuTemoignage_id">contenu</label> :
            <br>
            <textarea name="contenuTemoignage" id="contenuTemoignage" required></textarea>
          </p>

          <p>
            <label for="anneeEtude_id">Date de Publication</label> :
            <input type="date" placeholder="Ex : 20/10/2018" name="anneeEtude" id="anneeEtude_id" required/>
          </p>

          <p>
            <label for="theme_id">Theme</label> :
            <select name="theme" id="theme_id" required>
              <option value="theme1">Theme 1 </option>
              <option value="theme2">Theme 2 </option>
            </select>
          </p>

          <p>
            <label for="nomEtudiant_id"> Nom </label>
            <input type="text" id="nomEtudiant_id" name="nomEtudiant">
          </p>

          <p>
            <label for="prenomEtudiant_id"> Prénom </label>
            <input type="text" id="prenomEtudiant_id" name="prenomEtudiant">
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
                foreach($liste as $valeur){
                  echo '<option value="'.$valeur->getIdIUT().'">'.$valeur->getNomIUT().'</option>';
                }
                ?>
              </select>
          </p>

          <p>
            <input type="submit" value="Envoyer">
          </p>

          <p>
              <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
          </p>

        </fieldset> 
      </form>
    </body>
</html>