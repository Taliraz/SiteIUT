<?php
require_once File::build_path(array("model","Model.php"));
class ModelStage{
	private $idStage;
	private $intituleStage;
	private $idEntreprise;
	private $dateDebStage;
	private $dateFinStage;
	private $gratifie;
	private $descriptionStage;
	private $idVille;
	private $idContact;
	private $nbPlaces;


	public function __construct($i=NULL,$e=NULL,$dd=NULL,$df=NULL,$g=NULL,$ds=NULL,$iv=NULL,$ic=NULL,$nP=NULL){
		if (!is_null($i) && !is_null($e) && !is_null($dd) && !is_null($df) && !is_null($r)){
			$this->intituleStage=$i;
			$this->idEntreprise=$e;
			$this->dateDebStage=$dd;
			$this->dateFinStage=$df;
			$this->gratifie=$g;
			$this->descriptionStage=$ds;
			$this->idVille=$iv;
			$this->idContact=$ic;
			$this->nbPlaces=$nP;
		}
	}

	public function getIdStage(){
		return $this->idStage;
	}

	public function getIntituleStage(){
		return $this->intituleStage;
	}

	public function getIdEntreprise(){
		return $this->idEntreprise;
	}

	public function getDateDebStage(){
		return $this->dateDebStage;
	}

	public function getDateFin(){
		return $this->dateFinStage;
	}

	public function getGratifie(){
		return $this->gratifie;
	}

	public function getDescriptionStage(){
		return $this->descriptionStage;
	}

	public function getIdVille(){
		return $this->idVille;
	}

	public function getIdContact(){
		return $this->idContact;
	}

	public function getNbPlaces(){
		return $this->nbPlaces;
	}

	public function setIntituleStage($PintituleStage){
		$this->intituleStage=$PintituleStage;
	}

	public function setIdEntreprise($PidEntreprise){
		$this->idEntreprise=$PidEntreprise;
	}

	public function setDateDebStage($PdateDebStage){
		$this->dateDebStage=$PdateDebStage;
	}

	public function setDateFinStage($PdateFinStage){
		$this->dateFinStage=$PdateFinStage;
	}

	public function setGratifie($Pgratifie){
		$this->gratifie=$Pgratifie;
	}

	public function setDescriptionStage($PdescriptionStage){
		$this->descriptionStage=$PdescriptionStage;
	}

	public function setIdVille($PidVille){
		$this->idVille=$PidVille;
	}

	public function setIdContact($PidContact){
		$this->idContact=$PidContact;
	}

	public function setNbPlaces($PnbPlaces){
		$this->nbPlaces=$PnbPlaces;
	}

	public static function getAllStages(){
		$pdo=Model::$pdo;
		$rep=$pdo->query("SELECT * FROM P_Stages");
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
    	$tab_stage = $rep->fetchAll();
    	return $tab_stage;
	}

	public static function getStageById($idStage) {
	    $sql = "SELECT * from P_Stages WHERE idStage=:idStage";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "idStage" => $idStage,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_stage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage[0];
	}

	public static function getStageByIntitule($intituleStage) {
	    $sql = "SELECT * from P_Stages WHERE intituleStage=:intituleStage";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "intituleStage" => $intituleStage,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_stage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public static function getStageByEntreprise($idEntreprise) {
	    $sql = "SELECT * from P_Stages WHERE idEntreprise=:idEntreprise";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "idEntreprise" => $idEntreprise,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_stage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public static function getStageByDateDeb($dateDebStage) {
	    $sql = "SELECT * from P_Stages WHERE dateDebStage=:dateDebStage";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "dateDebStage" => $dateDebStage,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_stage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public static function getStageByDateFin($dateFinStage) {
	    $sql = "SELECT * from P_Stages WHERE dateFinStage=:dateFinStage";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "dateFinStage" => $dateFinStage,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_stage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public static function getStageByGratifie($gratifie) {
	    $sql = "SELECT * from P_Stages WHERE gratifie=:gratifie";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "gratifie" => $gratifie,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
	    $tab_stage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_stage;
	}

	public function save(){
	    try{
	      $req_prep=Model::$pdo->prepare(
	      	"INSERT INTO P_Villes(idStage,intituleStage,idEntreprise,dateDebStage,dateFinStage,gratifie,descriptionStage,idVille,idContact,nbPlaces)
	      	VALUES(:idStage,:intituleStage,:idEntreprise,:dateDebStage,:dateFinStage,:gratifie,:descriptionStage,:idVille,:idContact,:nbPlaces)");

	      $values=array(
	        "idStage" => $this->idStage,
	        "intituleStage" => $this->intituleStage,
	        "idEntreprise" => $this->idEntreprise,
	        "dateDebStage" => $this->dateDebStage,
	        "dateFinStage" => $this->dateFinStage,
	        "gratifie" => $this->gratifie,
	        "descriptionStage" => $this->descriptionStage,
	        "idVille" => $this->idVille,
	        "idContact" => $this->idContact,
	        "nbPlaces" => $this->nbPlaces,
	        );
	      $req_prep->execute($values);
	    }
	    catch(PDOException $e){
	      if ($e->getCode()==23000){
	        echo('<b>ERREUR: Le Stage existe déjà</b>');
	        return false;
	      }
	    }
	}

    public function delete(){
	    $req_prep=Model::$pdo->prepare("DELETE FROM P_Stages WHERE P_Stages.idStage=:idStage");

	    $values=array(
	      "idStage" => $this->idStage,
	      );
	    $req_prep->execute($values);
	}



}
?>