<?php
require_once File::build_path(array("model","ModelTemoignage.php"));
echo'<p> Titre: ' . htmlspecialchars($v->getTitreTemoignage()).'</p>
	<p> Contenu: ' . htmlspecialchars($v->getContenuTemoignage()) .'</p>
	<p> Date de publication: ' .htmlspecialchars($v->getDatePublication()) .'</p>
	<p> Theme: '.htmlspecialchars($v->getTheme()).'</p>
	<p> Etudiant: '.htmlspecialchars($v->getNomEtudiant()).' '.htmlspecialchars($v->getPrenomEtudiant())/*.'</p>
	<p> IUT: '.htmlspecialchars(ModelIUT::getIUTAvecId($v->getIdIUT)->getNomIUT())*/;
?>
<br>
<br>
<?php
if(isset($_SESSION['login'])){
	echo '<a class="modif" title="update" href="admin.php?controller='.$controller.'&action=update&idTemoignage='.$v->getIdTemoignage().'"> Modifier </a>';
	echo '<a class="modif" title="delete" href="admin.php?controller='.$controller.'&action=delete&idTemoignage='.$v->getIdTemoignage().'"> Supprimer </a>';
}
?>