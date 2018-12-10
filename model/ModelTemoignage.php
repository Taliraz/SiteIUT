<?php
require_once File::build_path(array("model","Model.php"));
class ModelTemoignage{
	private $idTemoignage;
	private $titreTemoignage;
    private $photoTemoignage;
	private $contenuTemoignage;
	private $anneeEtude;
	private $theme;
	private $nomEtudiant;
	private $prenomEtudiant;
	private $idIUT;

	public function __construct($t=NULL, $p=NULL, $c=NULL, $d=NULL, $th=NULL, $ne=NULL, $pe=NULL, $i=NULL){
		if (!is_null($t) && !is_null($p) && !is_null($c) && !is_null($d) && !is_null($th) && !is_null($ne) && !is_null($pe) && !is_null($i)){
			$this->titreTemoignage=$t;
            $this->photoTemoignage=$p;
			$this->contenuTemoignage=$c;
			$this->anneeEtude=$d;
			$this->theme=$th;
			$this->nomEtudiant=$ne;
			$this->prenomEtudiant=$pe;
			$this->idIUT=$i;
		}
	}

	public function getIdTemoignage(){
		return $this->idTemoignage;
	}

	public function getTitreTemoignage(){
		return $this->titreTemoignage;
	}
    
    public function getPhotoTemoignage(){
		return $this->photoTemoignage;
	}

	public function getContenuTemoignage(){
		return $this->contenuTemoignage;
	}

	public function getanneeEtude(){
		return $this->anneeEtude;
	}

	public function getTheme(){
		return $this->theme;
	}

	public function getNomEtudiant(){
		return $this->nomEtudiant;
	}

	public function getPrenomEtudiant(){
		return $this->prenomEtudiant;
	}

	public function getIdIUT(){
		return $this->idIUT;
	}

    
	public function setTitreTemoignage($PtitreTemoignage){
		$this->titreTemoignage=$PtitreTemoignage;
	}
    
	public function setPhotoTemoignage($PphotoTemoignage){
		$this->photoTemoignage=$PphotoTemoignage;
	}

	public function setContenuTemoignage($PcontenuTemoignage){
		$this->contenuTemoignage=$PcontenuTemoignage;
	}

	public function setanneeEtude($PanneeEtude){
		$this->anneeEtude=$PanneeEtude;
	}

	public function setTheme($Ptheme){
		$this->theme=$Ptheme;
	}

	public function setNomEtudiant($PnomEtudiant){
		$this->nomEtudiant=$PnomEtudiant;
	}

	public function setPrenomEtudiant($PprenomEtudiant){
		$this->prenomEtudiant=$PprenomEtudiant;
	}

	public function setIdIUT($PidIUT){
		$this->idIUT=$PidIUT;
	}

	public static function getAllTemoignages(){
		$pdo=Model::$pdo;
		$rep=$pdo->query("SELECT * FROM `mon-Temoignages`");
    	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelTemoignage');
    	$tab_temoignage = $rep->fetchAll();
    	return $tab_temoignage;
	}

	public static function getTemoignageById($idTemoignage) {
	    $sql = "SELECT * from `mon-Temoignages` WHERE idTemoignage=:idTemoignage";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "idTemoignage" => $idTemoignage
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelTemoignage');
	    $tab_temoignage = $req_prep->fetchAll();
	    if (empty($tab_temoignage)){
	        return false;
	    }
	    return $tab_temoignage[0];
	}

	public static function getTemoignageByTitre($titre) {
	    $sql = "SELECT * from `mon-Temoignages` WHERE titreTemoignage=:titreTemoignage";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "titreTemoignage" => $titre,
	    );  
	    $req_prep->execute($values);
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelTemoignage');
	    $tab_temoignage = $req_prep->fetchAll();
	    if (empty($tab_stage)){
	        return false;
	    }
	    return $tab_temoignage;
	}

	public static function getTemoignageByanneeEtude($anneeEtude) {
	    $sql = "SELECT * from `mon-Temoignages` WHERE anneeEtude=:anneeEtude";
	    $req_prep = Model::$pdo->prepare($sql);

	    $values = array(
	        "anneeEtude" => $anneeEtude,
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
	    $sql = "SELECT * from `mon-Temoignages` WHERE theme=:theme";
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


	public function save(){
    try{
      $req_prep=Model::$pdo->prepare("INSERT INTO `mon-Temoignages`(idTemoignage, titreTemoignage, photoTemoignage, contenuTemoignage, anneeEtude, theme, nomEtudiant, prenomEtudiant, idIUT) VALUES (:idTemoignage, :titreTemoignage, :photoTemoignage, :contenuTemoignage, :anneeEtude, :theme, :nomEtudiant, :prenomEtudiant, :idIUT)");

      $values=array(
        "idTemoignage" => $this->idTemoignage,
        "titreTemoignage" => $this->titreTemoignage,
        "photoTemoignage" => $this->photoTemoignage,
        "contenuTemoignage" => $this->contenuTemoignage,
        "anneeEtude" => $this->anneeEtude,
        "theme" => $this->theme,
        "nomEtudiant" => $this->nomEtudiant,
        "prenomEtudiant" => $this->prenomEtudiant,
        "idIUT" => $this->idIUT
        );
      $req_prep->execute($values);
    }
	    catch(PDOException $e){
	      if ($e->getCode()==23000){
	        echo('<b>ERREUR: Le Temoignage existe déjà</b>');
	        return false;
	      }
	    }
	}

	public function delete(){
    $req_prep=Model::$pdo->prepare("DELETE FROM `mon-Temoignages` WHERE `mon-Temoignages`.idTemoignage=:id");

    $values=array(
      "id" => $this->idTemoignage,
      );
    $req_prep->execute($values);
  }
}

?>