<?php
echo '<p>La Licence a bien été créé !</p>';
$tab_v=ModelLicence::getAllLicences();
require(File::build_path(array("view","licence","list.php")));