<!DOCTYPE html>
<html>
    <body>
        <p>
            <a title="create" href="admin.php?action=create&controller=IUT"> Ajouter un IUT </a>
        </p>
        <?php
        foreach ($tab_v as $v){
            echo '<p> IUT: <a title="IUT" 
                href="admin.php?controller=IUT&action=read&id='
                .rawurlencode($v->getIdIUT()).'">'. htmlspecialchars($v->getNomIUT()).'</a> 
                <a title="supprimer" 
                href="admin.php?controller=IUT&action=delete&idIUT='
                .rawurlencode($v->getIdIUT()).'">supprimer</a> 
                </p>';
            }  

        ?>
    </body>
</html>