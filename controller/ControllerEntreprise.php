<?php 
require(File::build_path(array("model","ModelEntreprise.php")));

class ControllerEntreprise {
    
    public static function ajoutEntreprise($login, $mdp, $numSiret, $idVille, $nom, $site, $adresse, $telephone){
        $nouvelleEntreprise = new ModelEntreprise($login, $mdp, $numSiret, $idVille, $nom, $site, $adresse, $telephone);
        $res = $nouvelleEntreprise->save();
        if (gettype($res) == "string"){
            echo $res;
        }
    }
    
    public static function modifierMdpAux($idEntreprise, $nouveauMdp){
        $mdp = sha1($nouveauMdp);
        ModelEntreprise::modif($idEntreprise, "idUtilisateur" ,"P_Utilisateurs", array("mdp"=>$mdp));
    }
    
    public static function modifierMdp(){
        $retour = "";
        $checkUtilisateur = Model::$pdo->prepare("SELECT * FROM P_Entreprise WHERE idEntreprise = :idEntreprise");
        $checkutilisateur->execute(array(':idEntreprise'->$_SESSION['idEntreprise']));
        $existe = $checkUtilisateur->rowcount();
        if(isset $_SESSION['idUtilisateur'] && $existe == 1){
            if (isset($_POST['mdp']) && !is_null($_POST['mdp']) && $_POST['mdp'] != $_SESSION['mdp']){
                self::modifierMdpAux($_SESSION['idUtilisateur'], $_POST['mdp']);
                return $retour."Mot de passe modifié avec succès\n";
            }
        }
    }
}
