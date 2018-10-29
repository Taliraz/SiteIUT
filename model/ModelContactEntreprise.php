<?php

class ModelContactEntreprise extends ModelUtilisateur {
    private $nomContact;
    private $prenomContact;
    private $fonctionContact;
    private $telephoneContact;
    private $emailContact;
    private $idEntreprise;
    
    public function __construct($login = null, $mdp = null, $nom = null, $prenom = null, $fonction = null, $telephone = null, $email = null, $idEntreprise = null){
        if (!is_null($login) && !is_null($mdp) && !is_null($nom) && !is_null($prenom) && !is_null($fonction) && !is_null($telephone) && !is_null($email) && !is_null($idEntreprise)) {
            parent::__construct($login, $mdp);
            $this->nomContact = $nom;
            $this->prenomContact = $prenom;
            $this->fonctionContact = $fonction;
            $this->telephoneContact = $telephone;
            $this->emailContact = $email;
            $this->idEntreprise = $idEntreprise;
        }
    }
    
    public function getNomContact() {
        return $this->nomContact;
    }
    
    public function getprenomContact() {
        return $this->prenomContact;
    }
    
    public function getFonctionContact() {
        return $this->fonctionContact;
    }
    
    public function getTelephoneContact() {
        return $this->telephoneContact;
    }
    
    public function getEmailContact() {
        return $this->emailContact;
    }
    
    public function getIdEntreprise() {
        return $this->idEntreprise;
    }

    public function setNomContact($nom) {
        $this->nomContact = $nom;
    }
    
    public function setPrenomContact($prenom) {
        $this->prenomContact = $prenom;
    }
    
    public function setFonctionContact($fonction) {
        $this->fonctionContact = $fonction;
    }
    
    public function setTelephoneContact($telephone) {
        $this->telephoneContact = $telephone;
    }
    
    public function setEmailContact($email) {
        $this->emailContact = $email;
    }

    public function setIdEntreprise($idEntreprise) {
        $this->idEntreprise = $idEntreprise;
    }
    
    public function save(){
        $prenom = htmlspecialchars($this->prenomContact);
        $nom = htmlspecialchars($this->nomContact);
        $fonction = htmlspecialchars($this->fonctionContact);
        $email = htmlspecialchars($this->emailContact);
        $telephone = htmlspecialchars($this->telephoneContact);
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
    
    public function afficher(){
        echo 'Etudiant <br> NOM : '.$this->nomContact.' <br> PRENOM : '.$this->prenomContact.'<br> LOGIN : '.$this->login.'<br> MDP : '.$this->mdp.'<br> FONCTION :'.$this->fonctionContact;
    }
}