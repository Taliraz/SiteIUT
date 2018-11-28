<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
    </head>

     <header>
        <p style="border: 1px solid black;text-align:center;padding-right:1em;">
            <a href="index.php?action=readAll&controller=administrateur"> Administrateur </a>
            <a href="index.php?action=readAll&controller=article"> Articles </a>
            <a href="index.php?action=readAll&controller=IUT">IUT </a>
            <a href="index.php?action=readAll&controller=stage">Stage </a>
            <a href="index.php?action=readAll&controller=temoignage">Temoignage </a>
            <a href="index.php?action=readAll&controller=ville">Ville </a>
            <a href="index.php?action=connect&controller=administrateur">Connexion </a>
        </p>
    </header>

    <body>

    <?php
    $filepath = File::build_path(array("view", $controller, $view.".php"));
    require $filepath;
    ?>
    </body>


</html>
