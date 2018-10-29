<?php
require_once File::build_path(array("model","Model.php"));
class ModelVille{
	private $idVille;
	private $nomVille;
	private $codePostal;
	private $departement;

	public function getIdVille(){
		return $this->idVille;
	}

	public function getNomVille(){
		return $this->nomVille;
	}

	public function getCodePostal(){
		return $this->codePostal;
	}

	public function getDepartement(){
		return $this->departement;
	}

	public function setNomVille($PnomVille){
		$this->nomVille=$PnomVille;
	}

	public function setCodePostal($PcodePostal){
		$this->codePostal=$PcodePostal;
	}

	public function setDepartement($Pdepartement){
		$this->departement=$Pdepartement;
	}

	public function __construct($n=NULL,$c=NULL,$d=NULL){
		if (!is_null($n) && !is_null($c) && !is_null($d)){
			$this->nomVille=$n;
			$this->codePostal=$c;
			$this->departement=$d;
		}
	}

	public static function getAllVilles(){
		$pdo=Model::$pdo;
		$rep=$pdo->query("SELECT * FROM P_Villes");
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVille');
    	$tab_ville = $rep->fetchAll();
    	return $tab_ville;
	}

	public static function getVilleById($idVille) {
	    $sql = "SELECT * FROM P_Villes WHERE idVille=:idVille";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "idVille" => $idVille,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVille');
	    $tab_ville = $req_prep->fetchAll();
	    if (empty($tab_ville)){
	        return false;
	    }
	    return $tab_ville[0];
	}

	public static function getVilleByNom($nomVille) {
	    $sql = "SELECT * from P_Villes WHERE nomVille=:nomVille";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "nomVille" => $nomVille,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVille');
	    $tab_ville = $req_prep->fetchAll();
	    if (empty($tab_ville)){
	        return false;
	    }
	    return $tab_ville;
	}

	public static function getVilleByCodePostal($codePostal) {
	    $sql = "SELECT * from P_Villes WHERE codePostal=:codePostal";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "codePostal" => $codePostal,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVille');
	    $tab_ville = $req_prep->fetchAll();
	    if (empty($tab_ville)){
	        return false;
	    }
	    return $tab_ville;
	}

	public static function getVilleByDepartement($departement) {
	    $sql = "SELECT * from P_Villes WHERE departement=:departement";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "departement" => $departement,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVille');
	    $tab_ville = $req_prep->fetchAll();
	    if (empty($tab_ville)){
	        return false;
	    }
	    return $tab_ville;
	}

	public function save(){
    try{
      $req_prep=Model::$pdo->prepare("INSERT INTO P_Villes(nomVille,codePostal,departement)VALUES(:nomVille,:codePostal,:departement)");

      $values=array(
        "nomVille" => $this->nomVille,
        "codePostal" => $this->codePostal,
        "departement" => $this->departement
        );
      $req_prep->execute($values);
    }
    catch(PDOException $e){
      if ($e->getCode()==23000){
        echo('<b>ERREUR: La ville existe déjà</b>');
        return false;
      }
    }

  }

  public function delete(){
    $req_prep=Model::$pdo->prepare("DELETE FROM P_Villes WHERE P_Villes.idVille=:idVille");

    $values=array(
      "idVille" => $this->idVille,
      );
    $req_prep->execute($values);
  }


}
?>