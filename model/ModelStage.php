<?php
require_once File::build_path(array("model","Model.php"));
class ModelStage{
	private $idStage;
	private $intituleStage;
	private $dateDebStage;
	private $dateFinStage;
	private $gratifie;
	private $descriptionStage;
	private $idVille;
	private $nbPlaces;
	private $numSiret;
	private $nomEntreprise;
	private $siteEntreprise;
	private $adresseEntreprise;
	private $telephoneEntreprise;
	private $estAccepte;
	private $nomContact;
	private $prenomContact;
	private $fonctionContact;
	private $telephoneContact;
	private $emailContact;


	public function __construct($i=NULL,$dd=NULL,$df=NULL,$g=NULL,$ds=NULL,$iv=NULL,$np=NULL,$ns=NULL,$ne=NULL,$se=NULL,$ae=NULL,$te=NULL,$ea=NULL,$nc=NULL,$pc=NULL,$fc=NULL,$tc=NULL,$mc=NULL){
		if (!is_null($i) && !is_null($dd) && !is_null($df) && !is_null($g) && !is_null($ds) && !is_null($iv) && !is_null($np)  && !is_null($ns) && !is_null($ne) && !is_null($se) && !is_null($ae) && !is_null($te) && !is_null($ea) && !is_null($nc) && !is_null($pc) && !is_null($fc) && !is_null($tc) && !is_null($ec)){
			$this->intituleStage=$i;
			$this->dateDebStage=$dd;
			$this->dateFinStage=$df;
			$this->gratifie=$g;
			$this->descriptionStage=$ds;
			$this->idVille=$iv;
			$this->nbPlaces=$np;
			$this->numSiret=$ns;
			$this->$nomEntreprise=$ne;
			$this->$siteEntreprise=$se;
			$this->$adresseEntreprise=$ae;
			$this->$telephoneEntreprise=$te;
			$this->$estAccepte=false;
			$this->$nomContact=$nc;
			$this->$prenomContact=$pc;
			$this->$fonctionContact=$fc;
			$this->$telephoneContact=$tc;
			$this->$emailContact=$ec;
		}
	}

	//-------Getters-------------------------

	public function getIdStage(){
		return $this->idStage;
	}

	public function getIntituleStage(){
		return $this->intituleStage;
	}

	public function getDateDebStage(){
		return $this->dateDebStage;
	}

	public function getDateFinStage(){
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

	public function getNbPlaces(){
		return $this->nbPlaces;
	}

	public function getNumSiret(){
		return $this->numSiret;
	}

	public function getNomEntreprise(){
		return $this->nomEntreprise;
	}

	public function getSiteEntreprise(){
		return $this->siteEntreprise;
	}

	public function getAdresseEntreprise(){
		return $this->adresseEntreprise;
	}

	public function getTelephoneEntreprise(){
		return $this->telephoneEntreprise;
	}

	public function getEstAccepte(){
		return $this->estAccepte;
	}

	public function getNomContact(){
		return $this->nomContact;
	}

	public function getPrenomContact(){
		return $this->prenomContact;
	}

	public function getFonctionContact(){
		return $this->fonctionContact;
	}

	public function getTelephoneContact(){
		return $this->telephoneContact;
	}

	public function getEmailContact(){
		return $this->emailContact;
	}

	//------------------Setters-----------------------------------

	public function setIntituleStage($PintituleStage){
		$this->intituleStage=$PintituleStage;
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

	public function setNbPlaces($PnbPlaces){
		$this->nbPlaces=$PnbPlaces;
	}

	public function setNumSiret($PnumSiret){
		$this->numSiret=$PnumSiret;
	}

	public function setNomEntreprise($PnomEntreprise){
		$this->nomEntreprise=$PnomEntreprise;
	}

	public function setSiteEntreprise($PsiteEntreprise){
		$this->siteEntreprise=$PsiteEntreprise;
	}

	public function setAdresseEntreprise($PadresseEntreprise){
		$this->adresseEntreprise=$PadresseEntreprise;
	}

	public function setTelephoneEntreprise($PtelephoneEntreprise){
		$this->telephoneEntreprise=$PtelephoneEntreprise;
	}

	public function setEstAccepte($PestAccepte){
		$this->estAccepte=$PestAccepte;
	}

	public function setNomContact($PnomContact){
		$this->nomContact=$PnomContact;
	}

	public function setPrenomContact($PprenomContact){
		$this->prenomContact=$PprenomContact;
	}
	
	public function setFonctionContact($PfonctionContact){
		$this->fonctionContact=$PfonctionContact;
	}
	
	public function setTelephoneContact($PtelephoneContact){
		$this->telephoneContact=$PtelephoneContact;
	}
	
	public function setEmailContact($PemailContact){
		$this->emailContact=$PemailContact;
	}

	public static function getAllStages(){
		$pdo=Model::$pdo;
		$rep=$pdo->query("SELECT * FROM mon-Stages");
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelStage');
    	$tab_stage = $rep->fetchAll();
    	return $tab_stage;
	}

	public static function getStageById($idStage) {
	    $sql = "SELECT * from mon-Stages WHERE idStage=:idStage";
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
	    $sql = "SELECT * from mon-Stages WHERE intituleStage=:intituleStage";
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

	public static function getStageByEntreprise($nomEntreprise) {
	    $sql = "SELECT * from mon-Stages WHERE nomEntreprise=:nomEntreprise";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "nomEntreprise" => $nomEntreprise,
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
	    $sql = "SELECT * from mon-Stages WHERE dateDebStage=:dateDebStage";
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
	    $sql = "SELECT * from mon-Stages WHERE dateFinStage=:dateFinStage";
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
	    $sql = "SELECT * from mon-Stages WHERE gratifie=:gratifie";
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
	      	"INSERT INTO mon-Stages(idStage,intituleStage,dateDebStage,dateFinStage,gratifie,descriptionStage,idVille,nbPlaces,numSiret,nomEntreprise,siteEntreprise,adresseEntreprise,telephoneEntreprise,estAccepte,nomContact,prenomContact,fonctionContact,telephoneContact,emailContact)
	      	VALUES(:idStage,:intituleStage,:dateDebStage,:dateFinStage,:gratifie,:descriptionStage,:idVille,:nbPlaces,:numSiret,:nomEntreprise,:siteEntreprise,:adresseEntreprise,:telephoneEntreprise,:estAccepte,:nomContact,:prenomContact,:fonctionContact,:telephoneContact,:emailContact))");

	      $values=array(
	        "idStage" => $this->idStage,
	        "intituleStage" => $this->intituleStage,
	        "dateDebStage" => $this->dateDebStage,
	        "dateFinStage" => $this->dateFinStage,
	        "gratifie" => $this->gratifie,
	        "descriptionStage" => $this->descriptionStage,
	        "idVille" => $this->idVille,
	        "nbPlaces" => $this->nbPlaces,
	        "numSiret" => $this->numSiret,
	       	"nomEntreprise" => $this->nomEntreprise,
	       	"siteEntreprise" => $this->siteEntreprise,
	       	"adresseEntreprise" => $this->adresseEntreprise,
	       	"telephoneEntreprise" => $this->telephoneEntreprise,
	       	"estAccepte" => $this->estAccepte,
	       	 "nomContact" => $this->nomContact,
	       	 "prenomContact" => $this->prenomContact,
	       	 "fonctionContact" => $this->fonctionContact,
	       	 "telephoneContact" => $this->telephoneContact,
	       	 "emailContact" => $this->emailContact,
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
	    $req_prep=Model::$pdo->prepare("DELETE FROM mon-Stages WHERE mon-Stages.idStage=:idStage");

	    $values=array(
	      "idStage" => $this->idStage,
	      );
	    $req_prep->execute($values);
	}



}
?>