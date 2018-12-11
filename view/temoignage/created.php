<?php echo "Témoignage créé";
	$tab_t = ModelTemoignage::getAllTemoignages();    
	$controller='temoignage';
	$view='list';
	$pagetitle='liste des Témoignages';
	require (File::build_path(array("view",$controller,"list.php"))); 





?>