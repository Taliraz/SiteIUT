<?php 
require(File::build_path(array("model","ModelEtudiant.php")));
require(File::build_path(array("view","PanelAdmin.php")));
class ControllerEtudiant {
    
    public static function create(){
        require (File::build_path(array("view","etudiant","create.php")));
    }
    
    public static function created() {
        if (isset($_POST["login"]) & !empty($_POST["login"]) & isset($_POST["mdp"]) & !empty($_POST["mdp"]) & isset($_POST["idIUT"]) & !empty($_POST["idIUT"]) & isset($_POST["nom"]) & !empty($_POST["nom"]) & isset($_POST["prenom"]) & !empty($_POST["prenom"]) & isset($_POST["anneeInscription"]) & !empty($_POST["anneeInscription"]) & isset($_POST["email"]) & !empty($_POST["email"])) { 
            $nouvelEtudiant = new ModelEtudiant($_POST["login"], $_POST["mdp"], $_POST["idIUT"], $_POST["nom"], $_POST["prenom"], $_POST["anneeInscription"], $_POST["email"]);
            $res = $nouvelEtudiant->save();
            if (gettype($res) == "string"){
                echo $res;
            }
            self::readAll();
        }
        else {
            echo "Tous les champs n'ont pas été remplis";
        }
    }
    
    public static function readAll(){
        $row = ModelEtudiant::getAll("P_Etudiants", "idEtudiant", "ModelEtudiant");
        if (!empty($row)){
            require (File::build_path(array("view","etudiant","list.php")));
        }
        else { echo "Aucun étudiant"; }
    }
    
    public static function details(){
<<<<<<< HEAD
        if (isset($_GET['idEtudiant'])){
            $row = ModelEtudiant::getOne("P_Etudiants", $_GET['idEtudiant'], "idEtudiant", "ModelEtudiant");
=======
<<<<<<< HEAD
        if (isset($_POST['idEtudiant'])){
            $row = ModelEtudiant::getOne("P_Etudiants", $_POST['idEtudiant'], "idEtudiant", "ModelEtudiant");
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
            if (!empty($row)){
                require (File::build_path(array("view","etudiant","detail.php")));
            }
            else { echo "Erreur, aucun étudiant portant cet ID"; }
        }
<<<<<<< HEAD
    }
    
=======
=======
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
        if (isset($_GET['idEtudiant'])){
            $row = ModelEtudiant::getOne("P_Etudiants", $_GET['idEtudiant'], "idEtudiant", "ModelEtudiant");
            if (!empty($row)){
                require (File::build_path(array("view","etudiant","detail.php")));
            }
            else { echo "Erreur, aucun étudiant portant cet ID"; }
<<<<<<< HEAD
        }
    }
    
    public static function update(){
        $info = ModelUtilisateur::getOne("P_Etudiants", $_GET['idEtudiant'], "idEtudiant", "ModelEtudiant");
        require (File::build_path(array("view","etudiant","modif.php")));
    }
    
    public static function updated(){
        if (isset($_POST['idEtudiant']) && !is_null($_POST['idEtudiant']) && isset($_POST['login']) && !is_null($_POST['login']) && isset($_POST['mdp']) & !is_null($_POST['mdp']) && isset($_POST['nom']) && !is_null($_POST['nom']) && isset($_POST['prenom']) && !is_null($_POST['prenom']) && isset($_POST['idIUT']) && !is_null($_POST['idIUT']) && isset($_POST['anneeInscription']) && !is_null($_POST['anneeInscription']) && isset($_POST['email']) && !is_null($_POST['email'])){
            $data = array("login"=>$_POST['login'], "mdp"=>$_POST['mdp'], "nomEtudiant"=>$_POST['nom'], "prenomEtudiant"=>$_POST['prenom'], "idIUT"=>$_POST['idIUT'], "anneeInscription"=>$_POST['anneeInscription'], "mailEtudiant"=>$_POST['email']);
            
            ModelUtilisateur::update("P_Etudiants", $_POST['idEtudiant'], "idEtudiant", $data);
            self::details();
        }
        else {
            echo "Erreur lors de la modification";
        }
    }
    
=======
        }
    }
    
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
    public static function update(){
        $info = ModelUtilisateur::getOne("P_Etudiants", $_GET['idEtudiant'], "idEtudiant", "ModelEtudiant");
        require (File::build_path(array("view","etudiant","modif.php")));
    }
    
    public static function updated(){
<<<<<<< HEAD
        if (isset($_GET['idEtudiant']) && !is_null($_GET['idEtudiant']) && isset($_POST['login']) && !is_null($_POST['login']) && isset($_POST['mdp']) & !is_null($_POST['mdp']) && isset($_POST['nom']) && !is_null($_POST['nom']) && isset($_POST['prenom']) && !is_null($_POST['prenom']) && isset($_POST['idIUT']) && !is_null($_POST['idIUT']) && isset($_POST['anneeInscription']) && !is_null($_POST['anneeInscription']) && isset($_POST['email']) && !is_null($_POST['email'])){
            $data = array("login"=>$_POST['login'], "mdp"=>$_POST['mdp'], "nomEtudiant"=>$_POST['nom'], "prenomEtudiant"=>$_POST['prenom'], "idIUT"=>$_POST['idIUT'], "anneeInscription"=>$_POST['anneeInscription'], "mailEtudiant"=>$_POST['email']);
            
            ModelUtilisateur::update("P_Etudiants", $_GET['idEtudiant'], "idEtudiant", $data);
            self::details();
=======
        if (isset($_POST['idEtudiant']) && !is_null($_POST['idEtudiant']) && isset($_POST['login']) && !is_null($_POST['login']) && isset($_POST['mdp']) & !is_null($_POST['mdp']) && isset($_POST['nom']) && !is_null($_POST['nom']) && isset($_POST['prenom']) && !is_null($_POST['prenom']) && isset($_POST['idIUT']) && !is_null($_POST['idIUT']) && isset($_POST['anneeInscription']) && !is_null($_POST['anneeInscription']) && isset($_POST['email']) && !is_null($_POST['email'])){
            $data = array("login"=>$_POST['login'], "mdp"=>$_POST['mdp'], "nomEtudiant"=>$_POST['nom'], "prenomEtudiant"=>$_POST['prenom'], "idIUT"=>$_POST['idIUT'], "anneeInscription"=>$_POST['anneeInscription'], "mailEtudiant"=>$_POST['email']);
            
            ModelUtilisateur::update("P_Etudiants", $_POST['idEtudiant'], "idEtudiant", $data);
            self::readAll();
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
        }
        else {
            echo "Erreur lors de la modification";
        }
    }
    
<<<<<<< HEAD
=======
>>>>>>> 9bb73ee09239b85dabb8d15fa5f634eeacbec724
>>>>>>> f922d4017ac95b013a7e6f625b147d80980278e6
    public static function supprimerEtudiant($id){
        ModelUtilisateur::remove($id);
    }
    
}
    