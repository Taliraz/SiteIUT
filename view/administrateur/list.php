<!DOCTYPE html>
<html>
    <body>
        <p class="listeAddNouveau">
            <a title="create" href="admin.php?controller=administrateur&action=create"> Ajouter un administrateur </a>
        </p>
        <?php
        foreach ($tab_v as $v){
            echo '<p class="listeElements"> LOGIN ADMINISTRATEUR : 
                    <a class="listeElement1" title="Administrateur" href="admin.php?controller=administrateur&action=read&login=' .rawurlencode($v->getLogin()).'">'. htmlspecialchars($v->getLogin()).'</a> 
                    <a class="listeElementSupprimer" title="supprimer" href="admin.php?controller=administrateur&action=delete&login='.rawurlencode($v->getLogin()).'"> SUPPRIMER </a> 
                </p>';
            }  

        ?>
    </body>
</html>