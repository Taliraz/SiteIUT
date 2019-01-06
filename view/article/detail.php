<?php
require_once File::build_path(array("model","ModelArticle.php"));
echo("<p class='detailDonnees'>Nom : " . htmlspecialchars($v->getNomArticle()) ."</p>
	<p class='detailDonnees'> Contenu : " .htmlspecialchars($v->getContenuArticle()) ."</p>");

?>
<?php
if(isset($_SESSION['login'])){
	echo '<a class="detailModifier" title="update" href="admin.php?controller='.$controller.'&action=update&idArticle='.$v->getIdArticle().'">Modifier</a>';
	echo '<a class="detailSupprimer" title="delete" href="admin.php?controller='.$controller.'&action=delete&idArticle='.$v->getIdArticle().'">Supprimer</a>';
}
?>
<br><br><br><span></span>
