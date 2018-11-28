<?php
require_once  (File :: build_path ( array ( " model " , " Model.php")));

class ModelPage {

private $idPage;
private $titre;
private $adressePage;
private $idCategorie;

public function getIdPage(){
  return $this->idPage;
}

public function getTitrePage(){
  return $this->titre;
}

public function getAdressePage(){
  return $this->adressePage;
}

public function getIdCategoriePage(){
  return $this->idCategorie
}

public function setTitre($titre){
  $this->titre = $titre;
}

public function setAdressePage($adressePage){
  $this->adressePage = $adressePage;
}

  public function __construct($t=NULL,$a=NULL,$id=NULL){
        if(!is_null($t) && !is_null($a) && is_null($id)){
              $this->titre = $t;
              $this->adressePage = $a;
              $this->idCategorie = $id;
        }

  }

  public static function getAllPage(){
    $req = Model::$pdo->query(SELECT * FROM P_Page);
    $req ->setFetchMode(PDO::FETCH_CLASS,'ModelPage');
    $row = $req->fetchAll();
    return $row;
  }
  
  public static function getPageById($idPage){
	  $sql = "SELECT * FROM P_Page WHERE idPage=:idPage"
	  $req_prep = Model::$pdo->prepare($sql);
	  
	  $values = array (
		"idPage" => $idPage,
	  
	  );
	  
	  $req_prep->execute($values);
	  $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelPage');
	  $tab_page = $req_prep->fetchAll();
	  if(empty($tab_page)){
		  return false;
	  }
	  return $tab_page[0];
  }

  public function save(){
    $erreur = "Page deja présente dans la base de données"

    $idPage = htmlspecialchars($this->idPage);
    $titre = htmlspecialchars($this->titre);
    $adressePage = htmlspecialchars($this->adressePage);
    $idCategorie = htmlspecialchars($this->idCategorie);
    $data = array(':titre'=>$titre, ':adressePage'=>$adressePage, ':idCategorie'=>$idCategorie);
    $reqVerif = Model::$pdo->prepare("SELECT idPage FROM P_Page WHERE idPage = :idPage");
    $reqVerif->execute(array(':idArticle'=>$idArticle));
    $resVerif = $reqVerif->rowcount();
    if($resVerif > 0){
        return $erreur;
    }

    else {
        $insert = Model::$pdo->prepare("INSERT INTO P_Page(titre,adressePage,idCategorie) VALUES(:titre,:adressePage,:idCategorie)");
        $insert->execute($data);
        $getId = Model::$pdo->prepare("SELECT idPage FROM P_Page WHERE idPage = :idPage ");
        $getId->execute(array(':idPage'=>$idPage));
        $arrayRetour = $getId->fetch();
        $idRetour = $arrayRetour[0];

        return $idRetour;
    }
  }
	public function delete(){
		$req_prep=Model::$pdo->prepare("DELETE FROM P_Page WHERE P_Page.idPage=:idPage");
		
		$values = array(
			"idPage" => $this->idPage,
		);
		$req_prep->execute($values);
		
	}	
}
?>
