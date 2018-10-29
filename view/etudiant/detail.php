<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("view","CSS" ,"Detail.css")); ?>">
    </head>
    <body>
        <div id="espace-admin">
            <h2>Informations sur l'étudiant <?php  echo $row->getLogin(); ?></h2>
            <table id="tableau">
                <tr class="ligne"> 
                    <td class="cellule">ID</td>
                    <td class="cellule"><?php echo $row->getIdUtilisateur(); ?></td>
                </tr>
                <tr class="ligne"> 
                    <td class="cellule">Login</td>
                    <td class="cellule"><?php  echo $row->getLogin(); ?></td>
                </tr>
                <tr class="ligne"> 
                    <td class="cellule">Mot de Passe</td>
                    <td class="cellule"><?php  echo $row->getMdp(); ?></td>
                </tr>
                <tr class="ligne"> 
                    <td class="cellule">Nom</td>
                    <td class="cellule"><?php  echo $row->getNom(); ?></td>
                </tr>
                <tr class="ligne"> 
                    <td class="cellule">Prénom</td>
                    <td class="cellule"><?php  echo $row->getPrenom(); ?></td>
                </tr>
                <tr class="ligne"> 
                    <td class="cellule">ID de l'IUT</td>
                    <td class="cellule"><?php  echo $row->getIdIUT(); ?></td>
                </tr>
                <tr class="ligne"> 
                    <td class="cellule">Année d'Inscription</td>
                    <td class="cellule"><?php  echo $row->getAnneeInscription(); ?></td>
                </tr>
                <tr class="ligne">
                    <td class="cellule"> Adresse email</td>
                    <td class="cellule"><?php  echo $row->getEmail(); ?></td>
                </tr>
            </table>
        <br>
        <p>
            <?php echo '<a href="index.php?action=update&idEtudiant='.$_GET['idEtudiant'].'"><span id="bouton">Modifier</span></a>'; ?>
        </p>
        <p>
            <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
        </p>
        </div>
    </body>
<<<<<<< HEAD
</html>
=======
</html>
=======
<?php 
$row->afficher();
?><br><?php
$idEtudiant = $_GET['idEtudiant'];
echo '<a href="index.php?action=update&idEtudiant='.$idEtudiant.'">Modifier</a>';
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
