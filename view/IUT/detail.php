<?php
require_once File::build_path(array("model","ModelIUT.php"));
require_once File::build_path(array("model","ModelVille.php"));
$ville=ModelVille::getVilleById($v->getIdVille());
echo'<p> Nom: ' . htmlspecialchars($v->getNomIUT()).'</p>
	<p> Ville: ' . htmlspecialchars($ville->getNom()) .'</p>
	<p> Adresse: ' .htmlspecialchars($v->getAdresseIUT()) .'</p>
	<p> Site: '.htmlspecialchars($v->getSiteIUT()).'</p>
	<p> Telephone: '.htmlspecialchars($v->getTelephoneIUT()).'</p>
	<p> email secrétariat: '.htmlspecialchars($v->getMailSecretariatIUT());
  ?>
<br>
<br>
<?php
if(isset($_SESSION['login'])){
	echo '<a class="modif" title="update" href="admin.php?controller='.$controller.'&action=update&idIUT='.$v->getIdIUT().'"> Modifier </a>';
	echo '<a class="modif" title="delete" href="admin.php?controller='.$controller.'&action=delete&idIUT='.$v->getIdIUT().'"> Supprimer </a>';
}
?>