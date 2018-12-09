
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("ONE-Page","css" ,"Accueil.css")) ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>One-page</title>
    </head>
    <body>
        
        <video id="video" class="media" muted autoplay loop>
              <source src="<?php echo File::build_path_css(array("ONE-Page","videos", "info.mp4")) ?>" type="video/mp4">
        </video> 
        
         <div id="BG" class="media" style="background-image: url(ONE-Page/images/2560x1440.jpg)">
            <p data-depth="0.21" class="sceneBG">
                <img src="ONE-Page/images/BG-I.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.12" class="sceneBG">
                <img src="ONE-Page/images/BG-IL.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.23" class="sceneBG">
                <img src="ONE-Page/images/BG-RI.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.12" class="sceneBG">
                <img src="ONE-Page/images/BG-BL.png" alt="bg" class="bg" class="media">
            </p>
             <p data-depth="0.24" class="sceneBG">
                <img src="ONE-Page/images/BG-RI.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.15" class="sceneBG">
                <img src="ONE-Page/images/BG-RII.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.22" class="sceneBG">
                <img src="ONE-Page/images/BG-LB.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.15" class="sceneBG">
                <img src="ONE-Page/images/BG-RB.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.2" class="sceneBG">
                <img src="ONE-Page/images/BG-BR.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.20" class="sceneBG">
                <img src="ONE-Page/images/BG-RT.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.19" class="sceneBG">
                <img src="ONE-Page/images/BG-TM.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.28" class="sceneBG">
                <img src="ONE-Page/images/BG-MT.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.27" class="sceneBG">
                <img src="ONE-Page/images/BG-TR.png" alt="bg" class="bg" class="media">
            </p>
             <p data-depth="0.6" class="sceneBG">
                <img src="ONE-Page/images/BG-LT.png" alt="bg" class="bg" class="media">
            </p>
             <p data-depth="0.15" class="sceneBG">
                <img src="ONE-Page/images/BG-TRR.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.24" class="sceneBG">
                <img src="ONE-Page/images/BG-L.png" alt="bg" class="bg" class="media">
            </p>
            <p data-depth="0.13" class="sceneBG">
                <img src="ONE-Page/images/BG-R.png" alt="bg" class="bg" class="media">
            </p>
        </div>
        
        <div>
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)" id="titre">Bonjour!</h1>
            <p data-scroll="toggle(.scaleDownIn, .scaleDownOut)" class="texte" id="slogan">et Bienvenue !</p>
            <p><image src="<?php echo File::build_path_css(array("ONE-Page","images", "fleche.png")) ?>" alt="fleche" id="fleche"></image></p>
        </div>
        
        <div id="slide1Intro" class="slides">
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)"></h1>
        </div>
        
        <div id="slide1Middle" class="slides">
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)" id="titreSlide1">Trouvez VOTRE IUT !</h1>
    
            <?php require_once File::build_path(array("ONE-Page","map" ,"france.php")); ?>


            <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="imageSolo" class="media">
        </div>
        <div id="slide1End" class="slides">
            <h1 data-scroll="toggle(.fromRightIn, .fromRightOut)" style="text-shadow:4px 4px black;"></h1>
        </div>
        <div id="slide2" class="slides">
            
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <h1>Ce que vous pensez de nous !</h1>
        <?php require_once File::build_path(array("ONE-Page","carousel" ,"Carousel.php")); ?>
        <br><br><br><br><br><br><br><br>
            
        </div>
        <div id="slide3Begin" class="slides">
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)" style="text-shadow:4px 4px black;margin-top:100px;"></h1>
        </div>
        <div id="slide3Back" class="slides">
            <image src='<?php echo File::build_path_css(array("ONE-Page","images", "gif.gif")) ?>' alt="image" class="media"></image>
        </div>
        <div id="slide3End" class="slides">
        </div>
        <div id="slide3Sup" class="slides">
            <p></p> <!-- NE PAS SUPPRIMER -->
            <p data-depth="0.3" class="scene">
                <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="image1" class="scene-pic" class="scene-pic">
            </p>
            <p data-depth="0.3" class="scene">
                <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="image2" class="scene-pic" class="scene-pic">
            </p>
            <p data-depth="0.3" class="scene">
                <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="image3" class="scene-pic" class="scene-pic">
            </p>
            <p data-depth="0.3" class="scene">
                <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="image4" class="scene-pic" class="scene-pic">
            </p>
            <p data-depth="0.3" class="scene">
                <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="image5" class="scene-pic" class="scene-pic">
            </p>
            <p data-depth="0.3" class="scene">
                <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="image6" class="scene-pic" class="scene-pic">
            </p>
            <p data-depth="0.3" class="scene">
                <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="image7" class="scene-pic" class="scene-pic">
            </p>
            <p data-depth="0.3" class="scene">
                <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="image8" class="scene-pic" class="scene-pic">
            </p>
       </div>
        <div id="slide4" class="slides">
            <image src="<?php echo File::build_path_css(array("ONE-Page","images", "carte.png")) ?>" alt="image" class="media"></image>
        </div>
       
        
        
        
        
        
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","parallax", "parallax.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","ScrollTrigger", "ScrollTrigger.min.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","ScrollTrigger","Trigger.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","parallax" ,"Parallax-scroll.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","parallax" ,"Parallax-souris.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","JQuery.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","carousel" ,"JCarousel.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "popup","popup.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "map","utile.js")) ?>"></script>
    </body>
</html>