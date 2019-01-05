
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("ONE-Page","css" ,"Accueil.css")) ?>">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="<?php echo File::build_path_css(array("ONE-Page","imgCliper" ,"css", "imgareaselect-default.css")) ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>One-page</title>
    </head>
    <body>
        
        <?php require_once (File::build_path(array("controller","ControllerLicence.php"))); 
        require(File::build_path(array("init.php")));?> 
        
        <div id="load">
            <img src="<?php echo File::build_path_css(array("ONE-Page","images" ,"load-lune.png")) ?>" alt="" id="loading">
        </div>
        
         <div id="BG" class="media">
             
            <p data-depth="0" class="sceneBG">
                <img src="ONE-Page/images/BG-VC.jpg" alt="bg" class="bg_back">
            </p>
             
            <!-- intérieur -->
             
            <p data-depth="0.12" class="sceneBG">
                <img src="ONE-Page/images/BG-I-VC.png" alt="bg" class="bg_int">
            </p>
            <p data-depth="0.15" class="sceneBG">
                <img src="ONE-Page/images/BG-RII-VC.png" alt="bg" class="bg_int">
            </p>
            <p data-depth="0.2" class="sceneBG">
                <img src="ONE-Page/images/BG-RI-VC.png" alt="bg" class="bg_int">
            </p>
            <p data-depth="0.1" class="sceneBG">
                <img src="ONE-Page/images/BG-IL-VC.png" alt="bg" class="bg_int">
            </p>

            
            <!-- bordures --> 
             
             
            <p data-depth="0.18" class="sceneBG">
                <img src="ONE-Page/images/BG-MT-VC.png" alt="bg" class="bg_bord">
            </p>
            <p data-depth="0.30" class="sceneBG">
                <img src="ONE-Page/images/BG-L-VC.png" alt="bg" class="bg_bord">
            </p>
            <p data-depth="0.2" class="sceneBG">
                <img src="ONE-Page/images/BG-TM-VC.png" alt="bg" class="bg_bord">
            </p>
            <p data-depth="0.25" class="sceneBG">
                <img src="ONE-Page/images/BG-BL-VC.png" alt="bg" class="bg_bord">
            </p>
            <p data-depth="0.3" class="sceneBG">
                <img src="ONE-Page/images/BG-TRR-VC.png" alt="bg" class="bg_bord">
            </p>
            <p data-depth="0.25" class="sceneBG">
                <img src="ONE-Page/images/BG-BR-VC.png" alt="bg" class="bg_bord">
            </p>
            <p data-depth="0.35" class="sceneBG">
                <img src="ONE-Page/images/BG-TR-VC.png" alt="bg" class="bg_bord">
            </p>
            
             
            <!-- Coins -->
             
            <p data-depth="0.45" class="sceneBG">
                <img src="ONE-Page/images/BG-RB-VC.png" alt="bg" class="bg_coin">
            </p>
            <p data-depth="0.4" class="sceneBG">
                <img src="ONE-Page/images/BG-LT-VC.png" alt="bg" class="bg_coin">
            </p>
            <p data-depth="0.5" class="sceneBG">
                <img src="ONE-Page/images/BG-LB-VC.png" alt="bg" class="bg_coin">
            </p>
            <p data-depth="0.55" class="sceneBG">
                <img src="ONE-Page/images/BG-RT-VC.png" alt="bg" class="bg_coin">
            </p>
             
             <!-- Lettres -->
             
            <p data-depth="0.55" class="sceneBG">
                <img src="ONE-Page/images/O-BL.png" alt="bg" class="bg_let">
            </p>
            <p data-depth="0.6" class="sceneBG">
                <img src="ONE-Page/images/O-VE.png" alt="bg" class="bg_let">
            </p>
             
             
            <p data-depth="0.45" class="sceneBG">
                <img src="ONE-Page/images/F-BL.png" alt="bg" class="bg_let">
            </p>
            <p data-depth="0.5" class="sceneBG">
                <img src="ONE-Page/images/F-VE.png" alt="bg" class="bg_let">
            </p>
             
             
            <p data-depth="0.55" class="sceneBG">
                <img src="ONE-Page/images/N-BL.png" alt="bg" class="bg_let">
            </p>
            <p data-depth="0.6" class="sceneBG">
                <img src="ONE-Page/images/N-VE.png" alt="bg" class="bg_let">
            </p>
             
             
            <p data-depth="0.45" class="sceneBG">
                <img src="ONE-Page/images/I-BL.png" alt="bg" class="bg_let">
            </p>
            <p data-depth="0.5" class="sceneBG">
                <img src="ONE-Page/images/I-VE.png" alt="bg" class="bg_let">
            </p>
             
        </div>
        
        <p class="bubble" id="bub1"></p>
        

        
        
        <div id="slide0" class="slides">
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)" id="titre">Bienvenue</h1>
        
            <p data-scroll="toggle(.scaleDownIn, .scaleDownOut)" class="texte" id="slogan">
                Sur le site du département informatique des IUT
            </p>
            
            <p>
                <image src="<?php echo File::build_path_css(array("ONE-Page","images", "fleche.png")) ?>" alt="fleche" id="fleche"></image>
            </p>
        </div>
        
        <div id="slide1" class="slides">

            <h1 data-scroll="toggle(.fromLeftIn, .fromLeftOut)" id="titreSlide1" >Trouvez VOTRE IUT !</h1>
    
            <?php require_once File::build_path(array("ONE-Page","map" ,"france.php")); ?>

        </div>
        
        <div id="slide2" class="slides">
            

            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)" id="titreSlide2">Ce que vous pensez de nous !</h1>
            <h3 data-scroll="toggle(.scaleDownIn, .scaleDownOut)"id="poster_temoignage">
                <a onclick="displayPopupPost()"> Publiez votre témoignage </a>
            </h3>
            <div id="assombrissement"></div>
            
            <?php require File::build_path(array("ONE-Page","popup" ,"poster_temoignage.php"));?>
            <?php require_once File::build_path(array("ONE-Page","carousel" ,"Carousel.php")); ?>

            
        </div>

    
        <div id="slide3" class="slides">
            
            <?php require_once File::build_path(array("ONE-Page","articles" ,"articles.php")); ?>
           
        </div>

        <div id="slide4" class="slides">
            <h1>Suivez-nous sur Twitter !</h1>
            <div id="twitter">
                <a class="twitter-timeline" data-theme="light" data-link-color="#3C2D5E" href="https://twitter.com/iutinfo?ref_src=twsrc%5Etfw">Tweets by iutinfo</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
            </div>
        </div>
        
        
        <div id="menu">
            <ul id="navigation">
                <li id="getTop">
                    <span class="tooltip">
                        <span class="tooltiptext">Haut de Page</span>
                        <img id="testCrop" src="ONE-Page/images/accueil.png" alt="logo_accueil">
                    </span>
                </li>
                <li id="getSlide1">
                    <span class="tooltip">
                        <span class="tooltiptext">Carte des IUT</span>
                        <img src="ONE-Page/images/mapFrance.png" alt="logo_map">
                    </span>
                </li>
                <li id="getSlide2">
                    <span class="tooltip">
                        <span class="tooltiptext">Témoignages</span>
                        <img src="ONE-Page/images/smile.png" alt="logo_smile">
                    </span>
                </li>
                <li id="getSlide3">
                    <span class="tooltip">
                        <span class="tooltiptext">Informations</span>
                        <img src="ONE-Page/images/infos.png" alt="logo_infos">
                    </span>
                </li>
                <li id="getSlide4">
                    <span class="tooltip">
                        <span class="tooltiptext">Twitter</span>
                        <img src="ONE-Page/images/arobase.png" alt="logo_arobase">
                    </span>
                </li>
                <li id="getFormEntreprise">
                    <span class="tooltip">
                        <span class="tooltiptext">Formulaires de stages pour les Entreprises</span>
                        <a href="admin.php?action=create&controller=stage">
                            <img src="ONE-Page/images/form.png" alt="logo_arobase">
                        </a>
                    </span>
                </li>
            </ul>
        </div>

        
       
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","imgCliper", "scripts", "jquery.imgareaselect.min.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","imgCliper", "scripts", "jquery.imgareaselect.pack.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","parallax", "parallax.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","ScrollTrigger", "ScrollTrigger.min.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","ScrollTrigger","Trigger.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","parallax" ,"Parallax-scroll.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","parallax" ,"Parallax-souris.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","JQuery.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","carousel" ,"JCarousel.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "popup","popup.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "map","utile.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "load.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "css", "CSS-Utile.js")) ?>"></script>
        <script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page", "articles", "articles.js")) ?>"></script>

    </body>
</html>