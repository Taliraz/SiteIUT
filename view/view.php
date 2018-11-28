<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title><?php echo $pagetitle; ?></title>
    </head>

     <header>
        <p>
            <a class='buttons' href="index.php?action=readAll&controller=administrateur"> Administrateur </a>
            <a class='buttons' href="index.php?action=readAll&controller=article"> Articles </a>
            <a class='buttons' href="index.php?action=readAll&controller=IUT">IUT </a>
            <a class='buttons' href="index.php?action=readAll&controller=stage">Stage </a>
            <a class='buttons' href="index.php?action=readAll&controller=temoignage">Temoignage </a>
            <a class='buttons' href="index.php?action=readAll&controller=ville">Ville </a>
            <a class='buttons' href="index.php?action=connect&controller=administrateur">Connexion </a>
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
