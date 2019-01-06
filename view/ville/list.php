<!DOCTYPE html>
<html>
    <body>
        <p class="listeAddNouveau">
            <a title="create" href="admin.php?controller=ville&action=create"> Ajouter une ville </a>
        </p>
        <?php
        foreach ($tab_v as $v){
            echo '<p class="listeElements"> Ville: <a class="listeElement1" title="Stage" 
                href="admin.php?controller=ville&action=read&id='
                .rawurlencode($v->getId()).'">'. htmlspecialchars($v->getNom()).'</a> 
                <a class="listeElementSupprimer" title="supprimer" 
                href="admin.php?action=delete&id='
                .rawurlencode($v->getId()).'">SUPPRIMER</a> 
                </p>';
            }  

        ?>
        
    </body>
</html>