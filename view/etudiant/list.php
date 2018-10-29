<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("view","CSS" ,"List.css")); ?>">
    </head>
    <body>
        <div id="espace-admin">
            <h2 class="titre">Liste des Etudiants</h2>
            <ul id="liste">
            <?php 
            foreach ($row as $valeur) {
                echo '<p> <a href="index.php?action=details&idEtudiant='.rawurlencode($valeur->getIdUtilisateur()).'"><li class="elements-liste"> ' . htmlspecialchars($valeur->getLogin()) . '</li></a></p>';
            }?>
            </ul>
            <a class="bouton" href="index.php?action=create"> Ajouter un Etudiant </a>
        </div>
    </body>
</html>