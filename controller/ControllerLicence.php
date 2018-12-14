<?php
require_once (File::build_path(array("model","ModelLicence.php")));
class ControllerLicence{

	public static function readAll() {
        $tab_v = ModelLicence::getAllLicences();    
        $controller='licence';
        $view='list';
        $pagetitle='liste des Licences';
        require (File::build_path(array("view","view.php"))); 
    }

    public static function read(){
    	$v=ModelLicence::getLicenceById($_GET ['idLicence']);
    	if ($v==false){
            $controller='licence';
            $view='erreur';
            $pagetitle='Erreur Licence';
    		require (File::build_path(array("view","view.php")));
    	}
    	else{
            $controller='licence';
            $view='detail';
            $pagetitle='Detail Licence';
    		require(File::build_path(array("view","view.php")));
    	}
    	
    }

    public static function create(){
        if(isset($_SESSION['login'])){
            $controller='licence';
            $view='create';
            $pagetitle='Creation de Licence';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Detail temoignage';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function created(){
        if (isset($_SESSION['login'])){
          $ModelLicence=new ModelLicence($_POST['nomLicence'],$_POST['idIUT'],$_POST['nomResponsable'],$_POST['prenomResponsable'],$_POST['mailResponsable'],$_POST['siteLicence']);
          $ModelLicence->save();
          $controller='licence';
          $view='created';
          $pagetitle='Licence créé';
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
            $v=ModelLicence::getLicenceById($_GET ['idLicence']);
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
            $idLicence=$_GET ['idLicence'];
            $v=ModelLicence::getLicenceByid($idLicence);
            $controller='licence';
            $view='update';
            $pagetitle='modification de Licence';
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
            $ModelLicence=new ModelLicence($_POST['nomLicence'],$_POST['idIUT'],$_POST['nomResponsable'],$_POST['prenomResponsable'],$_POST['mailResponsable'],$_POST['siteLicence']);
            $ModelLicence->setIdLicence($_GET['idLicence']);
            $ModelLicence->update();
            $controller='licence';
            $view='updated';
            $pagetitle='Licence modifié';
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
