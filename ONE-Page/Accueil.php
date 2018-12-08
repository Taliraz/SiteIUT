
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("ONE-Page","Accueil.css")) ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>One-page</title>
    </head>
    <body>
        
        <video id="video" class="media" muted autoplay loop>
              <source src="<?php echo File::build_path_css(array("ONE-Page","videos", "info.mp4")) ?>" type="video/mp4">
        </video> 

        <div>
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)">Bonjour!</h1>
            <p data-scroll="toggle(.scaleDownIn, .scaleDownOut)" class="texte">et Bienvenue !</p>
            <p><image src="<?php echo File::build_path_css(array("ONE-Page","images", "fleche.png")) ?>" alt="fleche" id="fleche"></image></p>
        </div>
        
        <div id="slide1Intro" class="slides">
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)"></h1>
        </div>
        
        <div id="slide1Middle" class="slides">
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)" id="titreSlide1">Ce qu'ils pensent de nous !</h1>
    
            

            <p data-scroll="toggle(.fromTopIn, .fromTopOut)">
                <img src="<?php echo File::build_path_css(array("ONE-Page","images", "info.png")) ?>" alt="bob" id="imageSolo" class="media">
                <span></span>
            </p>
        </div>
        <div id="slide1End" class="slides">
            <h1 data-scroll="toggle(.fromRightIn, .fromRightOut)" style="text-shadow:4px 4px black;"></h1>
        </div>
        <div id="slide2" class="slides">
            
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php require_once File::build_path(array("ONE-Page","Carousel.php")); ?>
            
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
        
        
        
        
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","parallax", "parralax.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","ScrollTrigger", "ScrollTrigger.min.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","Trigger.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","Parallax-scroll.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","Parallax-souris.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","JQuery.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","JCarousel.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","jcarousel.transitions.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","popup.js")) ?>"></script>
    </body>
</html>