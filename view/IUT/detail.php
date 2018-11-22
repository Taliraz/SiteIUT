<?php
require_once File::build_path(array("model","ModelIUT.php"));
echo'<p> Nom: ' . htmlspecialchars($v->getTitreIUT()).'</p>
	<p> Ville: ' . htmlspecialchars($v->getContenuIUT()) .'</p>
	<p> Adresse: ' .htmlspecialchars($v->getDatePublication()) .'</p>
	<p> Site: '.htmlspecialchars($v->getTheme()).'</p>
	<p> Telephone: '.htmlspecialchars($v->getNomEtudiant()).' '.htmlspecialchars($v->getPrenomEtudiant())/*.'</p>
	<p> IUT: '.htmlspecialchars(ModelIUT::getIUTAvecId($v->getIdIUT)->getNomIUT())*/;
?>