<?php 
require(File::build_path(array("model","ModelUtilisateur.php")));

class ControllerUtilisateur {
    public static function connexion($login, $mdp){
        $connexion = ModelUtilisateur::connexion($login, $mdp);
        if (gettype($connexion) == 'string') {
            echo $connexion;
        }
        else {
            session_start();
            $_SESSION['id'] = $connexion['id'];
            $_SESSION['login'] = $connexion['login'];
        }
    }
}


