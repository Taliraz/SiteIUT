<?php
require (File::build_path(array("controller","ControllerAdministrateur.php")));
require (File::build_path(array("controller","ControllerArticle.php")));
require (File::build_path(array("controller","ControllerCategorie.php")));
require (File::build_path(array("controller","ControllerChefDep.php")));
require (File::build_path(array("controller","ControllerContactEntreprise.php")));
require (File::build_path(array("controller","ControllerEntreprise.php")));
require (File::build_path(array("controller","ControllerEtudiant.php")));
require (File::build_path(array("controller","ControllerIUT.php")));
require (File::build_path(array("controller","ControllerPage.php")));
require (File::build_path(array("controller","ControllerStage.php")));
require (File::build_path(array("controller","ControllerTemoignage.php")));
require (File::build_path(array("controller","ControllerUtilisateur.php")));
require (File::build_path(array("controller","ControllerVille.php")));
if(isset($_GET['action'])) {
    $action = $_GET['action'];  
}
else { 
	$action="readAll"; 
}

if(isset($_GET['controller'])) {
    $controller = $_GET['controller'];  
}

else{
	$controller='etudiant';
}

if ($controller='administrateur'){
	ControllerAdministrateur::$action(); 
}

if ($controller='article'){
	ControllerArticle::$action(); 
}


if ($controller='categorie'){
	ControllerCategorie::$action(); 
}


if ($controller='chefDep'){
	ControllerChefDep::$action(); 
}


if ($controller='contactEntreprise'){
	ControllerContactEntreprise::$action(); 
}


if ($controller='entreprise'){
	ControllerEntreprise::$action(); 
}


if ($controller='etudiant'){
	ControllerEtudiant::$action(); 
}


if ($controller='IUT'){
	ControllerIUT::$action(); 
}


if ($controller='page'){
	ControllerPage::$action(); 
}


if ($controller='stage'){
	ControllerStage::$action(); 
}


if ($controller='temoignage'){
	ControllerTemoignage::$action(); 
}


if ($controller='utilisateur'){
	ControllerUtilisateur::$action(); 
}


if ($controller='ville'){
	ControllerVille::$action(); 
}



?>
