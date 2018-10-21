<?php
require_once File::build_path(array("model","ModelTemoignage.php"));
echo("Contenu:" . htmlspecialchars($v->getContenu()) .
	"\n Date de publication:" .htmlspecialchars($v->getDatePublication()) .
	"\n Theme:".htmlspecialchars($v->getTheme()).
	"\n Etudiant:".htmlspecialchars($v->getEtudiant()->getNom())." ".htmlspecialchars($v->getEtudiant()->getPrenom()));
?>