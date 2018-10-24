<?php 
require(File::build_path(array("model","Model.php")));

class ModelIUT {
    
    protected $idIUT;
    protected $nomIUT;
    protected $idVille;
    protected $adresseIUT;
    protected $siteIUT;
    protected $telephoneIUT;
    
    public function __construct($nomIUT = NULL,$idVille = NULL, $adresseIUT = NULL, $siteIUT = NULL, $telephoneIUT = NULL){
        if(!is_null($nomIUT) &&!is_null($idVille) && !is_null($adresseIUT) && !is_null($siteIUT) &&!is_null($telephoneIUT)){
             $this->nomIUT = $nomIUT;
            $this->idVille = $idVille;
            $this->adresseIUT = $adresseIUT;
            $this->siteIUT = $siteIUT;
            $this->telephoneIUT = $telephoneIUT; 
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

    public function getsiteIUT() {
        return $this->siteIUT;
    }

    public function gettelephoneIUT() {
        return $this->telephoneIUT;
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
      
    
    public static function getIUTAvecId($idIUT){
        $req = Model::$pdo->prepare('SELECT * FROM P_IUTs WHERE idIUT = :idIUT');
        $req->execute(array(':idIUT'=>$idIUT));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelIUT');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - IUT non trouvé"; }
    }
    
    public static function getAll(){
        $req = Model::$pdo->query ("SELECT * FROM P_IUTs");
        $req->setFetchMode(PDO::FETCH_CLASS, $ModelIUT);
        $row = $req->fetchAll();
        return $row;    
    }
    
    
    public function saveIUT(){
        $erreur = "IUT déjà présent dans la base de données";
        $idIUT = htmlspecialchars($this->idIUT);
        $nomIUT = htmlspecialchars($this->nomIUT);
        $idVille = htmlspecialchars($this->idVille);
        $adresseIUT = htmlspecialchars($this->adresseIUT);
        $siteIUT = htmlspecialchars($this->siteIUT);
        $telephoneIUT = htmlspecialchars($this->telephoneIUT);
        $data = array(':nomIUT'=>$nomIUT, ':idVille'=>$idVille, ':adresseIUT'=>$adresseIUT, ':siteIUT'=>$siteIUT, ':telephoneIUT'=>$telephoneIUT);
        $reqVerif = Model::$pdo->prepare("SELECT idIUT FROM P_IUTs WHERE idIUT = :idIUT");
        $reqVerif->execute(array(':idIUT'=>$idIUT));
        $resVerif = $reqVerif->rowcount();
        if($resVerif > 0){
            return $erreur;
        }
        else {
            $insert = Model::$pdo->prepare("INSERT INTO P_IUTs(nomIUT, idVille,adresseIUT,siteIUT,telephoneIUT) VALUES(:nomIUT,:idVille,:adresseIUT,:siteIUT,:telephoneIUT)");
            $insert->execute($data);
            $getId = Model::$pdo->prepare("SELECT idIUT FROM P_IUTs WHERE idIUT = :idIUT");
            $getId->execute(array(':idIUT'=>$idIUT));
            $arrayRetour = $getId->fetch();
            $idRetour = $arrayRetour[0];
            
            return $idRetour;
        }
    }
}
?>