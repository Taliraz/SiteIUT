<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Stage: <a title="Stage" 
                href="index.php?action=read&id='
                .rawurlencode($v->getId()).'">'. htmlspecialchars($v->getIntitule()).'</a> 
                <a title="supprimer" 
                href="index.php?action=delete&id='
                .rawurlencode($v->getId()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="index.php?action=create"> Ajouter un Stage </a>
        </p>
    </body>
</html>