<?php
require_once File::build_path(array("model","ModelIUT.php"));
require_once File::build_path(array("model","ModelLicence.php"));
$IUT=ModelIUT::getIUTById($v->getIdIUT());
echo'<p> Nom: ' . htmlspecialchars($v->getNomLicence()).'</p>
	<p> IUT: ' . htmlspecialchars($IUT->getNomIUT()) .'</p>
	<p> Nom du responsable: ' .htmlspecialchars($v->getNomResponsable()) .'</p>
	<p> Prenom du responsable: ' .htmlspecialchars($v->getPrenomResponsable()) .'</p>
	<p> Email du responsable: '.htmlspecialchars($v->getMailResponsable()).'</p>
	<p> Site Web: '.htmlspecialchars($v->getSiteLicence()).'</p>'
  ?>
<br>
<br>
<?php
if(isset($_SESSION['login'])){
	echo '<a class="modif" title="update" href="admin.php?controller=licence&action=update&idLicence='.$v->getIdLicence().'"> Modifier </a>';
	echo '<a class="modif" title="delete" href="admin.php?controller=licence&action=delete&idLicence='.$v->getIdLicence().'"> Supprimer </a>';
}
?>