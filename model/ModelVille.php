<?php
require_once File::build_path(array("model","Model.php"));
class ModelVille{
	private $idVille;
	private $nomVille;
	private $codePostal;
	private $departement;
	private $longitude;
	private $latitude;

	public function getId(){
		return $this->idVille;
	}

	public function getNom(){
		return $this->nomVille;
	}

	public function getCodePostal(){
		return $this->codePostal;
	}

	public function getDepartement(){
		return $this->departement;
	}

	public function getLongitude(){
		return $this->longitude;
	}

	public function getLongitude(){
		return $this->latitude;
	}

	public function setNom($Pnom){
		$this->nomVille=$Pnom;
	}

	public function setCodePostal($PcodePostal){
		$this->codePostal=$PcodePostal;
	}

	public function setDepartement($Pdepartement){
		$this->departement=$Pdepartement;
	}

	public function setLongitude($Plongitude){
		$this->longitude=$Plongitude;
	}

	public function setLongitude($Platitude){
		$this->latitude=$Platitude;
	}

	public function __construct($n=NULL,$c=NULL,$d=NULL,$long=NULL,$lat=NULL){
		if (!is_null($n) && !is_null($c) && !is_null($d) && !is_null($long) && !is_null($lat)){
			$this->nomVille=$n;
			$this->codePostal=$c;
			$this->departement=$d;
			$this->longitude=$long;
			$this->latitude=$lat;
		}
	}

	public static function getAllVilles(){
		$pdo=Model::$pdo;
		$rep=$pdo->query("SELECT * FROM `mon-Villes` ORDER BY nomVille");
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVille');
    	$tab_ville = $rep->fetchAll();
    	return $tab_ville;
	}

	public static function getVilleById($idVille) {
	    $sql = "SELECT * from `mon-Villes` WHERE idVille=:idVille";
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
	    $sql = "SELECT * from `mon-Villes` WHERE nomVille=:nomVille";
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
	    $sql = "SELECT * from `mon-Villes` WHERE codePostal=:codePostal";
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
	    $sql = "SELECT * from `mon-Villes` WHERE departement=:departement";
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
      $req_prep=Model::$pdo->prepare("INSERT INTO `mon-Villes`(idVille,nomVille,codePostal,departement,longitude,latitude)VALUES(NULL,:nomVille,:codePostal,:departement,:longitude,:latitude)");

      $values=array(
        "nomVille" => $this->nomVille,
        "codePostal" => $this->codePostal,
        "departement" => $this->departement
        "longitude" => $this->longitude
        "latitude" => $this->latitude
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
    $req_prep=Model::$pdo->prepare("DELETE FROM `mon-Villes` WHERE `mon-Villes`.idVille=:idVille");

    $values=array(
      "id" => $this->idVille,
      );
    $req_prep->execute($values);
  }


}
?>