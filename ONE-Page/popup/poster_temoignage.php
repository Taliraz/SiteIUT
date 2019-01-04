<div id="poster_tem">
    <p id="closePopupPost" onclick="closePopupPost()"><img src="ONE-Page/images/croix.png" alt="fermer"></p>
    <form id="poster_tem_form" method="post" action="admin.php?action=created&controller=temoignage" enctype="multipart/form-data">
          <legend>Poster un témoignage</legend>
          <p>
            <label for="p_titreTemoignage_id"> Titre : </label>
            <input type="text" id="p_titreTemoignage_id" name="p_titreTemoignage">
          </p>
          <p>
            <label for="p_contenuTemoignage_id">Contenu : </label>
            <br>
            <textarea name="p_contenuTemoignage" id="p_contenuTemoignage" required></textarea>
          </p>

          <p>
            <label for="p_anneeEtude_id">Année d'étude : </label> :
            <select name="p_anneeEtude" required>
              <?php for($i=1940; $i<=intval(date("Y")); $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
              } ?>
            </select>
          </p>

          <p>
            <label for="p_theme_id">Theme : </label> :
            <select name="p_theme" id="p_theme_id" required>
              <option value="theme1">Theme 1 </option>
              <option value="theme2">Theme 2 </option>
            </select>
          </p>

          <p>
            <label for="p_nomEtudiant_id"> Nom : </label>
            <input type="text" id="p_nomEtudiant_id" name="p_nomEtudiant">
          </p>

          <p>
            <label for="p_prenomEtudiant_id"> Prénom : </label>
            <input type="text" id="p_prenomEtudiant_id" name="p_prenomEtudiant">
          </p>
            
            <p>
                <label for="p_photo_id">Photo témoignage : </label>
                <input type="file" id="p_photo_id" name="p_photo"  required/>
            </p>

            <p>
              <label for="p_IUT_id">IUT : </label> 
              <select name="p_idIUT" size="1" id="p_IUT_id">
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
      </form>
</div>