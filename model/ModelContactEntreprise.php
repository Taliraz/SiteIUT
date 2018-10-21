<?php
require(File::build_path(array("model","ModelUtilisateur.php")));

class ModelContactEntreprise extends ModelUtilisateur {
    private $nom;
    private $prenom;
    private $fonction;
    private $telephone;
    private $email;
    private $idEntreprise;
    
    public function __construct($login = null, $mdp = null, $nom = null, $prenom = null, $fonction = null, $telephone = null, $email = null, $idEntreprise = null){
        if (!is_null($login) && !is_null($mdp) && !is_null($nom) && !is_null($prenom) && !is_null($fonction) && !is_null($telephone) && !is_null($email) && !is_null($idEntreprise))) {
            parent::__construct($login, $mdp);
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->fonction = $fonction;
            $this->telephone = $telephone;
            $this->email = $email;
            $this->idEntreprise = $idEntreprise;
        }
    }
    
    public static function getNom() {
        return $this->nom;
    }
    
    public static function getprenom() {
        return $this->prenom;
    }
    
    public static function getFonction() {
        return $this->fonction;
    }
    
    public static function getTelephone() {
        return $this->telephone;
    }
    
    public static function getEmail() {
        return $this->email;
    }
    
    public static function getIdEntreprise() {
        return $this->idEntreprise;
    }

    public static function setNom($nom) {
        $this->nom = $nom;
    }
    
    public static function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    
    public static function setFonction($fonction) {
        $this->fonction = $fonction;
    }
    
    public static function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
    
    public static function setEmail($email) {
        $this->email = $email;
    }

    public static function setIdEntreprise($idEntreprise) {
        $this->idEntreprise = $idEntreprise;
    }
    
    public function save(){
        $prenom = htmlspecialchars($this->prenom);
        $nom = htmlspecialchars($this->nom);
        $fonction = htmlspecialchars($this->fonction);
        $email = htmlspecialchars($this->email);
        $telephone = htmlspecialchars($this->telephone);
        $checkEntreprise = Model::$pdo->prepare("SELECT * FROM P_Entreprises WHERE idEntreprise = :idEntreprise");
        $checkEntreprise->execute(array(':idEntreprise'=>$this->idEntreprise));
        $checkEntrepriseCount = $checkEntreprise->rowcount();
        if($checkEntrepriseCount == 1){
            $getIdUtilisateur = $this::saveUser();
            $valId = (int)$getIdUtilisateur;
            $data = array(':idContactEntreprise'=>$valId, ':nom'=>$nom, ':prenom'=>$prenom, ':fonction'=>$fonction, ':telephone'=>$telephone, ':email'=>$email, ':idEntreprise'=>$this->idEntreprise);
            $insert = Model::$pdo->prepare("INSERT INTO P_ContactEntreprise(idContact, nomContact, prenomContact, fonctionContact, telephoneContact,  emailcontact, idEntreprise) VALUES(:idContactEntreprise, :nom, :prenom, :fonction, :telephone, :email, :idEntreprise)");
            $insert->execute($data);
        }
        else {
            return "Cette Entreprise n'existe pas";
        } 
    }
             
    public static function modif($id, $nomId, $table, array $params){
        foreach($params as $colonne => $value){
        $reqModif = Model::$pdo->prepare("UPDATE $table SET $colonne = '$value' WHERE $nomId = $id ");
        $reqModif->execute(array($colonne));
        }
    }
}