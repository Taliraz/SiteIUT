<?php
require_once (File::build_path(array("model","ModelStage.php")));
require_once (File::build_path(array("model","ModelIUT.php")));
class ControllerStage{

	public static function readAll() {
        if(isset($_SESSION['login'])){
            $tab_v = ModelStage::getAllStages();    
            $controller='stage';
            $view='list';
            $pagetitle='liste des Stages';
            require (File::build_path(array("view","view.php"))); 
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function read(){
        if (isset($_SESSION['login'])){
        	$v=ModelStage::getStageById($_GET ['idStage']);
        	if ($v==false){
                $controller='stage';
                $view='erreur';
                $pagetitle='Erreur stage';
        		require (File::build_path(array("view","view.php")));
        	}
        	else{
                $controller='stage';
                $view='detail';
                $pagetitle='Detail stage';
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

    public static function create(){
            $controller='stage';
            $view='create';
            $pagetitle='Creation de stage';
            require(File::build_path(array("view","view.php")));
    }

    public static function created(){
            $idStage=NULL;
            $v=new ModelStage($idStage,$_POST['intituleStage'],$_POST['dateDebStage'],$_POST['dateFinStage'],$_POST['gratifie'],$_POST['descriptionStage'],$_POST['idVille'],$_POST['nbPlaces'],$_POST['numSiret'],$_POST['nomEntreprise'],$_POST['siteEntreprise'],$_POST['adresseEntreprise'],$_POST['telephoneEntreprise'],false,$_POST['nomContact'],$_POST['prenomContact'],$_POST['fonctionContact'],$_POST['telephoneContact'],$_POST['emailContact']);
            $v->save();
            $mail='<p> Intitule : ' . htmlspecialchars($v->getIntituleStage()) .'</p>
                    <p> Date de Début : ' .htmlspecialchars($v->getDateDebStage()) .'</p>
                    <p> Date de Fin : '.htmlspecialchars($v->getDateFinStage()).'</p>
                    <p> Gratifié : '.htmlspecialchars($v->getGratifie()).'</p>
                    <p> Description : '.htmlspecialchars($v->getDescriptionStage()).'</p>
                    <p> Ville : '.htmlspecialchars(ModelVille::getVilleById($v->getIdVille())->getNom()).'</p>
                    <p> Numéro de siret de l\'entreprise : '.htmlspecialchars($v->getNumSiret()).'</p>
                    <p> Entreprise : '.htmlspecialchars($v->getNomEntreprise()).'</p>
                    <p> Site de l\'entreprise : '.htmlspecialchars($v->getSiteEntreprise()).'</p>
                    <p> Adresse de l\'entreprise : '.htmlspecialchars($v->getAdresseEntreprise()).'</p>
                    <p> Téléphone de l\'entreprise : '.htmlspecialchars($v->getTelephoneEntreprise()).'</p>
                    <p> Nom du contact : '.htmlspecialchars($v->getNomContact()).'</p>
                    <p> Prénom du contact : '.htmlspecialchars($v->getPrenomContact()).'</p>
                    <p> Fonction du contact : '.htmlspecialchars($v->getFonctionContact()).'</p>
                    <p> Téléphone du contact : '.htmlspecialchars($v->getTelephoneContact()).'</p>
                    <p> Email du contact : '.htmlspecialchars($v->getEmailContact()).'</p>';
            $IUT=ModelIUT::getAllIUTs();
            foreach ($IUT as $value) {
                if($value->getMailSecretariatIUT()!=NULL){
                    mail($value->getMailSecretariatIUT(),"Nouveau Stage ".$v->getIntituleStage,$mail);
                }            }
            $controller='stage';
            $view='created';
            $pagetitle='Stage créé';
            require(File::build_path(array("view","view.php")));
    }

    public static function delete(){
        if(isset($_SESSION['login'])){
            $v=ModelStage::getStageById($_GET ['idStage']);
            $v->delete();
            self::readAll();
        }
        else{
            $controller='administrateur';
            $view='connect';
            $pagetitle='Connexion';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function update(){
        if (isset($_SESSION['login'])){
            $idStage=$_GET ['idStage'];
            $v=ModelStage::getStageByid($idStage);
            $controller='Stage';
            $view='update';
            $pagetitle='modification de Stage';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='temoignage';
            $view='detail';
            $pagetitle='Detail temoignage';
            require(File::build_path(array("view","view.php")));
        }
    }

    public static function updated(){
        if (isset($_SESSION['login'])){
            $idStage=$_GET['idStage'];
            $ModelStage=new ModelStage($idStage,$_POST['intituleStage'],$_POST['dateDebStage'],$_POST['dateFinStage'],$_POST['gratifie'],$_POST['descriptionStage'],$_POST['idVille'],$_POST['nbPlaces'],$_POST['numSiret'],$_POST['nomEntreprise'],$_POST['siteEntreprise'],$_POST['adresseEntreprise'],$_POST['telephoneEntreprise'],$_POST['nomContact'],$_POST['prenomContact'],$_POST['fonctionContact'],$_POST['telephoneContact'],$_POST['emailContact']);
            $ModelStage->update();
            $controller='Stage';
            $view='updated';
            $pagetitle='Stage modifié';
            require(File::build_path(array("view","view.php")));
        }
        else{
            $controller='temoignage';
            $view='detail';
            $pagetitle='Detail temoignage';
            require(File::build_path(array("view","view.php")));
        }

    }
}
?>