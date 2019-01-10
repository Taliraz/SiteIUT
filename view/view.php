<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("style")); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("ONE-Page", "css", "wbbtheme.css")); ?>">
        <title><?php echo $pagetitle; ?></title>
    </head>
    <body>
        <header>
            <?php
            if(isset($_SESSION['login'])){
                echo '<div id=\'menu\'>
                        <div id="menuOrdi">
                            <span id=\'nomConnexion\'>Bienvenue '.$_SESSION['login'].' </span>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=administrateur"> Administrateurs </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=article"> Articles </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=IUT">IUT </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=stage">Stages </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=temoignage">Temoignages </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=licence">Licences </a>
                            <a class=\'buttons\' href="admin.php?action=disconnect&controller=administrateur"> Deconnexion </a>
                        </div>
                        <div id="menuBurger">
                            <img id="burger" src="ONE-Page/images/burger.png" alt="burger">
                            <span id=\'nomConnexion\'>Bievenue '.$_SESSION['login'].' </span>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=administrateur"> Administrateurs </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=article"> Articles </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=IUT">IUT </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=stage">Stages </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=temoignage">Temoignages </a>
                            <a class=\'buttons\' href="admin.php?action=readAll&controller=licence">Licences </a>
                            <a class=\'buttons\' href="admin.php?action=disconnect&controller=administrateur"> Deconnexion </a>
                        </div>
                    </div>';
            }?>
        </header>

        <?php
        $filepath = File::build_path(array("view", $controller, $view.".php"));
        require $filepath;
        ?>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","JQuery.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "load.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "js_jbbcode", "wysibb.local")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "js_jbbcode", "wysibb.local2")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "js_jbbcode", "jquery.wysibb.min.js")) ?>"></script>
    </body>


</html>

<script type="text/javascript">
    var menu = document.getElementById('menu')
    var burger = document.getElementById('menuBurger')
    var iconBurger = document.getElementById('burger')
    var actif = 0
    
    menu.addEventListener("click", function(){
        if (window.innerWidth < 600) {
            burger.style.left = "0"
            iconBurger.style.left= "75vw"
            setTimeout("actif = 1", 1)
        }
    })
    
    window.addEventListener("click", function(){
        if(actif == 1){
            iconBurger.style.left= "0vw"
            burger.style.left = "-100vw"
            setTimeout("actif = 0", 1)
        } 
    })

</script>






