<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
        <link rel="stylesheet" href="style.css">
        <title><?php echo $pagetitle; ?></title>
    </head>

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

    <body>

    <?php
    $filepath = File::build_path(array("view", $controller, $view.".php"));
    require $filepath;
    ?>
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






