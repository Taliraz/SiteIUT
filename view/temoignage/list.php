<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Temoignage: <a title="Temoignage" 
                href="index.php?controller=temoignage&action=read&id='
                .rawurlencode($v->getIdTemoignage()).'">'. htmlspecialchars($v->getTitreTemoignage()).'</a> 
                
                <a title="supprimer" 
                href="index.php?controller=temoignage&action=delete&id='
                .rawurlencode($v->getIdTemoignage()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="index.php?action=create"> Ajouter un Temoignage </a>
        </p>
    </body>
</html>