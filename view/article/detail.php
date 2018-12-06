<?php
require_once File::build_path(array("model","ModelArticle.php"));
echo("<p>Nom:" . htmlspecialchars($v->getNomArticle()) ."</p>
	<p> Contenu:" .htmlspecialchars($v->getContenuArticle()) ."</p>");

?>
<?php
if(isset($_SESSION['login'])){
	echo '<a class="modif" title="update" href="admin.php?controller='.$controller.'&action=update&idArticle='.$v->getIdArticle().'"> Modifier </a>';
	echo '<a class="modif" title="delete" href="admin.php?controller='.$controller.'&action=delete&idArticle='.$v->getIdArticle().'"> Supprimer </a>';
}
?>

