<?php
require(File::build_path(array("model","ModelUtilisateur.php")));

class ModelEntreprise extends ModelUtilisateur {
    private $numSiret;
    private $idVille;
    private $nom;
    private $site;
    private $adresse;
    private $telephone;
    private $estAccepte;
    
    public function __construct($login = null, $mdp = null, $numSiret = null, $idVille = null, $nom = null, $site = null, $adresse = null, $telephone = null){
        if (!is_null($login) && !is_null($mdp) && !is_null($numSiret) && !is_null($idVille) && !is_null($nom) && !is_null($site) && !is_null($adresse) && !is_null($telephone))) {
            parent::__construct($login, $mdp);
            $this->numSiret = $numSiret;
            $this->idVille = $idVille;
            $this->nom = $nom;
            $this->site = $site;
            $this->adresse = $adresse;
            $this->telephone = $telephone;
            $this->estAccepte = false;
        }
    }
    
    public static function getNumSiret() {
        return $this->numSiret;
    }
    
    public static function getIdVille() {
        return $this->idVille;
    }
    
    public static function getNom() {
        return $this->nom;
    }
    
    public static function getSite() {
        return $this->site;
    }
    
    public static function getAdresse() {
        return $this->adresse;
    }
    
    public static function getTelephone() {
        return $this->telephone;
    }
    
    public static function getEstAccepte() {
        return $this->estAccepte;
    }

    public static function setNumSiret($numSiret) {
        $this->numSiret = $numSiret;
    }
    
    public static function setIdVille($idVille) {
        $this->idVille = $idVille;
    }
    
    public static function setNom($nom) {
        $this->nom = $nom;
    }
    
    public static function setSite($site) {
        $this->site = $site;
    }
    
    public static function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public static function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
    
    public static function setEstAccepte($estAccepte) {
        $this->estAccepte = $estAccepte;
    }
    
    public function save(){
        $numSiret = htmlspecialchars($this->numSiret);
        $nom = htmlspecialchars($this->nom);
        $site = htmlspecialchars($this->site);
        $adresse = htmlspecialchars($this->adresse);
        $telephone = htmlspecialchars($this->telephone);
        $checkVille = Model::$pdo->prepare("SELECT * FROM P_Villes WHERE idVille = :idVille");
        $checkVille->execute(array(':idVille'=>$this->idVille));
        $checkVilleCount = $checkVille->rowcount();
        if($checkVilleCount == 1){
            $getIdUtilisateur = $this::saveUser();
            $valId = (int)$getIdUtilisateur;
            $data = array(':idEntreprise'=>$valId, ':numSiret'=>$numSiret, ':idVille'=>$this->idVille, ':nom'=>$nom, ':site'=>$site, ':adresse'=>$adresse, ':telephone'=>$telephone, ':esAccepte'=>$this->estAccepte);
            $insert = Model::$pdo->prepare("INSERT INTO P_Entreprises(idEntreprise, numSiret, idVille, nomEntreprise, siteEntreprise,  adresseEntreprise, numTelEntreprise, estAccepte) VALUES(:idEntreprise, :numSiret, :idVille, :nom, :site, :adresse, :telephone, :estAccepte)");
            $insert->execute($data);
        }
        else {
            return "Cette Ville n'existe pas";
        } 
    }
             
    public static function modif($id, $nomId, $table, array $params){
        foreach($params as $colonne => $value){
        $reqModif = Model::$pdo->prepare("UPDATE $table SET $colonne = '$value' WHERE $nomId = $id ");
        $reqModif->execute(array($colonne));
        }
    }
}