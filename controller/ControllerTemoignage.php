<?php
require_once (File::builde_path(array("model","ModelVille.php")));
class ControllerVille{


	public static function readAll() {
        $tab_v = ModelTemoignage::getAllTemoignages();    
        $controller='temoignage';
        $view='list';
        $pagetitle='liste des Temoignages';
        require (File::build_path(array("view","view.php"))); 
    }

    public static function read(){
    	$v=ModelTemoignage::getTemoignageById($_GET ['id']);
    	if ($v==false){
            $controller='temoignage';
            $view='erreur';
            $pagetitle='Erreur temoignage';
    		require (File::build_path(array("view","view.php")));
    	}
    	else{
            $controller='temoignage';
            $view='detail';
            $pagetitle='Detail temoignage';
    		require(File::build_path(array("view","view.php")));
    	}
    	
    }

    public static function create(){
        $controller='temoignage';
        $view='create';
        $pagetitle='Creation de témoignage';
        require(File::build_path(array("view","view.php")));
    }

    public static function created(){
      $ModelTemoignage=new ModelTemoignage($_POST['contenu'],$_POST['datePublication'],$_POST['theme']);
      $ModelTemoignage->save();
      $controller='temoignage';
      $view='created';
      $pagetitle='Temoignage créé';
      require(File::build_path(array("view","view.php")));
    }

    public static function delete(){
        $v=ModelTemoignage::getTemoignageById($_GET ['id']);
        $v->delete();
        self::readAll();
    }
}
?>