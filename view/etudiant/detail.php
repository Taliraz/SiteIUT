<?php 
$row->afficher();
?><br><?php
$idEtudiant = $_GET['idEtudiant'];
echo '<a href="index.php?action=update&idEtudiant='.$idEtudiant.'">Modifier</a>';