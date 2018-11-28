<?php require(File::build_path(array("model","ModelIUT.php"))); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("view","CSS" ,"Form.css")); ?>">
        <title> formulaireModifEtudiant </title>
    </head>
    <body>
        <form style="margin-left:250px;" method="post" action="index.php?action=updated&idEtudiant=<?php echo $info->getIdUtilisateur(); ?>">
            <fieldset>
                <legend>Modification Etudiants </legend>
                <p>
                  <label for="login_id">Login</label> 
                  <input type="text" placeholder="<?php echo $info->getLogin(); ?>" name="login" id="login_id" value="<?php echo $info->getLogin() ?>"/>
                </p>
                <p>
                  <label for="mdp_id">Mot de Passe</label> 
                  <input type="text" placeholder="<?php echo $info->getMdp(); ?>" name="mdp" id="mdp_id" value="<?php echo $info->getMdp(); ?>"/>
                </p>
                <p>
                  <label for="nom_id">Nom</label> 
                  <input type="text" placeholder="<?php echo $info->getNom(); ?>" name="nom" id="nom_id" value="<?php echo $info->getNom() ?>"/>
                </p>
                <p>
                  <label for="prenom_id">Prénom</label> 
                  <input type="text" placeholder="<?php echo $info->getPrenom(); ?>" name="prenom" id="prenom_id" value="<?php echo $info->getPrenom(); ?>"/>
                </p>
                 <p>
                    <label for="IUT_id">IUT</label> 
                    <select name="idIUT" size="1" id="IUT_id">
                    <?php 
                        $liste = ModelIUT::getAll();
                        var_dump($liste);
                        foreach ($liste as $valeur){
                            if ($valeur->getIdIUT() == $info->getIdIUT()) {
                                echo '<option selected="selected" value="'.$valeur->getIdIUT().'">'.$valeur->getNomIUT().'</option>';
                            }
                            else {
                                echo '<option value="'.$valeur->getIdIUT().'">'.$valeur->getNomIUT().'</option>';
                            }
                        } 
                    ?>
                    </select>
                </p>
                <p>
                  <label for="anneeInscription_id">Année d'inscription</label> 
                  <input type="text" placeholder="<?php echo $info->getAnneeInscription(); ?>" name="anneeInscription" id="anneeInscription_id" value="<?php echo $info->getAnneeInscription(); ?>"/>
                </p>
                <p>
                  <label for="email_id">Adresse Mail</label> 
                  <input type="email" placeholder="<?php echo $info->getEmail(); ?>" name="email" id="email_id" value="<?php echo $info->getEmail(); ?>"/>
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
