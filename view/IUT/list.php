<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Ville: <a title="IUT" 
                href="admin.php?controller=IUT&action=read&id='
                .rawurlencode($v->getIdIUT()).'">'. htmlspecialchars($v->getNomIUT()).'</a> 
                <a title="supprimer" 
                href="admin.php?action=delete&id='
                .rawurlencode($v->getIdIUT()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="admin.php?action=create"> Ajouter un IUT </a>
        </p>
    </body>
</html>