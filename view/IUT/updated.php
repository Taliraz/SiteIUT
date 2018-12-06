<?php
echo '<p>L\'IUT a bien été modifié !</p>';
$tab_v=ModelIUT::getAllIUTs();
require(File::build_path(array("view","IUT","list.php")));