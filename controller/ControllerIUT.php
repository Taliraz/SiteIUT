<?php
require_once (File::build_path(array("model","ModelIUT.php")));
class ControllerIUT{

	public static function readAll() {
        $tab_v = ModelIUT::getAllIUTs();    
        $controller='IUT';
        $view='list';
        $pagetitle='liste des IUTs';
        require (File::build_path(array("view","view.php"))); 
    }

    public static function read(){
    	$v=ModelIUT::getIUTById($_GET ['id']);
    	if ($v==false){
            $controller='IUT';
            $view='erreur';
            $pagetitle='Erreur IUT';
    		require (File::build_path(array("view","view.php")));
    	}
    	else{
            $controller='IUT';
            $view='detail';
            $pagetitle='Detail IUT';
    		require(File::build_path(array("view","view.php")));
    	}
    	
    }

    public static function create(){
        $controller='IUT';
        $view='create';
        $pagetitle='Creation de IUT';
        require(File::build_path(array("view","view.php")));
    }

    public static function created(){
      $ModelIUT=new ModelIUT($_POST['nomIUT'],$_POST['idVille'],$_POST['adresseIUT'],$_POST['siteIUT'],$_POST['telephoneIUT']);
      $ModelIUT->save();
      $controller='IUT';
      $view='created';
      $pagetitle='IUT créé';
      require(File::build_path(array("view","view.php")));
    }

    public static function delete(){
        $v=ModelIUT::getIUTById($_GET ['idIUT']);
        $v->delete();
        self::readAll();
    }
}
?>
