<!DOCTYPE html>
<html>
    <body>
        <?php
        foreach ($tab_v as $v){
            echo '<p> login Administrateur: <a title="Administrateur" 
                href="index.php?controller=administrateur&action=read&login='
                .rawurlencode($v->getLogin()).'">'. htmlspecialchars($v->getLogin()).'</a> 
                <a title="supprimer" 
                href="index.php?controller=administrateur&action=delete&login='
                .rawurlencode($v->getLogin()).'">supprimer</a> 
                </p>';
            }  

        ?>
        <p>
            <a title="create" href="index.php?controller=administrateur&action=create"> Ajouter une administrateur </a>
        </p>
    </body>
</html>