<?php
require_once (File::build_path(array("model","ModelVille.php")));
class ControllerVille{


	public static function readAll() {
        if(isset($_SESSION['login'])){
            $tab_v = ModelVille::getAllVilles();    
            $controller='ville';
            $view='list';
            $pagetitle='liste des Villes';
            require (File::build_path(array("view","view.php"))); 
        }
        else{
            $controller='temoignage';
            $view='detail';
            $pagetitle='Detail temoignage';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function read(){
        if (isset($_SESSION['login'])){
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
        else{
            $controller='temoignage';
            $view='detail';
            $pagetitle='Detail temoignage';
            require(File::build_path(array("view","view.php")));
        }
    	
    }

    public static function create(){
        if(isset($_SESSION['login'])){
            $controller='ville';
            $view='create';
            $pagetitle='Creation de ville';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='temoignage';
            $view='detail';
            $pagetitle='Detail temoignage';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function created(){
        if(isset($_SESSION['login'])){
          $ModelVille=new ModelVille($_POST['nom'],$_POST['codePostal'],$_POST['departement']);
          $ModelVille->save();
          $controller='ville';
          $view='created';
          $pagetitle='Ville créée';
          require(File::build_path(array("view","view.php")));
      }
      else{
            $controller='temoignage';
            $view='detail';
            $pagetitle='Detail temoignage';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function delete(){
        if (isset($_SESSION['login'])){
            $v=ModelVille::getVilleById($_GET ['id']);
            $v->delete();
            self::readAll();
        }
        else{
            $controller='temoignage';
            $view='detail';
            $pagetitle='Detail temoignage';
            require(File::build_path(array("view","view.php")));
        }
    }
}
?>
