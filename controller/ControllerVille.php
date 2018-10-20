<?php
require_once (File::builde_path(array("model","ModelVille.php")));
class ControllerVille{


	public static function readAll() {
        $tab_v = ModelVille::getAllVilles();    
        $controller='ville';
        $view='list';
        $pagetitle='liste des Villes';
        require (File::build_path(array("view","view.php"))); 
    }

    public static function read(){
    	$v=ModelVille::getVilleById($_GET ['id']);
    	if ($v==false){
            $controller='ville';
            $view='erreur';
            $pagetitle='Erreur ville';
    		require (File::build_path(array("view","view.php")));
    	}
    	else{
            $controller='ville';
            $view='detail';
            $pagetitle='Detail ville';
    		require(File::build_path(array("view","view.php")));
    	}
    	
    }

    public static function create(){
        $controller='ville';
        $view='create';
        $pagetitle='Creation de ville';
        require(File::build_path(array("view","view.php")));
    }

    public static function created(){
      $ModelStage=new ModelVille($_POST['nom'],$_POST['codePostal'],$_POST['departement']);
      $ModelStage->save();
      $controller='ville';
      $view='created';
      $pagetitle='Ville créée';
      require(File::build_path(array("view","view.php")));
    }

    public static function delete(){
        $v=ModelVille::getVilleById($_GET ['id']);
        $v->delete();
        self::readAll();
    }
}
?>
