<?php
require_once File::build_path(array("model","ModelTemoignage.php"));
echo'<p> Titre: ' . htmlspecialchars($v->getTitreTemoignage()).'</p>
	<p> Contenu: ' . htmlspecialchars($v->getContenuTemoignage()) .'</p>
	<p> Date de publication: ' .htmlspecialchars($v->getDatePublication()) .'</p>
	<p> Theme: '.htmlspecialchars($v->getTheme()).'</p>
	<p> Etudiant: '.htmlspecialchars($v->getNomEtudiant()).' '.htmlspecialchars($v->getPrenomEtudiant())/*.'</p>
	<p> IUT: '.htmlspecialchars(ModelIUT::getIUTAvecId($v->getIdIUT)->getNomIUT())*/;
?>