<?php
echo '<p>L\'article a bien été modifié !</p>';
$tab_v=ModelArticle::getAllArticles();
require(File::build_path(array("view","article","list.php")));