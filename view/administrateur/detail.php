<?php
require_once File::build_path(array("model","ModelAdministrateur.php"));
   echo('<p> Login:'.htmlspecialchars($v->getLogin()));
   ?>
<br>
<br>
<?php
   if(isset($_SESSION['login'])){
   	echo '<a class="modif" title="modifier" href="admin.php?controller=administrateur&action=update&login='.rawurlencode($v->getLogin()).'">modifier</a>';
	echo '<a class="modif" title="supprimer" href="admin.php?controller=administrateur&action=delete&login='.rawurlencode($v->getLogin()).'">supprimer</a>';
	}