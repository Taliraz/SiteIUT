<!DOCTYPE html>
<html>
    <body>
        <p class="listeAddNouveau">
            <a title="create" href="admin.php?controller=article&action=create"> Ajouter un article </a>
        </p>
        <?php
        foreach ($tab_v as $v){
            echo '<p class="listeElements"> ARTICLE : <a class="listeElement1" title="Stage" 
                href="admin.php?controller=article&action=read&idArticle='
                .rawurlencode($v->getIdArticle()).'">'. htmlspecialchars($v->getNomArticle()).'</a> 
                <a class="listeElementSupprimer" title="supprimer" 
                href="admin.php?controller=article&action=delete&idArticle='
                .rawurlencode($v->getIdArticle()).'">SUPPRIMER</a> 
                </p>';
            }  

        ?>
    </body>
</html>