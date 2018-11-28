<?php
echo '<p>L\'administrateur a bien été modifié !</p>';
$tab_v=ModelAdministrateur::getallAdministrateur();
require(File::build_path(array("view","administrateur","list.php")));