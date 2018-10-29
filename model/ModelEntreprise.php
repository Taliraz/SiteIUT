<?php

class ModelEntreprise extends ModelUtilisateur {
    private $numSiret;
    private $idVille;
    private $nomEntreprise;
    private $siteEntreprise;
    private $adresseEntreprise;
    private $telephoneEntreprise;
    private $estAccepte;
    
    public function __construct($login = null, $mdp = null, $numSiret = null, $idVille = null, $nom = null, $site = null, $adresse = null, $telephone = null){
        if (!is_null($login) && !is_null($mdp) && !is_null($numSiret) && !is_null($idVille) && !is_null($nom) && !is_null($site) && !is_null($adresse) && !is_null($telephone)) {
            parent::__construct($login, $mdp);
            $this->numSiret = $numSiret;
            $this->idVille = $idVille;
            $this->nomEntreprise = $nom;
            $this->siteEntreprise = $site;
            $this->adresseEntreprise = $adresse;
            $this->telephoneEntreprise = $telephone;
            $this->estAccepte = 0;
        }
    }
    
    public function getNumSiret() {
        return $this->numSiret;
    }
    
    public function getIdVille() {
        return $this->idVille;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function getSite() {
        return $this->site;
    }
    
    public function getAdresse() {
        return $this->adresse;
    }
    
    public function getTelephone() {
        return $this->telephone;
    }
    
    public function getEstAccepte() {
        return $this->estAccepte;
    }

    public function setNumSiret($numSiret) {
        $this->numSiret = $numSiret;
    }
    
    public function setIdVille($idVille) {
        $this->idVille = $idVille;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    public function setSite($site) {
        $this->site = $site;
    }
    
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
    
    public function setEstAccepte($estAccepte) {
        $this->estAccepte = $estAccepte;
    }
    
    public function save(){
        $numSiret = htmlspecialchars($this->numSiret);
        $nom = htmlspecialchars($this->nomEntreprise);
        $site = htmlspecialchars($this->siteEntreprise);
        $adresse = htmlspecialchars($this->adresseEntreprise);
        $telephone = htmlspecialchars($this->telephoneEntreprise);
        $checkVille = Model::$pdo->prepare("SELECT * FROM P_Villes WHERE idVille = :idVille");
        $checkVille->execute(array(':idVille'=>$this->idVille));
        $checkVilleCount = $checkVille->rowcount();
        if($checkVilleCount == 1){
            $getIdUtilisateur = $this::saveUser();
            $valId = (int)$getIdUtilisateur;
            $data = array(':idEntreprise'=>$valId, ':numSiret'=>$numSiret, ':idVille'=>$this->idVille, ':nom'=>$nom, ':site'=>$site, ':adresse'=>$adresse, ':telephone'=>$telephone, ':estAccepte'=>$this->estAccepte);
            var_dump($data);
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
    
    public function afficher(){
        echo 'Entreprise <br> NOM : '.$this->nomEntreprise.' <br> SITE : '.$this->siteEntreprise.'<br> LOGIN : '.$this->login.'<br> MDP : '.$this->mdp.'<br> TELEPHONE :'.$this->telephoneEntreprise;
    }
}