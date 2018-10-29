<?php require(File::build_path(array("model","ModelIUT.php"))); ?>

<html>
    <head>
        <meta charset="utf-8" />
<<<<<<< HEAD
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("view","CSS" ,"Form.css")); ?>">
        <title> formulaireCréationEtudiant </title>
    </head>
    <body>
        <form style="margin-left:250px" method="post" action="Index.php?action=created">
            <fieldset>
                <legend>Nouvel Etudiant :</legend>
                <p>
                  <label for="login_id">Login</label>  
                  <input type="text" placeholder="Login" name="login" id="login_id" required/>
                </p>
                <p>
                  <label for="mdp_id">Mot de Passe</label> 
                  <input type="text" placeholder="Mot de Passe" name="mdp" id="mdp_id" required/>
                </p>
                <p>
                  <label for="nom_id">Nom</label>
                  <input type="text" placeholder="Nom" name="nom" id="nom_id" required/>
                </p>
                <p>
                  <label for="prenom_id">Prénom</label> 
                  <input type="text" placeholder="Prénom" name="prenom" id="prenom_id" required/>
                </p>
                <p>
                    <label for="IUT_id">IUT</label> 
=======
        <title> formulaireCréationEtudiant </title>
    </head>
    <body>
        <form method="post" action="index.php?action=created&controller=etudiant">
            <fieldset>
                <legend>Nouvel Etudiant :</legend>
                <p>
                  <label for="login_id">Login</label> :
                  <input type="text" placeholder="Login" name="login" id="login_id" required/>
                </p>
                <p>
                  <label for="mdp_id">Mot de Passe</label> :
                  <input type="text" placeholder="Mot de Passe" name="mdp" id="mdp_id" required/>
                </p>
                <p>
                  <label for="nom_id">Nom</label> :
                  <input type="text" placeholder="Nom" name="nom" id="nom_id" required/>
                </p>
                <p>
                  <label for="prenom_id">Prénom</label> :
                  <input type="text" placeholder="Prénom" name="prenom" id="prenom_id" required/>
                </p>
                <p>
                    <label for="IUT_id">IUT</label> :
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
                    <select name="idIUT" size="1" id="IUT_id">
                    <?php 
                        $liste = ModelIUT::getAll();
                        var_dump($liste);
                        foreach ($liste as $valeur){
                            echo '<option value="'.$valeur->getIdIUT().'">'.$valeur->getNomIUT().'</option>';
                        } 
                    ?>
                    </select>
                </p>
                <p>
<<<<<<< HEAD
                  <label for="anneeInscription_id">Année d'inscription</label> 
                  <input type="text" placeholder="Année Inscription" name="anneeInscription" id="anneeInscription_id" required/>
                </p>
                <p>
                  <label for="email_id">Adresse Mail</label> 
                  <input type="email" placeholder="Email" name="email" id="email_id" required/>
                </p>
                <p>
                    <input type="submit" value="Envoyer" />
                </p>
                <p>
                   <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
=======
                  <label for="anneeInscription_id">Année d'inscription</label> :
                  <input type="date" placeholder="Année Inscription" name="anneeInscription" id="anneeInscription_id" required/>
                </p>
                <p>
                  <label for="email_id">Adresse Mail</label> :
                  <input type="email" placeholder="Email" name="email" id="email_id" required/>
                </p>
                <p>
                  <input type="submit" value="Envoyer" />
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
                </p>
            </fieldset> 
      </form>
    </body>
</html>