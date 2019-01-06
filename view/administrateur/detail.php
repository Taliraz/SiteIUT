<?php
require_once File::build_path(array("model","ModelAdministrateur.php"));
   echo('<p class="detailDonnees"> Login :  '.htmlspecialchars($v->getLogin())).'</p>';
   ?>

<?php
   if(isset($_SESSION['login'])){
   	echo '<a class="detailModifier" title="modifier" href="admin.php?controller=administrateur&action=update&login='.rawurlencode($v->getLogin()).'">Modifier</a>';
	echo '<a class="detailSupprimer" title="supprimer" href="admin.php?controller=administrateur&action=delete&login='.rawurlencode($v->getLogin()).'">Supprimer</a>';
	}
?>
