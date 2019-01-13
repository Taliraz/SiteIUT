<?php
require_once File::build_path(array("model","ModelArticle.php"));
require_once (File::build_path(array("ONE-Page","jbbcode", "JBBCode", "Parser.php")));

require (File::build_path(array("ONE-Page", "jbbcode", "getParsed.php")));
$parser->parse($v->getContenuArticle());

echo("<p class='detailDonnees'>Nom : " . htmlspecialchars($v->getNomArticle()) ."</p>
	<p class='detailDonnees'> Contenu : <br>" .$parser->getAsHtml() ."</p>");

?>
<?php
if(isset($_SESSION['login'])){
	echo '<a class="detailModifier" title="update" href="admin.php?controller='.$controller.'&action=update&idArticle='.$v->getIdArticle().'">Modifier</a>';
	echo '<a class="detailSupprimer" title="delete" href="admin.php?controller='.$controller.'&action=delete&idArticle='.$v->getIdArticle().'">Supprimer</a>';
}
?>
<br><br><br><span></span>
