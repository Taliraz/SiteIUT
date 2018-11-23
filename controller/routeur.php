<?php
	//require (File::build_path(array("controller","ControllerAdministrateur.php")));
	//require (File::build_path(array("controller","ControllerArticle.php")));
	require (File::build_path(array("controller","ControllerIUT.php")));
	require (File::build_path(array("controller","ControllerStage.php")));
	require (File::build_path(array("controller","ControllerTemoignage.php")));
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
else { 
	require_once(File::build_path(array("ONE-Page","Accueil.php")));
}

$controller_class="Controller".ucfirst($controller);
if(!class_exists($controller_class)){
	$controller_class="ControllerTemoignage";
}

if(in_array($action, get_class_methods($controller_class))){
	$controller_class::$action(); 
}
else{
	require_once(File::build_path(array("view",$controller,"error.php")));
}
?>