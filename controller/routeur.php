<?php
require (File::build_path(array("controller","ControllerEtudiant.php")));
if(isset($_GET['action'])) {
    $action = $_GET['action'];  
}
else { $action="readAll"; }

ControllerEtudiant::$action(); 
?>
