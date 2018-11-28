<?php 
require(File::build_path(array("model","Model.php")));

class ModelCategorie {
    
    protected $idCategorie;
    protected $nomCategorie;
    protected $idCategorieParent;
    protected $lien;
    
    public function __construct($nomCategorie = NULL,$idCategorieParent = NULL, $lien = NULL){
        if(!is_null($nomCategorie) &&!is_null($idCategorieParent) && !is_null($lien)){
             $this->nomCategorie = $nomCategorie;
            $this->idCategorieParent = $idCategorieParent;
            $this->lien = $lien;
        }
    }
    
    public function getIdCategorie() {
        return $this->idCategorie;
    }

    public function getNomCategorie() {
        return $this->nomCategorie;
    }
    
    public function getIdCategorieParent() {
        return $this->idCategorieParent;
    }
    
    public function getLien() {
        return $this->lien;
    }

    public function setNomCategorie($nomCategorie){
        $this->nomCategorie = $nomCategorie;
    }
    
    public function setIdCategorieParent($idCategorieParent){
        $this->idCategorieParent = $idCategorieParent;
    }
    
    public function setLien($lien){
        $this->lien = $lien;
    }
      
    
    public static function getCategorieAvecId($idCategorie){
        $req = Model::$pdo->prepare('SELECT * FROM P_Categories WHERE idCategorie = :idCategorie');
        $req->execute(array(':idCategorie'=>$idCategorie));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelCategorie');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - Catégorie non trouvé"; }
    }
    
    public static function getAll(){
        $req = Model::$pdo->query ("SELECT * FROM P_Categories");
        $req->setFetchMode(PDO::FETCH_CLASS, $ModelCategorie);
        $row = $req->fetchAll();
        return $row;    
    }
    
    
    public function saveCategorie(){
        $erreur = "Catégorie déjà présent dans la base de données";
        $idCategorie = htmlspecialchars($this->idCategorie);
        $nomCategorie = htmlspecialchars($this->nomCategorie);
        $idCategorieParent = htmlspecialchars($this->idCategorieParent);
        $lien = htmlspecialchars($this->lien);
        $data = array(':nomCategorie'=>$nomCategorie, ':idCategorieParent'=>$idCategorieParent, ':lien'=>$lien);
        $reqVerif = Model::$pdo->prepare("SELECT idCategorie FROM P_Categories WHERE idCategorie = :idCategorie");
        $reqVerif->execute(array(':idCategorie'=>$idCategorie));
        $resVerif = $reqVerif->rowcount();
        if($resVerif > 0){
            return $erreur;
        }
        else {
            $insert = Model::$pdo->prepare("INSERT INTO P_Categories(nomCategorie, idCategorieParent,lien) VALUES(:nomCategorie,:idCategorieParent,:lien");
            $insert->execute($data);
            $getId = Model::$pdo->prepare("SELECT idCategorie FROM P_Categories WHERE idCategorie = :idCategorie");
            $getId->execute(array(':idCategorie'=>$idCategorie));
            $arrayRetour = $getId->fetch();
            $idRetour = $arrayRetour[0];
            
            return $idRetour;
        }
    }
}
?>