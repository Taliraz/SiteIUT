<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Ville: <a title="Stage" 
                href="index.php?action=read&id='
                .rawurlencode($v->getId()).'">'. htmlspecialchars($v->getNom()).'</a> 
                <a title="supprimer" 
                href="index.php?action=delete&id='
                .rawurlencode($v->getId()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="index.php?action=create"> Ajouter une ville </a>
        </p>
    </body>
</html>