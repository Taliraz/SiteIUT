<?php
require_once File::build_path(array("model","Model.php"));
class ModelStage{
	private $id;
	private $contenu;
	private $datePublication;
	private $theme;
	private $etudiant;

	public function __construct($c=NULL,$d=NULL,$t=NULL,$e=NULL){
		if (!is_null($c) && !is_null($d) && !is_null($t) && !is_null($e)){
			$this->contenu=$c;
			$this->datePublication=$d;
			$this->theme=$t;
			$this->etudiant=$e;
		}
	}

	public function getId(){
		return $this->id;
	}

	public function getContenu(){
		return $this->contenu;
	}

	public function getDatePublication(){
		return $this->datePublication;
	}

	public function getTheme(){
		return $this->theme;
	}

	public function getEtudiant(){
		return $this->etudiant;
	}

	public function setContenu($Pcontenu){
		$this->contenu=$Pcontenu;
	}

	public function setDatePublication($PdatePublication){
		$this->datePublication=$PdatePublication;
	}

	public function setTheme($Ptheme){
		$this->theme=$Ptheme;
	}

	public function setEtudiant($Petudiant){
		$this->etudiant=$Petudiant;
	}

	public static function getAllTemoignages(){
		$pdo=Model::$pdo;
		$rep=$pdo->query("SELECT * FROM P_Temoignages");
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelTemoignage');
    	$tab_temoignage = $rep->fetchAll();
    	return $tab_temoignage;
	}

	public static function getTemoignageById($id) {
	    $sql = "SELECT * from P_Temoignages WHERE idTemoignage=:idTemoignage";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "idTemoignage" => $id,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelTemoignage');
	    $tab_temoignage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_temoignage[0];
	}

	public static function getTemoignageByDatePublication($datePublication) {
	    $sql = "SELECT * from P_Temoignages WHERE datePublication=:datePublication";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "datePublication" => $datePublication,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelTemoignage');
	    $tab_temoignage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_temoignage;
	}

	public static function getTemoignageByTheme($theme) {
	    $sql = "SELECT * from P_Temoignages WHERE theme=:theme";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "theme" => $theme,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelTemoignage');
	    $tab_temoignage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_temoignage;
	}

	public static function getTemoignageByEtudiant($etudiant) {
	    $sql = "SELECT * from P_Temoignages WHERE idEtudiant=:idEtudiant";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "idEtudiant" => $etudiant->getId(),
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelTemoignage');
	    $tab_temoignage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_temoignage;
	}

	public function save(){
    try{
      $req_prep=Model::$pdo->prepare("INSERT INTO P_Villes(idTemoignage, contenuTemoignage, datePublication, theme, idEtudiant)VALUES(:idTemoignage, :contenuTemoignage, :datePublication, :theme, :idEtudiant)");

      $values=array(
        "idTemoignage" => $this->id,
        "contenuTemoignage" => $this->contenu,
        "datePublication" => $this->datePublication,
        "theme" => $this->theme,
        "idEtudiant" => $this->etudiant->getId()
        );
      $req_prep->execute($values);
    }
    catch(PDOException $e){
      if ($e->getCode()==23000){
        echo('<b>ERREUR: Le Temoignage existe déjà</b>');
        return false;
      }
    }

	public function delete(){
    $req_prep=Model::$pdo->prepare("DELETE FROM P_Temoignages WHERE P_Temoignages.idTemoignage=:id");

    $values=array(
      "id" => $this->id,
      );
    $req_prep->execute($values);
  }
}

?>