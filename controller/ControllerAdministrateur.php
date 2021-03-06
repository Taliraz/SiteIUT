<?php
require_once (File::build_path(array("model","ModelAdministrateur.php"))); // chargement du modèle
require_once (File::build_path(array("lib","Security.php")));
class ControllerAdministrateur {


    public static function readAll() {
        if (isset($_SESSION['login'])){
            $tab_v = ModelAdministrateur::getallAdministrateurs();     //appel au modèle pour gerer la BD
            $controller='administrateur';
            $view='list';
            $pagetitle='liste des Administrateurs';
            require (File::build_path(array("view","view.php")));  //"redirige" vers la vue
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }

     public static function read(){
        if(isset($_SESSION['login'])){
            $v=ModelAdministrateur::getAdministrateurByLogin($_GET ['login']);
            if ($v==false){
                $controller='administrateur';
                $view='erreur';
                $pagetitle='Erreur';
                require (File::build_path(array("view","view.php")));
            }
            else{
                $controller='administrateur';
                $view='detail';
                $pagetitle='Detail';
                require(File::build_path(array("view","view.php")));
            }
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
        
    }

    public static function delete(){
        $login=$_GET['login'];
        if (isset($_SESSION['login'])){
            $admin=ModelAdministrateur::getAdministrateurByLogin($login);
            $admin->delete();
            $tab_v=ModelAdministrateur::getallAdministrateurs();
            $controller='administrateur';
            $view='deleted';
            $pagetitle='administrateur supprimé';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }


    public static function create(){
        if(isset($_SESSION['login'])){
            $controller='administrateur';
            $view='create';
            $pagetitle='Creation de administrateur';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function connect(){
        $controller='administrateur';
        $view='connect';
        $pagetitle='Connexion';
        require(File::build_path(array("view","view.php")));
    }

    public static function disconnect(){
        session_unset();
        session_destroy();
        setcookie(session_name(),'',time()-1);
        self::readAll();
    }


    public static function created(){
        if (isset($_SESSION['login'])){
            $ModelAdministrateur=new ModelAdministrateur($_POST['login'],Security::chiffrer($_POST['mdp']));
            $ModelAdministrateur->save();
            $controller='administrateur';
            $view='created';
            $pagetitle='Administrateur créé';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }
    
    public static function update(){
        $login=$_GET ['login'];
        if (isset($_SESSION['login'])){
            $v=ModelAdministrateur::getadministrateurbylogin($login);
            $controller='administrateur';
            $view='update';
            $pagetitle='modification de administrateur';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function updated(){
        $login=$_GET['login'];
        if (isset($_SESSION['login'])){
            $ModelAdministrateur=new ModelAdministrateur($login,Security::chiffrer($_POST['mdp']));
            $ModelAdministrateur->update(ModelAdministrateur::getadministrateurbylogin($login));
            $controller='administrateur';
            $view='updated';
            $pagetitle='Administrateur modifié';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }

    }

    public static function connected(){
        $compte=ModelAdministrateur::checkPassword($_POST['login'],Security::chiffrer($_POST['mdp']));
        if ($compte!=false){
            $_SESSION['login']=$_POST['login'];
            $v=ModelAdministrateur::getadministrateurbylogin($_POST['login']);
            $controller='administrateur';
            $view='detail';
            $pagetitle='Connecté';
            require(File::build_path(array("view","view.php")));
        }
        else{
            echo '<p>Mot de passe erroné</p>';
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }

}