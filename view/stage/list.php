<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Stage: <a title="Stage" 
                href="admin.php?action=read&controller=stage&idStage='
                .rawurlencode($v->getIdStage()).'">'.htmlspecialchars($v->getIntituleStage()).'</a> 
                <a title="supprimer" 
                href="admin.php?action=delete&controller=stage&id='
                .rawurlencode($v->getIdStage()).'">supprimer</a> 
                </p>';
                if(!$v->getEstaccepte()) echo 'En attente d\'acceptation <br>';
            }  

        ?>
    </body>
</html>