<?php
  $tooHeavy="";
  if(isset($_POST['submit'])){
    $tailleFichier=$_FILES['photo']['size'];
    if($tailleFichier>0){
      if (!empty($_FILES['photo']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $name = strtr($_FILES['photo']['name']," ","_" );
            $pic_path = File::build_path(array("img","$name"));
            if (!move_uploaded_file($_FILES['photo']['tmp_name'], $pic_path)) {
              echo "La copie a échoué";
            }
        }
        else $name="";
        $idTemoignage=NULL;
        $photoTemoignage=NULL;
        $photoTemoignage="http://webinfo.iutmontp.univ-montp2.fr/~armangaus/SiteIUT/img/".$name;
        $ModelTemoignage=new ModelTemoignage($idTemoignage,$_POST['titreTemoignage'], $photoTemoignage, $_POST['contenuTemoignage'],$_POST['anneeEtude'],$_POST['nomEtudiant'],$_POST['prenomEtudiant'],$_POST['idIUT'],"0");
        $ModelTemoignage->save();
        header('Location: admin.php?action=readAll&controller=temoignage');
        exit();
    }
    else $tooHeavy="Fichier trop lourd";
  } 
?>

<html>
    <body>
      <form  class="createFormulaire" method="post" enctype="multipart/form-data">
        <fieldset>
          <legend>Ajouter un Temoignage :</legend>
          <p>
            <label for="titreTemoignage_id"> Titre </label>
            <input type="text" id="titreTemoignage_id" name="titreTemoignage">
          </p>
          <p>
            <label for="contenuTemoignage_id">Contenu</label> :
            <br>
            <textarea name="contenuTemoignage" id="contenuTemoignage" required></textarea>
          </p>

          <p>
            <label for="anneeEtude_id">Année d'étude</label> :
            <select name="anneeEtude" required>
              <?php for($i=1940; $i<=intval(date("Y")); $i++) {
                echo '<option value="'.$i.'">'.$i.'</option>';
              } ?>
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
                <input type="file" name="photo" accept=".png,.jpg,.jpeg,.JPG" required/>
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
            <input id="bouton-envoyer" name="submit" type="submit" value="Envoyer">
          </p>

          <p>
              <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
          </p>

        </fieldset> 
      </form>
        
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","JQuery.js")) ?>"></script>
        <script>
        $(function() {
            var optionWbb = {
                buttons: "bold,italic,underline,strike,|,img,video,link,|,fontcolor,|,quote"
            }
            $("#contenuTemoignage").wysibb(optionWbb);
        })
        </script>
    </body>
</html>