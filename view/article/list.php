<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> Article: <a title="Stage" 
                href="index.php?controller=article&action=read&idArticle='
                .rawurlencode($v->getIdArticle()).'">'. htmlspecialchars($v->getNomArticle()).'</a> 
                <a title="supprimer" 
                href="index.php?controller=article&action=delete&idArticle='
                .rawurlencode($v->getIdArticle()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="index.php?controller=article&action=create"> Ajouter une article </a>
        </p>
    </body>
</html>