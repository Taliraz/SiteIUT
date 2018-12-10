<?php 
require_once(File::build_path(array("model","Model.php")));

class ModelIUT {
    
    protected $idIUT;
    protected $nomIUT;
    protected $idVille;
    protected $adresseIUT;
    protected $siteIUT;
    protected $telephoneIUT;
    protected $mailSecretariatIUT;
    
    public function __construct($nomIUT = NULL,$idVille = NULL, $adresseIUT = NULL, $siteIUT = NULL, $telephoneIUT = NULL,$mailSecretariatIUT = NULL){
        if(!is_null($nomIUT) &&!is_null($idVille) && !is_null($adresseIUT) && !is_null($siteIUT) &&!is_null($telephoneIUT) && !is_null($mailSecretariatIUT)){
            $this->nomIUT = $nomIUT;
            $this->idVille = $idVille;
            $this->adresseIUT = $adresseIUT;
            $this->siteIUT = $siteIUT;
            $this->telephoneIUT = $telephoneIUT;
            $this->mailSecretariatIUT=$mailSecretariatIUT; 
        }
    }
    
    public function getIdIUT() {
        return $this->idIUT;
    }

    public function getNomIUT() {
        return $this->nomIUT;
    }
    
    public function getIdVille() {
        return $this->idVille;
    }
    
    public function getAdresseIUT() {
        return $this->adresseIUT;
    }

    public function getSiteIUT() {
        return $this->siteIUT;
    }

    public function getTelephoneIUT() {
        return $this->telephoneIUT;
    }

    public function getMailSecretariatIUT() {
        return $this->mailSecretariatIUT;
    }

    public function setNomIUT($nomIUT){
        $this->nomIUT = $nomIUT;
    }
    
    public function setIdVille($idVille){
        $this->idVille = $idVille;
    }
    
    public function setAdresseIUT($adresseIUT){
        $this->adresseIUT = $adresseIUT;
    }

    public function setSiteIUT($siteIUT){
        $this->siteIUT = $siteIUT;
    }

    public function setTelephoneIUT($telephoneIUT){
        $this->telephoneIUT = $telephoneIUT;
    }

    public function setSecretariatIUT($mailSecretariatIUT){
        $this->mailSecretariatIUT = $mailSecretariatIUT;
    }
      
    
    public static function getIUTById($idIUT){
        $req = Model::$pdo->prepare('SELECT * FROM `mon-IUTs` WHERE idIUT = :idIUT');
        $req->execute(array(':idIUT'=>$idIUT));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelIUT');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - IUT non trouvé"; }
    }
    
    public static function getAllIUTs(){
        $req = Model::$pdo->query ("SELECT * FROM `mon-IUTs`");
        $req->setFetchMode(PDO::FETCH_CLASS, "ModelIUT");
        $row = $req->fetchAll();
        return $row;    
    }
    
    
    public function save(){
        try{
          $req_prep=Model::$pdo->prepare(
            "INSERT INTO `mon-IUTs`(nomIUT,idVille,adresseIUT,SiteIUT,telephoneIUT,mailSecretariatIUT) VALUES(:nomIUT,:idVille,:adresseIUT,:siteIUT,:telephoneIUT,:mailSecretariatIUT)");

          $values=array(
            "nomIUT" => $this->nomIUT,
            "idVille" => $this->idVille,
            "adresseIUT" => $this->adresseIUT,
            "siteIUT" => $this->siteIUT,
            "telephoneIUT" => $this->telephoneIUT,
            "mailSecretariatIUT" => $this->mailSecretariatIUT,
            );
          $req_prep->execute($values);
        }
        catch(PDOException $e){
          if ($e->getCode()==23000){
            echo('<b>ERREUR: L\' IUT existe déjà</b>');
            return false;
          }
        }
    }

    public function delete(){
         $req_prep=Model::$pdo->prepare("DELETE FROM `mon-IUTs` WHERE `mon-IUTs`.idIUT=:idIUT");

        $values=array(
          "idIUT" => $this->idIUT,
          );
        $req_prep->execute($values);
    }

    public function update(){
    $req_prep=Model::$pdo->prepare(
        "UPDATE `mon-IUTs` 
        SET nomIUT=:nomIUT,idVille=:idVille,adresseIUT=:adresseIUT ,siteIUT=:siteIUT,telephoneIUT=:telephoneIUT,mailSecretariatIUT=:mailSecretariatIUT
        WHERE idIUT=:idIUT"
    );

    $values=array(
      "idIUT" => $this->idIUT,
      "nomIUT" => $this->nomIUT,
      "idVille" => $this->idVille,
      "adresseIUT" => $this->adresseIUT,
      "siteIUT" => $this->siteIUT,
      "telephoneIUT" => $this->telephoneIUT,
      "mailSecretariatIUT" => $this->mailSecretariatIUT
      );
    $req_prep->execute($values);

  }
}
?>