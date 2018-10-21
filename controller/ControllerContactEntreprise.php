<?php 
require(File::build_path(array("model","ModelContactEntreprise.php")));

class ControllerContactEntreprise {
    
    public static function ajoutContactEntreprise($login, $mdp, $nom, $prenom, $fonction, $telephone, $email, $idEntreprise){
        $nouveauContact = new ModelContactEntreprise($login, $mdp, $nom, $prenom, $fonction, $telephone, $email, $idEntreprise);
        $res = $nouveauContact->save();
        if (gettype($res) == "string"){
            echo $res;
        }
    }
    
    public static function modifierMdpAux($idContactEntreprise, $nouveauMdp){
        $mdp = sha1($nouveauMdp);
        ModelConctactEntreprise::modif($idContactEntreprise, "idUtilisateur" ,"P_Utilisateurs", array("mdp"=>$mdp));
    }
    
    /*public static function modifierMdp(){
        $retour = "";
        $checkUtilisateur = Model::$pdo->prepare("SELECT * FROM P_ContactEntreprise WHERE idContact = :idContact");
        $checkutilisateur->execute(array(':idContact'->$_SESSION['idContact']));
        $existe = $checkUtilisateur->rowcount();
        if(isset $_SESSION['idUtilisateur'] && $existe == 1){
            if (isset($_POST['mdp']) && !is_null($_POST['mdp']) && $_POST['mdp'] != $_SESSION['mdp']){
                self::modifierMdpAux($_SESSION['idUtilisateur'], $_POST['mdp']);
                return $retour."Mot de passe modifié avec succès\n";
            }
        }
    }*/
    
    public static function afficherTousContacts(){
        $row = ModelContactEntreprise::getAll("P_ContactEntreprise", "idContact", "ModelContactEntreprise");
        if (!empty($row)){
            foreach ($row as $colonne) {
                echo $colonne->getLogin();
            }
        }
        else { echo "Aucun Contact Entreprise"; }
    }
    
    public static function afficherDetails($id){
        $row = ModelContactEntreprise::getOne("P_ContactEntreprise", $id, "idContact", "ModelContactEntreprise");
        if (!empty($row)){
            foreach ($row as $colonne) {
                echo $colonne->afficher();
            }
        }
        else { echo "Erreur, aucun Contact entreprise portant cet ID"; }
    }
}
