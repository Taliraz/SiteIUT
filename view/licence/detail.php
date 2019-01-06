<?php
require_once File::build_path(array("model","ModelIUT.php"));
require_once File::build_path(array("model","ModelLicence.php"));
$IUT=ModelIUT::getIUTById($v->getIdIUT());
echo'<p class="detailDonnees"> Nom : ' . htmlspecialchars($v->getNomLicence()).'</p>
	<p class="detailDonnees"> IUT : ' . htmlspecialchars($IUT->getNomIUT()) .'</p>
	<p class="detailDonnees"> Nom du responsable : ' .htmlspecialchars($v->getNomResponsable()) .'</p>
	<p class="detailDonnees"> Prenom du responsable : ' .htmlspecialchars($v->getPrenomResponsable()) .'</p>
	<p class="detailDonnees"> Email du responsable : '.htmlspecialchars($v->getMailResponsable()).'</p>
	<p class="detailDonnees"> Site Web : '.htmlspecialchars($v->getSiteLicence()).'</p>'
  ?>

<?php
if(isset($_SESSION['login'])){
	echo '<a class="detailModifier" title="update" href="admin.php?controller=licence&action=update&idLicence='.$v->getIdLicence().'">Modifier</a>';
	echo '<a class="detailSupprimer" title="delete" href="admin.php?controller=licence&action=delete&idLicence='.$v->getIdLicence().'">Supprimer</a>';
}
?>
<br><br><br><span></span>