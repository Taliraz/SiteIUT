<?php 
class ModelArticle {
    
    protected $idArticle;
    protected $nomArticle;
    protected $contenuArticle;
    
    public function __construct($idArticle = NULL, $nomArticle = NULL, $contenuArticle = NULL){
        if(!is_null($idArticle) && !is_null($nomArticle) && !is_null($contenuArticle)){
            $this->idArticle = $idArticle;
            $this->nomArticle = $nomArticle;
            $this->contenuArticle = $contenuArticle; 
        }
    }
    
    public function getIdArticle() {
        return $this->idArticle;
    }

    public function getNomArticle() {
        return $this->nomArticle;
    }
    
    public function getContenuArticle() {
        return $this->contenuArticle;
    }
    
    public function setNomArticle($nomArticle){
        $this->nomArticle = $nomArticle;
    }
    
    public function setContenuArticle($contenuArticle){
        $this->contenuArticle = $contenuArticle;
    }
      
    public static function getArticleById($idArticle){
        $req = Model::$pdo->prepare('SELECT * FROM `mon-Articles` WHERE idArticle = :idArticle');
        $req->execute(array(':idArticle'=>$idArticle));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelArticle');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - Article non trouvé"; }
    }
    
    public static function getAllArticles(){
        $req = Model::$pdo->query ("SELECT * FROM `mon-Articles`");
        $req->setFetchMode(PDO::FETCH_CLASS, "ModelArticle");
        $row = $req->fetchAll();
        return $row;    
    }
    
    
    public function save(){
        $erreur = "Article déjà présent dans la base de données";
        $idArticle = htmlspecialchars($this->idArticle);
        $nomArticle = htmlspecialchars($this->nomArticle);
        $contenuArticle = htmlspecialchars($this->contenuArticle);
        $data = array(':nomArticle'=>$nomArticle, ':contenuArticle'=>$contenuArticle);
        $reqVerif = Model::$pdo->prepare("SELECT idArticle FROM `mon-Articles` WHERE idArticle = :idArticle");
        $reqVerif->execute(array(':idArticle'=>$idArticle));
        $resVerif = $reqVerif->rowcount();
        if($resVerif > 0){
            return $erreur;
        }
        else {
            $insert = Model::$pdo->prepare("INSERT INTO `mon-Articles`(idArticle,nomArticle,contenuArticle) VALUES(NULL,:nomArticle,:contenuArticle)");
            $insert->execute($data);
            $getId = Model::$pdo->prepare("SELECT idArticle FROM `mon-Articles` WHERE idArticle = :idArticle");
            $getId->execute(array(':idArticle'=>$idArticle));
            $arrayRetour = $getId->fetch();
            $idRetour = $arrayRetour[0];
            
            return $idRetour;
        }
    }

    public function delete(){
    $req_prep=Model::$pdo->prepare("DELETE FROM `mon-Articles` WHERE `mon-Articles`.idArticle=:idArticle");

    $values=array(
      "idArticle" => $this->idArticle,
      );
    $req_prep->execute($values);
  }

    public function update($data){
        $req_prep=Model::$pdo->prepare("UPDATE `mon-Articles` SET nomArticle=:nomArticle,contenuArticle=:contenuArticle WHERE idArticle=:idArticle");

        $values=array(
          "idArticle"=>$this->idArticle,
          "nomArticle" => $this->nomArticle,
          "contenuArticle" => $this->contenuArticle
          );
        $req_prep->execute($values);

      }
}
?>