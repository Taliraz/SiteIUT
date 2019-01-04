<?php echo "Stage créé";
	if (isset($_SESSION['login'])){
		$tab_v = ModelStage::getAllStages();    
		$controller='stage';
		$view='list';
		$pagetitle='liste des Stages';
		require (File::build_path(array("view",$controller,"list.php"))); 
	}
	echo '<p>Stage envoyé</p>
	<p> <a href="index.php"> Retour au site</a></p>
	<p> <a href="admin.php?action=create&controller=stage"> Ajouter un nouveau stage</p>';






?>
