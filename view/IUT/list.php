<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Ville: <a title="IUT" 
                href="index.php?controller=IUT&action=read&id='
                .rawurlencode($v->getIdIUT()).'">'. htmlspecialchars($v->getNomIUT()).'</a> 
                <a title="supprimer" 
                href="index.php?action=delete&id='
                .rawurlencode($v->getIdIUT()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="index.php?action=create"> Ajouter un IUT </a>
        </p>
    </body>
</html>