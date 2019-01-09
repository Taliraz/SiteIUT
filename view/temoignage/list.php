<!DOCTYPE html>
<html>
    <body>
        <p class="listeAddNouveau">
            <a title="create" href="admin.php?action=create&controller=temoignage"> Ajouter un Temoignage </a>
        </p>
        <?php
        foreach ($tab_t as $v){
            if(!$v->estAccepte()) $message='<span class="listeTemoignageAcceptation"> EN ATTENTE D\'ACCEPTATION </span>';
            else $message="";
            echo '<p class="listeElements"> TEMOIGNAGE : 
                <a class="listeElement1" title="Temoignage" 
                href="admin.php?controller=temoignage&action=read&id='
                .rawurlencode($v->getIdTemoignage()).'">'. htmlspecialchars($v->getTitreTemoignage()).'</a>'.
                $message.
                '<a class="listeElementSupprimer" title="supprimer" href="admin.php?controller=temoignage&action=delete&idTemoignage='
                .rawurlencode($v->getIdTemoignage()).'">SUPPRIMER</a> 
                </p>';
            }  
        ?>
        
    </body>
</html>