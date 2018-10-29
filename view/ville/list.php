<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Ville : <a
                href="index.php?action=read&controller=ville&id='
                .rawurlencode($v->getIdVille())
                .'">'
                . htmlspecialchars($v->getNomVille())
                .'</a> 
                <a title="supprimer" 
                href="index.php?action=delete&id='
                .rawurlencode($v->getIdVille()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="index.php?action=create"> Ajouter une ville </a>
        </p>
    </body>
</html>