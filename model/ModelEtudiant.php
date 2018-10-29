<?php

class ModelEtudiant extends ModelUtilisateur {
    private $idIUT;
    private $nomEtudiant;
    private $prenomEtudiant;
    private $anneeInscription;
    private $mailEtudiant;
    
    public function __construct($login = null, $mdp = null, $idIUT = null, $nomEtudiant = null, $prenomEtudiant = null, $anneeInscription = null, $mailEtudiant = null){
        if (!is_null($login) && !is_null($mdp) && !is_null($nomEtudiant) && !is_null($prenomEtudiant) && !is_null($mailEtudiant) && !is_null($anneeInscription)) {
            parent::__construct($login, $mdp);
            $this->nomEtudiant = $nomEtudiant;
            $this->prenomEtudiant = $prenomEtudiant;
            $this->mailEtudiant = $mailEtudiant;
            $this->anneeInscription = $anneeInscription;
            $this->idIUT = $idIUT;
        }
    }
    
    public function getNom() {
        return $this->nomEtudiant;
    }
    
    public function getPrenom() {
        return $this->prenomEtudiant;
    }
    
    public function getEmail() {
        return $this->mailEtudiant;
    }
    
    public function getAnneeInscription() {
        return $this->anneeInscription;
    }
    
    public function getIdIUT() {
        return $this->idIUT;
    }
    
    public function setNom($nom) {
        $this->nomEtudiant = $nom;
    }
    
    public function setPrenom($prenom) {
        $this->prenomEtudiant = $prenom;
    }
    
    public function setEmail($email) {
        $this->mailEtudiant = $email;
    }
    
    public function setAnneeInscription($anneeInscription) {
        $this->anneeInscription = $anneeInscription;
    }
    
    public function setIdIUT($idIUT) {
        $this->idIUT = $idIUT;
    }
    
    public function save(){
        $nom = htmlspecialchars($this->nomEtudiant);
        $prenom = htmlspecialchars($this->prenomEtudiant);
        $anneeInscription = htmlspecialchars($this->anneeInscription);
        $email = htmlspecialchars($this->mailEtudiant);
        $checkIUT = Model::$pdo->prepare("SELECT * FROM P_IUTs WHERE idIUT = :idIUT");
        $checkIUT->execute(array(':idIUT'=>$this->idIUT));
        $checkIUTCount = $checkIUT->rowcount();
        if($checkIUTCount == 1){
            $getIdUtilisateur = $this::saveUser();
            $valId = (int)$getIdUtilisateur;
            $data = array(':idEtudiant'=>$valId,':idIUT'=>$this->idIUT, ':nom'=>$nom, ':prenom'=>$prenom, ':anneeInscription'=>$anneeInscription, ':email'=>$email);
            $insert = Model::$pdo->prepare("INSERT INTO P_Etudiants(idEtudiant, idIUT, nomEtudiant, prenomEtudiant, anneeInscription, mailEtudiant) VALUES(:idEtudiant, :idIUT, :nom, :prenom, :anneeInscription, :email)");
            $insert->execute($data);
        }
        else {
            return "Cet IUT n'existe pas";
        } 
    }
             
    public static function modif($id, $nomId, $table, array $params){
        foreach($params as $colonne => $value){
        $reqModif = Model::$pdo->prepare("UPDATE $table SET $colonne = '$value' WHERE $nomId = $id ");
        $reqModif->execute(array($colonne));
        }
    }
    
    public function afficher(){
        echo 'Etudiant <br> NOM : '.$this->nomEtudiant.' <br> PRENOM : '.$this->prenomEtudiant.'<br> LOGIN : '.$this->login.'<br> MDP : '.$this->mdp.'<br> ANNEE INSCRIPTION :'.$this->anneeInscription;
    }
}































