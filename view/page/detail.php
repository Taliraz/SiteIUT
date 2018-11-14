<?php
require_once File::build_path(array("model","ModelPage"));
echo ("Titre:" . htmlspecialchars($v->getTitrePage()).
		"\n Adresse de la page:" .htmlspecialchars($v->getAdressePage()));
		
?>
