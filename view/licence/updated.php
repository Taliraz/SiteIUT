<?php
echo '<p>La licence a bien été modifié !</p>';
$tab_v=ModelLicence::getAllLicences();
require(File::build_path(array("view","licence","list.php")));