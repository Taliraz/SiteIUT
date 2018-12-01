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
        $controller='article';
        $view='create';
        $pagetitle='Creation de article';
        require(File::build_path(array("view","view.php")));
    }

    public static function created(){
      $ModelStage=new ModelArticle($_POST['nom'],$_POST['contenu']);
      $ModelStage->save();
      $controller='article';
      $view='created';
      $pagetitle='Article créée';
      require(File::build_path(array("view","view.php")));
    }

    public static function delete(){
        $v=ModelArticle::getArticleById($_GET ['idArticle']);
        $v->delete();
        self::readAll();
    }
}
?>
