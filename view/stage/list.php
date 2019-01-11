<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p class="listeElements"> STAGE : 
                    <a class="listeElement1" title="Stage" href="admin.php?action=read&controller=stage&idStage='.rawurlencode($v->getIdStage()).'">'.htmlspecialchars($v->getIntituleStage()).'</a> 
                    <a class="listeElementSupprimer" title="supprimer" href="admin.php?action=delete&controller=stage&idStage='.rawurlencode($v->getIdStage()).'">SUPPRIMER</a>;
                    
                </p>';
            }  

        ?>
    </body>
</html>