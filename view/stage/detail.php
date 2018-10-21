<?php
require_once File::build_path(array("model","ModelStage.php"));
echo("Intitule:" . htmlspecialchars($v->getIntitule()) .
	"\n date de Début:" .htmlspecialchars($v->getDateDeb()) .
	"\n Date de Fin:".htmlspecialchars($v->getDateFin()).
	"\n Entreprise:".htmlspecialchars($v->getEntreprise()->getNom()).
	"\n Remunere:".htmlspecialchars($v->getRemunere()));
?>