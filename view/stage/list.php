<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Stage: <a title="Stage" 
                href="index.php?action=read&controller=stage&idStage='
                .rawurlencode($v->getIdStage()).'">'.htmlspecialchars($v->getIntituleStage()).'</a> 
                <a title="supprimer" 
                href="index.php?action=delete&controller=stage&id='
                .rawurlencode($v->getIdStage()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="index.php?action=create&controller=stage"> Ajouter un Stage </a>
        </p>
    </body>
</html>