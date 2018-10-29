<?php require(File::build_path(array("model","ModelIUT.php"))); ?>
<html>
    <head>
        <meta charset="utf-8" />
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("view","CSS" ,"Form.css")); ?>">
        <title> formulaireModifEtudiant </title>
    </head>
    <body>
<<<<<<< HEAD
        <form style="margin-left:250px;" method="post" action="Index.php?action=updated&idEtudiant=<?php echo $info->getIdUtilisateur(); ?>">
            <fieldset>
                <legend>Modification Etudiants </legend>
                <p>
=======
        <form style="margin-left:250px;" method="post" action="Index.php?action=updated">
            <fieldset>
                <legend>Modification Etudiants </legend>
=======
        <title> formulaireModifEtudiant </title>
    </head>
    <body>
        <form method="post" action="Index.php?action=updated">
            <fieldset>
                <legend>Modification Etudiants :</legend>
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
                <p>
                    <input type="hidden" name="idEtudiant" value="<?php echo $info->getIdUtilisateur(); ?>"/>
                </p>
                <p>
<<<<<<< HEAD
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
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
<<<<<<< HEAD
=======
=======
                  <label for="login_id">Login</label> :
                  <input type="text" placeholder="<?php echo $info->getLogin(); ?>" name="login" id="login_id" value="<?php echo $info->getLogin() ?>"/>
                </p>
                <p>
                  <label for="mdp_id">Mot de Passe</label> :
                  <input type="text" placeholder="<?php echo $info->getMdp(); ?>" name="mdp" id="mdp_id" value="<?php echo $info->getMdp(); ?>"/>
                </p>
                <p>
                  <label for="nom_id">Nom</label> :
                  <input type="text" placeholder="<?php echo $info->getNom(); ?>" name="nom" id="nom_id" value="<?php echo $info->getNom() ?>"/>
                </p>
                <p>
                  <label for="prenom_id">Prénom</label> :
                  <input type="text" placeholder="<?php echo $info->getPrenom(); ?>" name="prenom" id="prenom_id" value="<?php echo $info->getPrenom(); ?>"/>
                </p>
                 <p>
                    <label for="IUT_id">IUT</label> :
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
                  <label for="anneeInscription_id">Année d'inscription</label> 
                  <input type="text" placeholder="<?php echo $info->getAnneeInscription(); ?>" name="anneeInscription" id="anneeInscription_id" value="<?php echo $info->getAnneeInscription(); ?>"/>
                </p>
                <p>
                  <label for="email_id">Adresse Mail</label> 
<<<<<<< HEAD
=======
=======
                  <label for="anneeInscription_id">Année d'inscription</label> :
                  <input type="date" placeholder="<?php echo $info->getAnneeInscription(); ?>" name="anneeInscription" id="anneeInscription_id" value="<?php echo $info->getAnneeInscription(); ?>"/>
                </p>
                <p>
                  <label for="email_id">Adresse Mail</label> :
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
                  <input type="email" placeholder="<?php echo $info->getEmail(); ?>" name="email" id="email_id" value="<?php echo $info->getEmail(); ?>"/>
                </p>
                <p>
                  <input type="submit" value="Envoyer" />
                </p>
<<<<<<< HEAD
                <p>
                   <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
                </p>
=======
<<<<<<< HEAD
                <p>
                   <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
                </p>
=======
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
            </fieldset> 
      </form>
    </body>
</html>
