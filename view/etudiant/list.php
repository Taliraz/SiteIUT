<?php 
foreach ($row as $valeur) {
    echo '<p> Etudiant <a href="index.php?action=details&idEtudiant='.rawurlencode($valeur->getIdUtilisateur()).'"> ' . htmlspecialchars($valeur->getLogin()) . '</a></p>';
}
?>
 <a href="index.php?action=create"> Ajouter un Etudiant </a>