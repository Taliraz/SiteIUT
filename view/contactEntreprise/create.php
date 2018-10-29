<?php require(File::build_path(array("model","ModelEntreprise.php"))); ?>

<html>
    <head>
        <meta charset="utf-8" />
        <title> formulaireCréationContactEntreprise </title>
    </head>
    <body>
        <form method="post" action="index.php?action=created&controller=contactEntreprise">
            <fieldset>
                <legend>Nouvel Contact Entreprise :</legend>
                <p>
                  <label for="nom_id">Nom</label> :
                  <input type="text" placeholder="Nom" name="nom" id="nom_id" required/>
                </p>
                <p>
                  <label for="prenom_id">Prénom</label> :
                  <input type="text" placeholder="Prénom" name="prenom" id="prenom_id" required/>
                </p>
                <p>
                  <label for="fonction_id">Fonction</label> :
                  <input type="text" placeholder="Fonction" name="fonction" id="fonction_id" required/>
                </p>
                <p>
                  <label for="telephone_id">Téléphone</label> :
                  <input type="text" placeholder="Téléphone" name="telephone" id="telephone_id" required/>
                </p>
                <p>
                  <label for="email_id">Adresse Mail</label> :
                  <input type="email" placeholder="Email" name="email" id="email_id" required/>
                </p>
                <p>
                    <label for="entreprise_id">Entreprise</label> :
                    <select name="idEntreprise" size="1" id="entreprise_id">
                    <?php 
                        $liste = ModelEntreprise::getAll();
                        var_dump($liste);
                        foreach ($liste as $valeur){
                            echo '<option value="'.$valeur->getIdEntreprise().'">'.$valeur->getNomEntreprise().'</option>';
                        } 
                    ?>
                    </select>
                </p>
                <p>
                  <input type="submit" value="Envoyer" />
                </p>
            </fieldset> 
      </form>
    </body>
</html>