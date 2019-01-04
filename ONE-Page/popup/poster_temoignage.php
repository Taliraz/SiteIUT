<?php
  require_once (File::build_path(array("model","ModelTemoignage.php")));
  if(isset($_POST['submit'])){
      if (!empty($_FILES['p_photo']) && is_uploaded_file($_FILES['p_photo']['tmp_name'])) {
          $name = $_FILES['p_photo']['name'];
          $pic_path = File::build_path(array("img","$name"));
          if (!move_uploaded_file($_FILES['p_photo']['tmp_name'], $pic_path)) {
            echo "La copie a échoué";
          }
      }
      $idTemoignage=NULL;
      $photoTemoignage="http://webinfo.iutmontp.univ-montp2.fr/~armangaus/SiteIUT/img/".$name;
      $ModelTemoignage=new ModelTemoignage($idTemoignage,$_POST['p_titreTemoignage'], $photoTemoignage, $_POST['p_contenuTemoignage'],$_POST['p_anneeEtude'],$_POST['p_theme'],$_POST['p_nomEtudiant'],$_POST['p_prenomEtudiant'],$_POST['p_idIUT']);
      $ModelTemoignage->save();
  } 
?>

          <p>
            <label for="p_anneeEtude_id">Année d'étude : </label>
            <select name="p_anneeEtude" required>
              <?php for($i=1940; $i<=intval(date("Y")); $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
              } ?>
            </select>
          </p>

          <p>
            <label for="p_theme_id">Theme : </label>
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
              <label for="p_anneeEtude_id">Année d'étude : </label> :
              <select name="p_anneeEtude" required>
                <?php for($i=1940; $i<=intval(date("Y")); $i++) {
                  echo '<option value="'.$i.'">'.$i.'</option>';
                } ?>
              </select>
            </p>

            <p>
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
              <input type="submit" name="submit" value="Envoyer">
            </p>
        </form>


  </div>
</html>