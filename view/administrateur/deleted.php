<?php
echo '<p>L\'administrateur: '.$login.' a bien été supprimé !</p>';
require(File::build_path(array("view","administrateur","list.php")));