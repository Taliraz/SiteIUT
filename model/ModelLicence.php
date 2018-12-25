<?php 
require_once(File::build_path(array("model","Model.php")));

class ModelLicence {
    
    protected $idLicence;
    protected $nomLicence;
    protected $idIUT;
    protected $nomResponsable;
    protected $prenomResponsable;
    protected $mailResponsable;
    protected $siteLicence;
    
    public function __construct($nomLicence = NULL,$idIUT = NULL, $nomResponsable = NULL,$prenomResponsable = NULL, $mailResponsable = NULL, $siteLicence = NULL){
        if(!is_null($nomLicence) &&!is_null($idIUT) && !is_null($nomResponsable) && !is_null($prenomResponsable) && !is_null($mailResponsable) &&!is_null($siteLicence)){
            $this->nomLicence = $nomLicence;
            $this->idIUT = $idIUT;
            $this->nomResponsable = $nomResponsable;
            $this->prenomResponsable = $prenomResponsable;
            $this->mailResponsable = $mailResponsable;
            $this->siteLicence = $siteLicence;
        }
    }
    
    public function getIdLicence() {
        return $this->idLicence;
    }

    public function getNomLicence() {
        return $this->nomLicence;
    }
    
    public function getIdIUT() {
        return $this->idIUT;
    }
    
    public function getNomResponsable() {
        return $this->nomResponsable;
    }

    public function getPrenomResponsable() {
        return $this->prenomResponsable;
    }

    public function getMailResponsable() {
        return $this->mailResponsable;
    }

    public function getSiteLicence() {
        return $this->siteLicence;
    }

    public function setIdLicence($idLicence){
        $this->idLicence = $idLicence;
    }

    public function setNomLicence($nomLicence){
        $this->nomLicence = $nomLicence;
    }
    
    public function setIdIUT($idIUT){
        $this->idIUT = $idIUT;
    }
    
    public function setNomResponsable($nomResponsable){
        $this->nomResponsable = $nomResponsable;
    }

    public function setPrenomResponsable($prenomResponsable){
        $this->prenomResponsable = $prenomResponsable;
    }

    public function setMailResponsable($mailResponsable){
        $this->mailResponsable = $mailResponsable;
    }

    public function setSiteLicence($siteLicence){
        $this->siteLicence = $siteLicence;
    }
      
    
    public static function getLicenceById($idLicence){
        $req = Model::$pdo->prepare('SELECT * FROM `mon-Licences` WHERE idLicence = :idLicence');
        $req->execute(array(':idLicence'=>$idLicence));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelLicence');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - Licence non trouvé"; }
    }

    public static function getLicenceByIdIUT($idIUT) {
        $sql = "SELECT * from `mon-Licences` WHERE idIUT=:idIUT";
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            ":idIUT" => $idIUT,
        );  
        $req_prep->execute($values);
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelLicence');
        $tab_licence = $req_prep->fetchAll();
        if (empty($tab_licence)){
            return false;
        }
        return $tab_licence;
    }
    
    public static function getAllLicences(){
        $req = Model::$pdo->query ("SELECT * FROM `mon-Licences`");
        $req->setFetchMode(PDO::FETCH_CLASS, "ModelLicence");
        $row = $req->fetchAll();
        return $row;    
    }
    
    
    public function save(){
        try{
          $req_prep=Model::$pdo->prepare(
            "INSERT INTO `mon-Licences`(nomLicence,idIUT,nomResponsable,prenomResponsable,mailResponsable,siteLicence) VALUES(:nomLicence,:idIUT,:nomResponsable,:prenomResponsable,:mailResponsable,:siteLicence)");

          $values=array(
            ":nomLicence" => $this->nomLicence,
            ":idIUT" => $this->idIUT,
            ":nomResponsable" => $this->nomResponsable,
            ":prenomResponsable" => $this->prenomResponsable,
            ":mailResponsable" => $this->mailResponsable,
            ":siteLicence" => $this->siteLicence,
            );
          $req_prep->execute($values);
        }
        catch(PDOException $e){
          if ($e->getCode()==23000){
            echo('<b>ERREUR: La Licence existe déjà</b>');
            return false;
          }
        }
    }

    public function delete(){
         $req_prep=Model::$pdo->prepare("DELETE FROM `mon-Licences` WHERE `mon-Licences`.idLicence=:idLicence");

        $values=array(
          "idLicence" => $this->idLicence,
          );
        $req_prep->execute($values);
    }

    public function update(){
    $req_prep=Model::$pdo->prepare(
        "UPDATE `mon-Licences` 
        SET nomLicence=:nomLicence,idIUT=:idIUT,nomResponsable=:nomResponsable,prenomResponsable=:prenomResponsable ,mailResponsable=:mailResponsable,siteLicence=:siteLicence
        WHERE idLicence=:idLicence"
    );

    $values=array(
      ":idLicence" => $this->idLicence,
      ":nomLicence" => $this->nomLicence,
      ":idIUT" => $this->idIUT,
      ":nomResponsable" => $this->nomResponsable,
      ":prenomResponsable" => $this->prenomResponsable,
      ":mailResponsable" => $this->mailResponsable,
      ":siteLicence" => $this->siteLicence
      );
    $req_prep->execute($values);

  }
}
?>