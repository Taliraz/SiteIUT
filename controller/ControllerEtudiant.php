<?php 
require(File::build_path(array("model","ModelEtudiant.php")));

class ControllerEtudiant {
    
    public static function ajoutEtudiant($login, $mdp, $idIUT, $nom, $prenom, $anneeInscription, $email){
        $nouvelEtudiant = new ModelEtudiant($login, $mdp, $idIUT, $nom, $prenom, $anneeInscription, $email);
        $res = $nouvelEtudiant->save();
        if (gettype($res) == "string"){
            echo $res;
        }
    }
    
    public static function modifierMdpAux($idEtudiant, $nouveauMdp){
        $mdp = sha1($nouveauMdp);
        ModelEtudiant::modif($idEtudiant, "idUtilisateur" ,"P_Utilisateurs", array("mdp"=>$mdp));
    }
    
    public static function modifierMdp(){
        $retour = "";
        $checkUtilisateur = Model::$pdo->prepare("SELECT * FROM P_Etudiants WHERE idEtudiant = :idEtudiant");
        $checkutilisateur->execute(array(':idEtudiant'->$_SESSION['idUtilisateur']));
        $existe = $checkUtilisateur->rowcount();
        if(isset $_SESSION['idUtilisateur'] && $existe == 1){
            if (isset($_POST['mdp']) && !is_null($_POST['mdp']) && $_POST['mdp'] != $_SESSION['mdp']){
                self::modifierMdpAux($_SESSION['idUtilisateur'], $_POST['mdp']);
                return $retour."Mot de passe modifié avec succès\n";
            }
        }
    }
}
