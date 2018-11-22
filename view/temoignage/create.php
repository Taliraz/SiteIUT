<html> 
    <body>
      <form method="post" action="index.php?action=created">
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
            <label for="datePublication_id">Date de Publication</label> :
            <input type="date" placeholder="Ex : 20/10/2018" name="datePublication" id="datePublication_id" required/>
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
            <label for="prenomEtudiant_id"> Titre </label>
            <input type="text" id="prenomEtudiant_id" name="prenomEtudiant">
          </p>

          <p>
              <label for="IUT_id">IUT</label> 
              <select name="idIUT" size="1" id="IUT_id">
                <?php
                /*$liste=ModelIUT::getAllIUTs();
                var_dump($liste);
                foreach($liste as $valeur){
                  echo '<option value="'.$valeur->getIdIUT().'">'.$valeur->getNomIUT().'</option>';
                }*/
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