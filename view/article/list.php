<!DOCTYPE html>
<html>
    <body>
        <p>
            <a title="create" href="admin.php?controller=article&action=create"> Ajouter un article </a>
        </p>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Article: <a title="Stage" 
                href="admin.php?controller=article&action=read&idArticle='
                .rawurlencode($v->getIdArticle()).'">'. htmlspecialchars($v->getNomArticle()).'</a> 
                <a title="supprimer" 
                href="admin.php?controller=article&action=delete&idArticle='
                .rawurlencode($v->getIdArticle()).'">supprimer</a> 
                </p>';
            }  

        ?>
    </body>
</html>