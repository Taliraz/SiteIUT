<?php
require_once File::build_path(array("model","ModelStage.php"));
echo("Intitule:" . htmlspecialchars($v->getIntitule()) .
	"\n date de Début:" .htmlspecialchars($v->getDateDeb()) .
	"\n Date de Fin:".htmlspecialchars($v->getDateFin()).
	"\n Gratifié:".htmlspecialchars($v->getGratifie())).
	"\n Numéro de siret de l'entreprise:".htmlspecialchars($v->getNumSiret()).
	"\n Entreprise:".htmlspecialchars($v->getNomEntreprise()).
	"\n Site de l'entreprise:".htmlspecialchars($v->getEntreprise()->getNom()).
	"\n Adresse de l'entreprise:".htmlspecialchars($v->getAdresseEntreprise()).
	"\n Téléphone de l'entreprise:".htmlspecialchars($v->getTelephoneEntreprise()).
	"\n Accepté:".htmlspecialchars($v->getEstAccepte())).
	"\n Nom du contact:".htmlspecialchars($v->getNomContact()).
	"\n Prénom du contact:".htmlspecialchars($v->getPrenomContact()).
	"\n Fonction du contact:".htmlspecialchars($v->getFonctionContact()).
	"\n Téléphone du contact:".htmlspecialchars($v->getTelephoneContact()).
	"\n Email du contact:".htmlspecialchars($v->getEmailContact()).
?>