<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("view","CSS" ,"PanelAdmin.css")); ?>">
        <title><?php echo $pagetitle; ?></title>
    </head>

     <header>
        
            
            <?php
            if(isset($_SESSION['login'])){
                echo '<ul id="colonne"><a href="#"><li id="titre"></li></a>
                    <a href="admin.php?action=disconnect&controller=administrateur&login="'.$_SESSION['login'].'><li class="element-liste"> deconnexion </li></a>
                    <a  href="admin.php?action=readAll&controller=administrateur"><li class="element-liste"> Administrateur</li> </a>
                    <a  href="admin.php?action=readAll&controller=article"><li class="element-liste"> Articles</li> </a>
                    <a  href="admin.php?action=readAll&controller=IUT">IUT<li class="element-liste"></li> </a>
                    <a  href="admin.php?action=readAll&controller=stage"><li class="element-liste">Stage </li></a>
                    <a  href="admin.php?action=readAll&controller=temoignage"><li class="element-liste">Temoignage </li></a>
                    <a  href="admin.php?action=readAll&controller=ville"><li class="element-liste">Ville</li> </a>
                    </ul>';
            }
            
            ?>

    </header>

    <body>

    <?php
    $filepath = File::build_path(array("view", $controller, $view.".php"));
    require $filepath;
    ?>
    </body>


</html>
