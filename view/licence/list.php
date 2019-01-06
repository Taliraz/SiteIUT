<!DOCTYPE html>
<html>
    <body>
        <p class="listeAddNouveau">
            <a title="create" href="admin.php?action=create&controller=licence"> Ajouter une Licence </a>
        </p> 

        <?php
        foreach ($tab_v as $v){
            echo '<p class="listeElements"> LICENCE : <a class="listeElement1" title="Licence" 
                href="admin.php?controller=licence&action=read&idLicence='
                .rawurlencode($v->getIdLicence()).'">'. htmlspecialchars($v->getNomLicence()).'</a> 
                <a class="listeElementSupprimer" title="supprimer" 
                href="admin.php?controller=licence&action=delete&idLicence='
                .rawurlencode($v->getIdLicence()).'">SUPPRIMER</a> 
                </p>';
            }  

        ?>
        
    </body>
</html>