<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Ville: <a title="Stage" 
                href="admin.php?controller=ville&action=read&id='
                .rawurlencode($v->getId()).'">'. htmlspecialchars($v->getNom()).'</a> 
                <a title="supprimer" 
                href="admin.php?action=delete&id='
                .rawurlencode($v->getId()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="admin.php?action=create"> Ajouter une ville </a>
        </p>
    </body>
</html>