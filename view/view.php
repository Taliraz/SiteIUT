<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title><?php echo $pagetitle; ?></title>
    </head>

     <header>
        <p class='menu'>
            <a class='buttons' href="admin.php?action=readAll&controller=administrateur"> Administrateur </a>
            <a class='buttons' href="admin.php?action=readAll&controller=article"> Articles </a>
            <a class='buttons' href="admin.php?action=readAll&controller=IUT">IUT </a>
            <a class='buttons' href="admin.php?action=readAll&controller=stage">Stage </a>
            <a class='buttons' href="admin.php?action=readAll&controller=temoignage">Temoignage </a>
            <a class='buttons' href="admin.php?action=readAll&controller=ville">Ville </a>
            <?php
            if(isset($_SESSION['login'])){
                echo '<a class=\'buttons\' href="admin.php?action=disconnect&controller=administrateur">'.$_SESSION['login'].' deconnexion </a>';
            }
            else{
                echo '<a class=\'buttons\' href="admin.php?action=connect&controller=administrateur">Connexion </a>';
            }
            
            ?>
        </p>
        <br>
    </header>

    <body>

    <?php
    $filepath = File::build_path(array("view", $controller, $view.".php"));
    require $filepath;
    ?>
    </body>


</html>
