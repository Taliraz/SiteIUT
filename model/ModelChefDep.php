<?php
require(File::build_path(array("model","ModelUtilisateur.php")));

class ModelChefDep extends ModelUtilisateur {
    private $idIUT;
    private $nom;
    private $prenom;
    private $email;
    
    public function __construct($login = null, $mdp = null, $idIUT = null, $nom = null, $prenom = null, $email = null){
        if (!is_null($login) && !is_null($mdp) && !is_null($nom) && !is_null($prenom) && !is_null($email))) {
            parent::__construct($login, $mdp);
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
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

    public static function setIdIUT($idIUT) {
        $this->idIUT = $idIUT;
    }
    
    public function save(){
        $nom = htmlspecialchars($this->nom);
        $prenom = htmlspecialchars($this->prenom);
        $email = htmlspecialchars($this->email);
        $checkIUT = Model::$pdo->prepare("SELECT * FROM P_IUTs WHERE idIUT = :idIUT");
        $checkIUT->execute(array(':idIUT'=>$this->idIUT));
        $checkIUTCount = $checkIUT->rowcount();
        if($checkIUTCount == 1){
            $getIdUtilisateur = $this::saveUser();
            $valId = (int)$getIdUtilisateur;
            $data = array(':idChefDep'=>$valId,':idIUT'=>$this->idIUT, ':nom'=>$nom, ':prenom'=>$prenom, ':email'=>$email);
            $insert = Model::$pdo->prepare("INSERT INTO P_ChefDep(idChefDep, idIUT, nomChefDep, prenomChefDep,  mailChefDep) VALUES(:idChefDep, :idIUT, :nom, :prenom, :email)");
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
}