<?php require(File::build_path(array("model","ModelVille.php"))); ?>

<html>
    <head>
        <meta charset="utf-8" />
        <title> formulaireCréationVille</title>
    </head>
    <body>
        <form method="post" action="index.php?action=created&controller=ville">
            <fieldset>
                <legend>Nouvelle Ville :</legend>
                <p>
                  <label for="nom_id">Nom</label> :
                  <input type="text" placeholder="Nom" name="nom" id="nom_id" required/>
                </p>
                <p>
                    <label for="ville_id">Ville</label> :
                    <select name="idVille" size="1" id="ville_id">
                    <?php 
                        $liste = ModelVille::getAll();
                        var_dump($liste);
                        foreach ($liste as $valeur){
                            echo '<option value="'.$valeur->getIdVille().'">'.$valeur->getNomVille().'</option>';
                        } 
                    ?>
                    </select>
                </p>
                <p>
                  <label for="adresse_id">Adresse</label> :
                  <input type="text" placeholder="Adresse" name="adresse" id="adresse_id" required/>
                </p>
                <p>
                  <label for="site_id">Site</label> :
                  <input type="text" placeholder="Site" name="site" id="site_id" required/>
                </p>
                <p>
                  <label for="telephone_id">Téléphone</label> :
                  <input type="text" placeholder="Téléphone" name="telephone" id="telephone_id" required/>
                </p>
                <p>
                <p>
                  <input type="submit" value="Envoyer" />
                </p>
            </fieldset> 
      </form>
    </body>
</html>