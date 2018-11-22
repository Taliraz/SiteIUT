<?php
require_once File::build_path(array("model","ModelIUT.php"));
require_once File::build_path(array("model","ModelVille.php"));
$ville=ModelVille::getVilleById($v->getIdVille());
echo'<p> Nom: ' . htmlspecialchars($v->getNomIUT()).'</p>
	<p> Ville: ' . htmlspecialchars($ville->getNom()) .'</p>
	<p> Adresse: ' .htmlspecialchars($v->getAdresseIUT()) .'</p>
	<p> Site: '.htmlspecialchars($v->getSiteIUT()).'</p>
	<p> Telephone: '.htmlspecialchars($v->getTelephoneIUT()).'</p>
	<p> email secrétariat: '.htmlspecialchars($v->getMailSecretariatIUT());
?>