<?php
require_once (File::build_path(array("model","ModelArticle.php")));
class ControllerArticle{


	public static function readAll() {
        $tab_v = ModelArticle::getAllArticles();    
        $controller='article';
        $view='list';
        $pagetitle='liste des Articles';
        require (File::build_path(array("view","view.php"))); 
    }

    public static function read(){
    	$v=ModelArticle::getArticleById($_GET ['idArticle']);
    	if ($v==false){
            $controller='article';
            $view='erreur';
            $pagetitle='Erreur article';
    		require (File::build_path(array("view","view.php")));
    	}
    	else{
            $controller='article';
            $view='detail';
            $pagetitle='Detail article';
    		require(File::build_path(array("view","view.php")));
    	}
    	
    }

    public static function create(){
        if(isset($_SESSION['login'])){
            $controller='article';
            $view='create';
            $pagetitle='Creation de article';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function created(){
        if (isset($_SESSION['login'])){
            $contenu = nl2br($_POST['contenu']);
            $ModelStage=new ModelArticle(NULL,$_POST['nom'],$contenu);
            $ModelStage->save();
            $controller='article';
            $view='created';
            $pagetitle='Article créée';
            require(File::build_path(array("view","view.php")));
      }
      else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function delete(){
        if(isset($_SESSION['login'])){
            $v=ModelArticle::getArticleById($_GET ['idArticle']);
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

        public static function update(){
        $idArticle=$_GET ['idArticle'];
        if (isset($_SESSION['login'])){
            $v=ModelArticle::getArticleById($idArticle);
            $controller='article';
            $view='update';
            $pagetitle='modification de article';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function updated(){
        $idArticle=$_GET['idArticle'];
        if (isset($_SESSION['login'])){
            $contenu = nl2br($_POST['contenu']);
            $ModelArticle=new ModelArticle($idArticle,$_POST['nom'],$contenu);
            $ModelArticle->update();
            $controller='article';
            $view='updated';
            $pagetitle='Article modifié';
            require(File::build_path(array("view","view.php")));
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
