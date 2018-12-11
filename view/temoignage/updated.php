<?php
echo '<p>Le témoignage a bien été modifié !</p>';
$tab_t=ModelTemoignage::getAllTemoignages();
require(File::build_path(array("view","temoignage","list.php"))); ?>