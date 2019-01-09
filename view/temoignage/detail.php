<?php
require_once File::build_path(array("model","ModelTemoignage.php"));
$IUT=ModelIUT::getIUTById($v->getIdIUT());
echo'<p class="detailDonnees"> Titre : ' . htmlspecialchars($v->getTitreTemoignage()).'</p>
	<p class="detailDonnees"> Contenu : ' . htmlspecialchars($v->getContenuTemoignage()) .'</p>
	<p class="detailDonnees"> Année de publication : ' .htmlspecialchars($v->getanneeEtude()) .'</p>
	<p class="detailDonnees"> Etudiant : '.htmlspecialchars($v->getNomEtudiant()).' '.htmlspecialchars($v->getPrenomEtudiant()).'</p>
	<p class="detailDonnees"> IUT : '.htmlspecialchars($IUT->getNomIUT()).'</p>
	<p class="detailDonnees"> Accepté : '.htmlspecialchars($v->estAccepte()).'</p>';
?>

<?php
if(isset($_SESSION['login'])){
	if(!$v->estAccepte()) echo '<a class="detailAccepter" title="accept" href="admin.php?controller='.$controller.'&action=accept&idTemoignage='.$v->getIdTemoignage().'">Accepter</a>';
	echo '<a class="detailModifier" title="update" href="admin.php?controller='.$controller.'&action=update&idTemoignage='.$v->getIdTemoignage().'">Modifier</a>';
	echo '<a class="detailSupprimer" title="delete" href="admin.php?controller='.$controller.'&action=delete&idTemoignage='.$v->getIdTemoignage().'">Supprimer</a>';
}
?>
<br><br><br><span></span>