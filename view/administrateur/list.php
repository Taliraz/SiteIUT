<!DOCTYPE html>
<html>
    <body>
        <p>
            <a title="create" href="admin.php?controller=administrateur&action=create"> Ajouter un administrateur </a>
        </p>
        <?php
        foreach ($tab_v as $v){
            echo '<p> login Administrateur: <a title="Administrateur" 
                href="admin.php?controller=administrateur&action=read&login='
                .rawurlencode($v->getLogin()).'">'. htmlspecialchars($v->getLogin()).'</a> 
                <a title="supprimer" 
                href="admin.php?controller=administrateur&action=delete&login='
                .rawurlencode($v->getLogin()).'">supprimer</a> 
                </p>';
            }  

        ?>
    </body>
</html>