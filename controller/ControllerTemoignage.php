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
        if (!empty($_FILES['photo']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $name = $_FILES['photo']['name'];
            $pic_path = File::build_path(array("img","$name"));
            if (!move_uploaded_file($_FILES['photo']['tmp_name'], $pic_path)) {
              echo "La copie a échoué";
            }
        }
        else $name="";
        $idTemoignage=NULL;
        $photoTemoignage="http://webinfo.iutmontp.univ-montp2.fr/~armangaus/SiteIUT/img/".$name;
        $ModelTemoignage=new ModelTemoignage($idTemoignage,$_POST['titreTemoignage'], $photoTemoignage, $_POST['contenuTemoignage'],$_POST['anneeEtude'],$_POST['nomEtudiant'],$_POST['prenomEtudiant'],$_POST['idIUT']);
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
        $idTemoignage=$_GET["idTemoignage"];
        if (!empty($_FILES['photo']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
            $name = $_FILES['photo']['name'];
            $pic_path = File::build_path(array("img","$name"));
            if (!move_uploaded_file($_FILES['photo']['tmp_name'], $pic_path)) {
              echo "La copie a échoué";
            }
            $photoTemoignage="http://webinfo.iutmontp.univ-montp2.fr/~armangaus/SiteIUT/img/".$name;
        }
        else {
            $temoignage=ModelTemoignage::getTemoignageById($idTemoignage);
            $photoTemoignage=$temoignage->getPhotoTemoignage();
        }
        $ModelTemoignage=new ModelTemoignage($idTemoignage,$_POST['titreTemoignage'], $photoTemoignage, $_POST['contenuTemoignage'],$_POST['anneeEtude'],$_POST['nomEtudiant'],$_POST['prenomEtudiant'],$_POST['idIUT'],$_POST['accepte']);
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

    public static function accept(){
        if(isset($_SESSION['login'])){
            $v=ModelTemoignage::getTemoignageById($_GET ['idTemoignage']);
            $v->accepter();
            $v->update();
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