<?php 
require(File::build_path(array("model","ModelChefDep.php")));

class ControllerEtudiant {
    
    public static function ajoutChefDep($login, $mdp, $idIUT, $nom, $prenom, $email){
        $nouveauChefDep = new ModelChefDep($login, $mdp, $idIUT, $nom, $prenom, $email);
        $res = $nouveauChefDep->save();
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
        $checkUtilisateur = Model::$pdo->prepare("SELECT * FROM P_ChefDep WHERE idChefDep = :idChefDep");
        $checkutilisateur->execute(array(':idChefDep'->$_SESSION['idChefDep']));
        $existe = $checkUtilisateur->rowcount();
        if(isset $_SESSION['idUtilisateur'] && $existe == 1){
            if (isset($_POST['mdp']) && !is_null($_POST['mdp']) && $_POST['mdp'] != $_SESSION['mdp']){
                self::modifierMdpAux($_SESSION['idUtilisateur'], $_POST['mdp']);
                return $retour."Mot de passe modifié avec succès\n";
            }
        }
    }
}
