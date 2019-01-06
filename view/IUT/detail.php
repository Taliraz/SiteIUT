<?php
require_once File::build_path(array("model","ModelIUT.php"));
require_once File::build_path(array("model","ModelVille.php"));
$ville=ModelVille::getVilleById($v->getIdVille());
echo'<p class="detailDonnees"> Nom : ' . htmlspecialchars($v->getNomIUT()).'</p>
	<p class="detailDonnees"> Ville : ' . htmlspecialchars($ville->getNom()) .'</p>
	<p class="detailDonnees"> Adresse : ' .htmlspecialchars($v->getAdresseIUT()) .'</p>
	<p class="detailDonnees"> Site : '.htmlspecialchars($v->getSiteIUT()).'</p>
	<p class="detailDonnees"> Telephone : '.htmlspecialchars($v->getTelephoneIUT()).'</p>
	<p class="detailDonnees"> Email du secrétariat : '.htmlspecialchars($v->getMailSecretariatIUT()).'</p>';
  ?>


<?php
if(isset($_SESSION['login'])){
	echo '<a class="detailModifier" title="update" href="admin.php?controller='.$controller.'&action=update&idIUT='.$v->getIdIUT().'">Modifier</a>';
	echo '<a class="detailSupprimer" title="delete" href="admin.php?controller='.$controller.'&action=delete&idIUT='.$v->getIdIUT().'">Supprimer</a>';
}
?>
<br><br><br><span></span>