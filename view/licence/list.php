<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Licence: <a title="Licence" 
                href="admin.php?controller=licence&action=read&idLicence='
                .rawurlencode($v->getIdLicence()).'">'. htmlspecialchars($v->getNomLicence()).'</a> 
                <a title="supprimer" 
                href="admin.php?controller=licence&action=delete&idLicence='
                .rawurlencode($v->getIdLicence()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="admin.php?action=create&controller=licence"> Ajouter une Licence </a>
        </p>
    </body>
</html>