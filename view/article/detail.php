<?php
require_once File::build_path(array("model","ModelArticle.php"));
echo("<p>Nom:" . htmlspecialchars($v->getNomArticle()) ."</p>
	<p> Contenu:" .htmlspecialchars($v->getContenuArticle()) ."</p>");
?>