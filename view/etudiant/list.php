<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
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
<<<<<<< HEAD
</html>
=======
</html>
=======
<?php 
foreach ($row as $valeur) {
    echo '<p> Etudiant <a href="index.php?action=details&idEtudiant='
    .rawurlencode($valeur->getIdUtilisateur())
    .'"> ' 
    . htmlspecialchars($valeur->getLogin()) . '</a></p>';
}
?>
 <a href="index.php?action=create"> Ajouter un Etudiant </a>
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
