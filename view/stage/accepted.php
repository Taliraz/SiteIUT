<?php
echo '<p><h3>Le Stage a bien été accepté !</h3></p>';
$v=ModelStage::getStageById($_GET['idStage']);
require(File::build_path(array("view","stage","detail.php")));