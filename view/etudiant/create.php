<?php 
require(File::build_path(array("controller","ControllerEtudiant.php")));

ControllerEtudiant::ajoutEtudiant('LOGIN', 'MDP', 1, 'NOM', 'PRENOM', 2017, 'MAIL');