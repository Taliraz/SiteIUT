<?php
require_once File::build_path(array('model','ModelStage.php'));
echo'<p class="detailDonnees"> Intitule : ' . htmlspecialchars($v->getIntituleStage()) .'</p>
    <p class="detailDonnees"> Date de Début : ' .htmlspecialchars($v->getDateDebStage()) .'</p>
    <p class="detailDonnees"> Date de Fin : '.htmlspecialchars($v->getDateFinStage()).'</p>
    <p class="detailDonnees"> Gratifié : '.htmlspecialchars($v->getGratifie()).'</p>
    <p class="detailDonnees"> Description : '.htmlspecialchars($v->getDescriptionStage()).'</p>
    <p class="detailDonnees"> Ville : '.htmlspecialchars(ModelVille::getVilleById($v->getIdVille())->getNom()).'</p>
    <p class="detailDonnees"> Numéro de siret de l\'entreprise : '.htmlspecialchars($v->getNumSiret()).'</p>
    <p class="detailDonnees"> Entreprise : '.htmlspecialchars($v->getNomEntreprise()).'</p>
    <p class="detailDonnees"> Site de l\'entreprise : '.htmlspecialchars($v->getSiteEntreprise()).'</p>
    <p class="detailDonnees"> Adresse de l\'entreprise : '.htmlspecialchars($v->getAdresseEntreprise()).'</p>
    <p class="detailDonnees"> Téléphone de l\'entreprise : '.htmlspecialchars($v->getTelephoneEntreprise()).'</p>
    <p class="detailDonnees"> Nom du contact : '.htmlspecialchars($v->getNomContact()).'</p>
    <p class="detailDonnees"> Prénom du contact : '.htmlspecialchars($v->getPrenomContact()).'</p>
    <p class="detailDonnees"> Fonction du contact : '.htmlspecialchars($v->getFonctionContact()).'</p>
    <p class="detailDonnees"> Téléphone du contact : '.htmlspecialchars($v->getTelephoneContact()).'</p>
    <p class="detailDonnees"> Email du contact : '.htmlspecialchars($v->getEmailContact()).'</p>';
?>

<?php
if(isset($_SESSION['login'])){
	echo '<a class="detailModifier" title="update" href="admin.php?controller='.$controller.'&action=update&idStage='.$v->getIdStage().'">Modifier</a>';
	echo '<a class="detailSupprimer" title="delete" href="admin.php?controller='.$controller.'&action=delete&idStage='.$v->getIdStage().'">Supprimer</a>';
}
?>
<br><br><br><span></span>