<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title><?php echo $pagetitle; ?></title>
    </head>

     <header>
        <p class='menu'>
            <a class='buttons' href="index.php?action=readAll&controller=administrateur"> Administrateur </a>
            <a class='buttons' href="index.php?action=readAll&controller=article"> Articles </a>
            <a class='buttons' href="index.php?action=readAll&controller=IUT">IUT </a>
            <a class='buttons' href="index.php?action=readAll&controller=stage">Stage </a>
            <a class='buttons' href="index.php?action=readAll&controller=temoignage">Temoignage </a>
            <a class='buttons' href="index.php?action=readAll&controller=ville">Ville </a>
<<<<<<< HEAD
            <?php
            if(isset($_SESSION['login'])){
                echo '<a class=\'buttons\' href="index.php?action=disconnect&controller=administrateur">'.$_SESSION['login'].' deconnexion </a>';
            }
            else{
                echo '<a class=\'buttons\' href="index.php?action=connect&controller=administrateur">Connexion </a>';
            }
            
            ?>
=======
            <a class='connection' href="index.php?action=connect&controller=administrateur">Connexion </a>
>>>>>>> 529f7ddc49b065daca2acb56504664f52d9c5ce7
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
