<?php
echo '<p>L\'article a bien été créée !</p>';
$tab_v=ModelArticle::getAllArticles();
require(File::build_path(array("view","article","list.php")));