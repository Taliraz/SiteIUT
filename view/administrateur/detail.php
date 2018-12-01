<?php
require_once File::build_path(array("model","ModelAdministrateur.php"));
   echo('<p> Login:'.htmlspecialchars($v->getLogin()));
   if(isset($_SESSION['login'])){
	   echo '<p><a title="supprimer" href="index.php?controller=administrateur&action=delete&login='.rawurlencode($v->getLogin()).'">supprimer</a></p>';
	   echo '<p><a title="modifier" href="index.php?controller=administrateur&action=update&login='.rawurlencode($v->getLogin()).'">modifier</a></p>';
	}
  ?>