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
        if(isset($_SESSION['login'])){
            $controller='IUT';
            $view='create';
            $pagetitle='Creation de IUT';
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
        if (isset($_SESSION['login'])){
          $ModelIUT=new ModelIUT($_POST['nomIUT'],$_POST['idVille'],$_POST['adresseIUT'],$_POST['siteIUT'],$_POST['telephoneIUT'],$_POST['mailSecretariatIUT']);
          $ModelIUT->save();
          $controller='IUT';
          $view='created';
          $pagetitle='IUT créé';
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
        if(isset($_SESSION['login'])){
            $v=ModelIUT::getIUTById($_GET ['idIUT']);
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

    public static function update(){
        if (isset($_SESSION['login'])){
            $idIUT=$_GET ['idIUT'];
            $v=ModelIUT::getIUTByid($idIUT);
            $controller='IUT';
            $view='update';
            $pagetitle='modification de IUT';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='temoignage';
            $view='detail';
            $pagetitle='Detail temoignage';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function updated(){
        if (isset($_SESSION['login'])){
            $idIUT=$_GET['idIUT'];
            $ModelIUT=new ModelIUT($idIUT,$_POST['nomIUT'],$_POST['idVille'],$_POST['adresseIUT'],$_POST['siteIUT'],$_POST['telephoneIUT'],$_POST['mailSecretariatIUT']);
            $ModelIUT->update();
            $controller='IUT';
            $view='updated';
            $pagetitle='IUT modifié';
            require(File::build_path(array("view","view.php")));
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
