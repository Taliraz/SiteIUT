<?php
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

if ($controller=='administrateur'){
	require (File::build_path(array("controller","ControllerAdministrateur.php")));
	ControllerAdministrateur::$action(); 
}

if ($controller=='article'){
	require (File::build_path(array("controller","ControllerArticle.php")));
	ControllerArticle::$action(); 
}


if ($controller=='categorie'){
	require (File::build_path(array("controller","ControllerCategorie.php")));
	ControllerCategorie::$action(); 
}


if ($controller=='chefDep'){
	require (File::build_path(array("controller","ControllerChefDep.php")));
	ControllerChefDep::$action(); 
}


if ($controller=='contactEntreprise'){
	require (File::build_path(array("controller","ControllerContactEntreprise.php")));
	ControllerContactEntreprise::$action(); 
}


if ($controller=='entreprise'){
	require (File::build_path(array("controller","ControllerEntreprise.php")));
	ControllerEntreprise::$action(); 
}


if ($controller=='etudiant'){
	require (File::build_path(array("controller","ControllerEtudiant.php")));
	ControllerEtudiant::$action(); 
}


if ($controller=='IUT'){
	require (File::build_path(array("controller","ControllerIUT.php")));
	ControllerIUT::$action(); 
}


if ($controller=='page'){
	require (File::build_path(array("controller","ControllerPage.php")));
	ControllerPage::$action(); 
}


if ($controller=='stage'){
	require (File::build_path(array("controller","ControllerStage.php")));
	ControllerStage::$action(); 
}

if ($controller=='temoignage'){
	require (File::build_path(array("controller","ControllerTemoignage.php")));
	ControllerTemoignage::$action(); 
}

if ($controller=='ville'){
	require (File::build_path(array("controller","ControllerVille.php")));
	ControllerVille::$action(); 
}



?>
