<?php
require_once File::build_path(array("model","ModelTemoignage.php"));
echo'<p class="detailDonnees"> Titre : ' . htmlspecialchars($v->getTitreTemoignage()).'</p>
	<p class="detailDonnees"> Contenu : ' . htmlspecialchars($v->getContenuTemoignage()) .'</p>
	<p class="detailDonnees"> Année de publication : ' .htmlspecialchars($v->getanneeEtude()) .'</p>
	<p class="detailDonnees"> Theme : '.htmlspecialchars($v->getTheme()).'</p>
	<p class="detailDonnees"> Etudiant : '.htmlspecialchars($v->getNomEtudiant()).' '.htmlspecialchars($v->getPrenomEtudiant()).'</p>
	<p class="detailDonnees"> IUT : '.htmlspecialchars((ModelIUT::getIUTById($v->getIdIUT()))->getNomIUT()).'</p>';
?>

<?php
if(isset($_SESSION['login'])){
	echo '<a class="detailModifier" title="update" href="admin.php?controller='.$controller.'&action=update&idTemoignage='.$v->getIdTemoignage().'">Modifier</a>';
	echo '<a class="detailSupprimer" title="delete" href="admin.php?controller='.$controller.'&action=delete&idTemoignage='.$v->getIdTemoignage().'">Supprimer</a>';
}
?>
<br><br><br><span></span>