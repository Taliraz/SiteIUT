<?php
require_once (File::build_path(array("model","ModelTemoignage.php")));
class ControllerTemoignage{


	public static function readAll() {
        $tab_t = ModelTemoignage::getAllTemoignages();    
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
        if (!empty($_FILES['p_photo']) && is_uploaded_file($_FILES['p_photo']['date_timestamp_get()name'])) {
            $name = $_FILES['p_photo']['name'];
            $pic_path = File::build_path(array("img","$name"));
            if (!move_uploaded_file($_FILES['p_photo']['tmp_name'], $pic_path)) {
              echo "La copie a échoué";
            }
        }
        $idTemoignage=NULL;
        $photoTemoignage="http://webinfo.iutmontp.univ-montp2.fr/~armangaus/SiteIUT/img/".$name;
        $ModelTemoignage=new ModelTemoignage($idTemoignage,$_POST['p_titreTemoignage'], $photoTemoignage, $_POST['p_contenuTemoignage'],$_POST['p_anneeEtude'],$_POST['p_theme'],$_POST['p_nomEtudiant'],$_POST['p_prenomEtudiant'],$_POST['p_idIUT']);
        $ModelTemoignage->save();
        $controller='temoignage';
        $view='created';
        $pagetitle='Temoignage créé';
        require(File::build_path(array("view","view.php")));
    }

    public static function update(){
        $controller='temoignage';
        $view='update';
        $pagetitle='Modification du témoignage de témoignage';
        $v=ModelTemoignage::getTemoignageById($_GET['idTemoignage']);
        require(File::build_path(array("view","view.php")));
    }

    public static function updated(){
        if (!empty($_FILES['photo']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $name = $_FILES['photo']['name'];
            $pic_path = File::build_path(array("img","$name"));
            if (!move_uploaded_file($_FILES['photo']['tmp_name'], $pic_path)) {
              echo "La copie a échoué";
            }
        }
        $idTemoignage=$_GET["idTemoignage"];
        $photoTemoignage="http://webinfo.iutmontp.univ-montp2.fr/~armangaus/SiteIUT/img/".$name;
        $ModelTemoignage=new ModelTemoignage($idTemoignage,$_POST['titreTemoignage'], $photoTemoignage, $_POST['contenuTemoignage'],$_POST['anneeEtude'],$_POST['theme'],$_POST['nomEtudiant'],$_POST['prenomEtudiant'],$_POST['idIUT']);
        $ModelTemoignage->update();
        $controller='temoignage';
        $view='updated';
        $pagetitle='Temoignage modifié';
        require(File::build_path(array("view","view.php")));
    }

    public static function delete(){
        if(isset($_SESSION['login'])){
            $v=ModelTemoignage::getTemoignageById($_GET ['idTemoignage']);
            $v->delete();
            self::readAll();
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }
}
?>