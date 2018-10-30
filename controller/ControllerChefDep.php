<?php 

class ControllerChefDep {
    
    public static function ajoutChefDep($login, $mdp, $idIUT, $nom, $prenom, $email){
        $nouveauChefDep = new ModelChefDep($login, $mdp, $idIUT, $nom, $prenom, $email);
        $res = $nouveauChefDep->save();
        if (gettype($res) == "string"){
            echo $res;
        }
    }
    
    public static function modifierMdpAux($idChefDep, $nouveauMdp){
        $mdp = sha1($nouveauMdp);
        ModelChefDep::modif($idChefDep, "idUtilisateur" ,"P_Utilisateurs", array("mdp"=>$mdp));
    }
    
    /*public static function modifierMdp(){
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
    }*/
    
    public static function afficherTousChefDep(){
        $row = ModelChefDep::getAll("P_ChefDep", "idChefDep", "ModelChefDep");
        if (!empty($row)){
            foreach ($row as $colonne) {
                echo $colonne->getLogin();
            }
        }
        else { "Aucun chef de département"; }
    }
    
    public static function afficherDetails($id){
        $row = ModelChefDep::getOne("P_ChefDep", $id, "idChefDep", "ModelChefDep");
        if (!empty($row)){
            foreach ($row as $colonne) {
                echo $colonne->afficher();
            }
        }
        else { echo "Erreur, aucun chef de département portant cet ID"; }
    }
}
