<?php
echo '<p>La ville a bien été créée !</p>';
$tab_v=ModelVille::getAllVilles();
require(File::build_path(array("view","ville","list.php")));