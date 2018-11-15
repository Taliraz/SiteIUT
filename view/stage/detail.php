<?php
require_once File::build_path(array('model','ModelStage.php'));
echo'<p> Intitule : ' . htmlspecialchars($v->getIntituleStage()) .
	'</p><p>Date de Début : ' .htmlspecialchars($v->getDateDebStage()) .
	'</p><p> Date de Fin : '.htmlspecialchars($v->getDateFinStage()).
	'</p><p> Gratifié : '.htmlspecialchars($v->getGratifie()).
	'</p><p> Numéro de siret de l\'entreprise : '.htmlspecialchars($v->getNumSiret()).
	'</p><p> Entreprise : '.htmlspecialchars($v->getNomEntreprise()).
	'</p><p> Site de l\'entreprise : '.htmlspecialchars($v->getSiteEntreprise()).
	'</p><p> Adresse de l\'entreprise : '.htmlspecialchars($v->getAdresseEntreprise()).
	'</p><p> Téléphone de l\'entreprise : '.htmlspecialchars($v->getTelephoneEntreprise()).
	'</p><p> Accepté : '.htmlspecialchars($v->getEstAccepte()).
	'</p><p> Nom du contact : '.htmlspecialchars($v->getNomContact()).
	'</p><p> Prénom du contact : '.htmlspecialchars($v->getPrenomContact()).
	'</p><p> Fonction du contact : '.htmlspecialchars($v->getFonctionContact()).
	'</p><p> Téléphone du contact : '.htmlspecialchars($v->getTelephoneContact()).
	'</p><p> Email du contact : '.htmlspecialchars($v->getEmailContact());
?>