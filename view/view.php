<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title><?php echo $pagetitle; ?></title>
    </head>

     <header>
        
            
            <?php
            if(isset($_SESSION['login'])){
                echo '<p class=\'menu\'>
                    <a class=\'buttons\' href="admin.php?action=disconnect&controller=administrateur">'.$_SESSION['login'].' deconnexion </a>
                    <a class=\'buttons\' href="admin.php?action=readAll&controller=administrateur"> Administrateur </a>
                    <a class=\'buttons\' href="admin.php?action=readAll&controller=article"> Articles </a>
                    <a class=\'buttons\' href="admin.php?action=readAll&controller=IUT">IUT </a>
                    <a class=\'buttons\' href="admin.php?action=readAll&controller=stage">Stage </a>
                    <a class=\'buttons\' href="admin.php?action=readAll&controller=temoignage">Temoignage </a>
                    <a class=\'buttons\' href="admin.php?action=readAll&controller=ville">Ville </a>
                    <a class=\'buttons\' href="admin.php?action=readAll&controller=licence">Licence </a>
                    </p><br>';
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
