<?php
require_once File::build_path(array("model","ModelVille.php"));
echo("Nom:" . htmlspecialchars($v->getNomVille()) ."\n Code Postal:" .htmlspecialchars($v->getCodePostal()) ."\n Département:".htmlspecialchars($v->getDepartement()));
?>