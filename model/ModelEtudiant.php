<?php
require "ModelUtilisateur.php";

class ModelEtudiant extends ModelUtilisateur {
    private $idEtudiant;
    private $idIUT;
    private $nom;
    private $prenom;
    private $anneeInscription;
    
    public function __construct($nom = null, $prenom = null, $email = null, $anneeInscription = null, $idIUT = null){
        if (!is_null($nom) && !is_null($prenom) && !is_null($email) && !is_null($anneeInscription) && !is_null($idIUT)) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->anneeInscription = $anneeInscription;
            $this->idIUT = $idIUT;
        }
    }

    public static function getNom() {
        return $this->nom;
    }
    
    public static function getPrenom() {
        return $this->prenom;
    }
    
    public static function getEmail() {
        return $this->email;
    }
    
    public static function getAnneeInscription() {
        return $this->anneeInscription;
    }
    
    public static function getIdIUT() {
        return $this->idIUT;
    }
    
    public static function setNom($nom) {
        $this->nom = $nom;
    }
    
    public static function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    
    public static function setEmail($email) {
        $this->email = $email;
    }
    
    public static function setAnneeInscription($anneeInscription) {
        $this->anneeInscription = $anneeInscription;
    }
    
    public static function setIdIUT($idIUT) {
        $this->idIUT = $idIUT;
    }
    
    
    public static function associerUtilisateur($id){
        $check = Model::$pdo->prepare("SELECT * FROM utilisateurs WHERE id = :id");
        $check->execute(array(':id'=>$id));
        $checkCount = $check->rowcount();
        if($checkcount == 1){
            $this->idEtudiant = $id;
            return true;
        }
        else {
            return false;
        }
    }
}
