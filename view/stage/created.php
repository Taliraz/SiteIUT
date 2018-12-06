<?php echo "Stage créé";
	$tab_v = ModelStage::getAllStages();    
	$controller='stage';
	$view='list';
	$pagetitle='liste des Stages';
	require (File::build_path(array("view","view.php"))); 





?>
