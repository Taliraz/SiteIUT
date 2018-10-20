<?php 
require "Model.php";

class ModelUtilisateur {
    
    private $id;
    private $login;
    private $mdp;
    private $email;
    
    public function __construct($login = NULL, $mdp = NULL, $email = NULL){
        if(!is_null($login) && !is_null($mdp) && !is_null($email)){
            $this->login = $login;
            $this->mdp = $mdp;
            $this->email = $email;  
        }
    }
    
    public static function getId() {
        return $this->id;
    }
    
    public static function getLogin() {
        return $this->login;
    }
    
    public static function getMdp() {
        return $this->mdp;
    }
    
    public static function getEmail(){
        return $this->email;
    }
    
    public static function setLogin($login){
        $this->login = $login;
    }
    
    public static function setMdp($mdp){
        $this->login = $mdp;
    }
    
    public static function setemail($email){
        $this->login = $email;
    }
    
    
    
    
    
    public static function connexion($login, $mdp){
        $data = array(':login'=>$login, ':mdp'=>$mdp);
        $req = Model::$pdo->prepare("SELECT * FROM utilisateurs WHERE login = :login AND mdp = :mdp ");
        $req->execute($data);
        if ($check = $req->rowcount() != 1) {
            return "Erreur - Nombre d'utilisateur diférent de 1";
        }
        else {
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
            $row = $req->fetch();
            return $row;
        }
    }
    
    public static function getUtilisateurAvecId($id){
        $req = Model::$pdo->prepare('SELECT * FROM utilisateurs WHERE id = :id');
        $req->execute(array(':id'=>$id));
        $check = $req->rowcount();
        if($check == 1){
            $req->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
            $row = $req->fetch();
            return $row;
        }
        else { return "Erreur - Utilisateur non trouvé"; }
    }
    
    public static function afficherTousUtilisateurs(){
        $req = Model::$pdo->query ("SELECT * FROM utilisateurs");
        $req->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
        $tab_voit = $req->fetchAll();
        return $tab_voit; 
    }
    
    public static function ajoutUtilisateur(){
        $erreur = "utilisateur déjà présent dans la base de données";
        $login = htmlspecialchars($this->login);
        $mdp = sha1($this->mdp);
        $email = htmlspecialchars($this->email);
        $data = array($login, $mdp, $email);
        $reqVerif = Model::$pdo->prepare("SELECT id FROM utilisateurs WHERE login = :login");
        $reqVerif->execute(array(':login'=>$login));
        $resVerif = $reqVerif->rowcount();
        if($resVerif > 0){
            return $erreur;
        }
        else {
            $insert = Model::$pdo->prepare("INSERT INTO utilisateurs(login, mdp, email) VALUES(?,?,?)");
            $insert->execute($data); 
        }
    }   
}















