<?php
require_once (File::builde_path(array("model","ModelStage.php")));
class ControllerStage{

	public static function readAll() {
        $tab_v = ModelStage::getAllStages();    
        $controller='stage';
        $view='list';
        $pagetitle='liste des Stages';
        require (File::build_path(array("view","view.php"))); 
    }

    public static function read(){
    	$v=ModelStage::getStageById($_GET ['id']);
    	if ($v==false){
            $controller='stage';
            $view='erreur';
            $pagetitle='Erreur stage';
    		require (File::build_path(array("view","view.php")));
    	}
    	else{
            $controller='stage';
            $view='detail';
            $pagetitle='Detail stage';
    		require(File::build_path(array("view","view.php")));
    	}
    	
    }

    public static function create(){
        $controller='stage';
        $view='create';
        $pagetitle='Creation de stage';
        require(File::build_path(array("view","view.php")));
    }

    public static function created(){
      $ModelStage=new ModelStage($_POST['intitule'],$_POST['entreprise'],$_POST['dateDeb'],$_POST['dateFin'],$_POST['remunere']);
      $ModelStage->save();
      $controller='stage';
      $view='created';
      $pagetitle='Stage créé';
      require(File::build_path(array("view","view.php")));
    }

    public static function delete(){
        $v=ModelStage::getStageById($_GET ['id']);
        $v->delete();
        self::readAll();
    }
}
?>