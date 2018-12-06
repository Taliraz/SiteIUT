<?php
require_once File::build_path(array("model","ModelVille.php"));
echo("Nom:" . htmlspecialchars($v->getNom()) ."\n Code Postal:" .htmlspecialchars($v->getCodePostal()) ."\n Département:".htmlspecialchars($v->getDepartement()));
?>
<br>
<br>
<?php
if(isset($_SESSION['login'])){
	echo '<a class="modif" title="update" href="admin.php?controller='.$controller.'&action=update&idVille='.$v->getId().'"> Modifier </a>';
	echo '<a class="modif" title="delete" href="admin.php?controller='.$controller.'&action=delete&idVille='.$v->getId().'"> Supprimer </a>';
}
?>