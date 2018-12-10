<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_t as $v){
            echo '<p> Temoignage: <a title="Temoignage" 
                href="admin.php?controller=temoignage&action=read&id='
                .rawurlencode($v->getIdTemoignage()).'">'. htmlspecialchars($v->getTitreTemoignage()).'</a> 
                <a title="supprimer" 
                href="admin.php?controller=temoignage&action=delete&id='
                .rawurlencode($v->getIdTemoignage()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="admin.php?action=create&controller=temoignage"> Ajouter un Temoignage </a>
        </p>
    </body>
</html>