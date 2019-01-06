<!DOCTYPE html>
<html>
    <body>
        <p class="listeAddNouveau">
            <a title="create" href="admin.php?action=create&controller=IUT"> Ajouter un IUT </a>
        </p>
        <?php
        foreach ($tab_v as $v){
            echo '<p class="listeElements"> IUT : <a class="listeElement1" title="IUT" 
                href="admin.php?controller=IUT&action=read&id='
                .rawurlencode($v->getIdIUT()).'">'. htmlspecialchars($v->getNomIUT()).'</a> 
                <a class="listeElementSupprimer" title="supprimer" 
                href="admin.php?controller=IUT&action=delete&idIUT='
                .rawurlencode($v->getIdIUT()).'">SUPPRIMER</a> 
                </p>';
            }  

        ?>
    </body>
</html>