<?php
require_once (File::build_path(array("model","ModelStage.php")));
class ControllerStage{

	public static function readAll() {
        $tab_v = ModelStage::getAllStages();    
        $controller='stage';
        $view='list';
        $pagetitle='liste des Stages';
        require (File::build_path(array("view","view.php"))); 
    }

    public static function read(){
    	$v=ModelStage::getStageById($_GET ['idStage']);
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
      $ModelStage=new ModelStage($_POST['intituleStage'],$_POST['dateDebStage'],$_POST['dateFinStage'],$_POST['gratifie'],$_POST['descriptionStage'],$_POST['idVille'],$_POST['nbPlaces'],$_POST['numSiret'],$_POST['nomEntreprise'],$_POST['siteEntreprise'],$_POST['adresseEntreprise'],$_POST['telephoneEntreprise'],$_POST['estAccepte'],$_POST['nomContact'],$_POST['prenomContact'],$_POST['fonctionContact'],$_POST['telephoneContact'],$_POST['emailContact']);
      $ModelStage->save();
      $controller='stage';
      $view='created';
      $pagetitle='Stage créé';
      require(File::build_path(array("view","view.php")));
    }

    public static function delete(){
        $v=ModelStage::getStageById($_GET ['idStage']);
        $v->delete();
        self::readAll();
    }
}
?>