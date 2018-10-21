<?php
require_once File::build_path(array("model","Model.php"));
class ModelStage{
	private $id;
	private $intitule;
	private $entreprise;
	private $dateDeb;
	private $dateFin;
	private $remunere;


	public function __construct($i=NULL,$e=NULL,$dd=NULL,$df=NULL,$r=NULL){
		if (!is_null($i) && !is_null($e) && !is_null($dd) && !is_null($df) && !is_null($r)){
			$this->intitule=$i;
			$this->entreprise=$e;
			$this->dateDeb=$dd;
			$this->dateFin=$df;
			$this->remunere=$r;
		}
	}

	public function getId(){
		return $this->id;
	}

	public function getIntitule(){
		return $this->intitule;
	}

	public function getEntreprise(){
		return $this->entreprise;
	}

	public function getDateDeb(){
		return $this->dateDeb;
	}

	public function getDateFin(){
		return $this->dateFin;
	}

	public function getRemunere(){
		return $this->remunere;
	}

	public function setIntitule($Pintitule){
		$this->intitule=$Pintitule;
	}

	public function setEntreprise($Pentreprise){
		$this->entreprise=$Pentreprise;
	}

	public function setDateDeb($PdateDeb){
		$this->dateDeb=$PdateDeb;
	}

	public function setDateFin($PdateFin){
		$this->nom=$Pnom;
	}

	public function setEntreprise($Pentreprise){
		$this->entreprise=$Pentreprise;
	}

	public static function getAllStages(){
		$pdo=Model::$pdo;
		$rep=$pdo->query("SELECT * FROM P_Stages");
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
    	$tab_stage = $rep->fetchAll();
    	return $tab_stage;
	}

	public static function getStageById($id) {
	    $sql = "SELECT * from P_Stages WHERE idStage=:idStage";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "idStage" => $id,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_stage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage[0];
	}

	public static function getStageByIntitule($intitule) {
	    $sql = "SELECT * from P_Stages WHERE intituleStage=:intitule";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "intitule" => $intitule,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_ville = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public static function getStageByEntreprise($entreprise) {
	    $sql = "SELECT * from P_Stages WHERE idEntreprise=:idEntreprise";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "idEntreprise" => $entreprise->getId(),
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_ville = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public static function getStageByDateDeb($dateDeb) {
	    $sql = "SELECT * from P_Stages WHERE dateDebStage=:dateDeb";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "dateDeb" => $dateDeb,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_ville = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public static function getStageByDateFin($dateFin) {
	    $sql = "SELECT * from P_Stages WHERE dateFinStage=:dateFin";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "dateFin" => $dateFin,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_ville = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public static function getStageByRemunere($remunere) {
	    $sql = "SELECT * from P_Stages WHERE remunere=:remunere";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "remunere" => $remunere,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_ville = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public function save(){
    try{
      $req_prep=Model::$pdo->prepare("INSERT INTO P_Villes(idStage,intituleStage,idEntreprise,dateDebStage,dateFinStage,remunere)VALUES(:id,:intitule,:idEntreprise,dateDeb,dateFin,remunere)");

      $values=array(
        "id" => $this->id,
        "intitule" => $this->intitule,
        "idEntreprise" => $this->entreprise->getId(),
        "dateDeb" => $this->dateDeb,
        "dateFin" => $this->dateFin,
        "remunere" => $this->remunere
        );
      $req_prep->execute($values);
    }
    catch(PDOException $e){
      if ($e->getCode()==23000){
        echo('<b>ERREUR: Le Stage existe déjà</b>');
        return false;
      }
    }

    public function delete(){
    $req_prep=Model::$pdo->prepare("DELETE FROM P_Stages WHERE P_Stages.id=:id");

    $values=array(
      "id" => $this->id,
      );
    $req_prep->execute($values);
  }



}
?>