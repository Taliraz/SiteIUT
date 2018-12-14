<?php
echo '<p>Le Stage a bien été modifié !</p>';
$tab_v=ModelStage::getAllStages();
require(File::build_path(array("view","stage","list.php")));