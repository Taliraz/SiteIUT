<?php
require (File::build_path(array("controller","ControllerEtudiant.php")));
if(isset($_GET['action'])) {
    $action = $_GET['action'];  
}
else { $action="readAll"; }

$controller=$_GET['controller'];

if ($controller=='etudiant'){
	ControllerEtudiant::$action(); 
}

if ($controller=='administrateur'){
	ControllerAdministrateur::$action(); 
}

if ($controller=='article'){
	ControllerArticle::$action(); 
}

if ($controller=='categorie'){
	ControllerCategorie::$action(); 
}

if ($controller=='chefDep'){
	ControllerChefDep::$action(); 
}

if ($controller=='contactEntreprise'){
	ControllerContactEntreprise::$action(); 
}

if ($controller=='entreprise'){
	ControllerEntreprise::$action(); 
}

if ($controller=='IUT'){
	ControllerIUT::$action(); 
}

if ($controller=='page'){
	ControllerPage::$action(); 
}

if ($controller=='stage'){
	ControllerStage::$action(); 
}

if ($controller=='temoignage'){
	ControllerTemoignage::$action(); 
}

if ($controller=='utilisateur'){
	ControllerUtilisateur::$action(); 
}

if ($controller=='ville'){
	ControllerVille::$action(); 
}
?>
