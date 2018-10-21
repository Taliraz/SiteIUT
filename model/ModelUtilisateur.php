<?php 
require(File::build_path(array("model","Model.php")));

class ModelUtilisateur {
    
    private $idUtilisateur;
    private $login;
    private $mdp;
    
    public function __construct($login = NULL, $mdp = NULL){
        if(!is_null($login) && !is_null($mdp)){
            $this->login = $login;
            $this->mdp = $mdp; 
        }
    }
    
    public static function getIdUtilisateur() {
        return $this->idUtilisateur;
    }
    
    public static function getLogin() {
        return $this->login;
    }
    
    public static function getMdp() {
        return $this->mdp;
    }
    
    public static function setLogin($login){
        $this->login = $login;
    }
    
    public static function setMdp($mdp){
        $this->login = $mdp;
    }
      
    
    public static function connexion($login, $mdp){
        $data = array(':login'=>$login, ':mdp'=>$mdp);
        $req = Model::$pdo->prepare("SELECT * FROM P_Utilisateurs WHERE login = :login AND mdp = :mdp ");
        $req->execute($data);
        if ($check = $req->rowcount() != 1) {
            return "Erreur - Nombre d'utilisateur différent de 1";
        }
        else {
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
            $row = $req->fetch();
            return $row;
        }
    }
    
    public static function getUtilisateurAvecId($idUtilisateur){
        $req = Model::$pdo->prepare('SELECT * FROM P_Utilisateurs WHERE idUtilisateur = :idUtilisateur');
        $req->execute(array(':idUtilisateur'=>$idUtilisateur));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - Utilisateur non trouvé"; }
    }
    
    public static function afficherTousUtilisateurs(){
        $req = Model::$pdo->query ("SELECT * FROM P_Utilisateurs");
        $req->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
        $row = $req->fetchAll();
        return $row; 
    }
    
    public function saveUser(){
        $erreur = "utilisateur déjà présent dans la base de données";
        $login = htmlspecialchars($this->login);
        $mdp = sha1($this->mdp);
        $data = array(':login'=>$login, ':mdp'=>$mdp);
        $reqVerif = Model::$pdo->prepare("SELECT idUtilisateur FROM P_Utilisateurs WHERE login = :login");
        $reqVerif->execute(array(':login'=>$login));
        $resVerif = $reqVerif->rowcount();
        if($resVerif > 0){
            return $erreur;
        }
        else {
            $insert = Model::$pdo->prepare("INSERT INTO P_Utilisateurs(login, mdp) VALUES(:login,:mdp)");
            $insert->execute($data);
            $getId = Model::$pdo->prepare("SELECT idUtilisateur FROM P_Utilisateurs WHERE login = :login");
            $getId->execute(array(':login'=>$login));
            $arrayRetour = $getId->fetch();
            $idRetour = $arrayRetour[0];
            return $idRetour;
        }
    }
}
















