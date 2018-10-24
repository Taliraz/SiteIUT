<?php 
require(File::build_path(array("model","Model.php")));

class ModelArticle {
    
    protected $idArticle;
    protected $idPage;
    protected $contenuArticle;
    
    public function __construct($idPage = NULL, $contenuArticle = NULL){
        if(!is_null($idPage) && !is_null($contenuArticle)){
            $this->idPage = $idPage;
            $this->contenuArticle = $contenuArticle; 
        }
    }
    
    public function getIdArticle() {
        return $this->idArticle;
    }

    public function getIdPage() {
        return $this->idPage;
    }
    
    public function getContenuArticle() {
        return $this->contenuArticle;
    }
    
    public function setIdPage($idPage){
        $this->idPage = $idPage;
    }
    
    public function setContenuArticle($contenuArticle){
        $this->contenuArticle = $contenuArticle;
    }
      
    public static function getArticleAvecId($idArticle){
        $req = Model::$pdo->prepare('SELECT * FROM P_Articles WHERE idArticle = :idArticle');
        $req->execute(array(':idArticle'=>$idArticle));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelArticle');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - Article non trouvé"; }
    }
    
    public static function getAll(){
        $req = Model::$pdo->query ("SELECT * FROM P_Articles");
        $req->setFetchMode(PDO::FETCH_CLASS, $ModelArticle);
        $row = $req->fetchAll();
        return $row;    
    }
    
    
    public function saveArticle(){
        $erreur = "Article déjà présent dans la base de données";
        $idArticle = htmlspecialchars($this->idArticle);
        $idPage = htmlspecialchars($this->idPage);
        $contenuArticle = htmlspecialchars($this->contenuArticle);
        $data = array(':idPage'=>$idPage, ':contenuArticle'=>$contenuArticle);
        $reqVerif = Model::$pdo->prepare("SELECT idArticle FROM P_Articles WHERE idArticle = :idArticle");
        $reqVerif->execute(array(':idArticle'=>$idArticle));
        $resVerif = $reqVerif->rowcount();
        if($resVerif > 0){
            return $erreur;
        }
        else {
            $insert = Model::$pdo->prepare("INSERT INTO P_Articles(idPage,contenuArticle) VALUES(:idPage,:contenuArticle)");
            $insert->execute($data);
            $getId = Model::$pdo->prepare("SELECT idArticle FROM P_Articles WHERE idArticle = :idArticle");
            $getId->execute(array(':idArticle'=>$idArticle));
            $arrayRetour = $getId->fetch();
            $idRetour = $arrayRetour[0];
            
            return $idRetour;
        }
    }
}
?>