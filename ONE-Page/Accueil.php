<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Accueil.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>One-page</title>
        
    </head>
    <body>
        
        <video id="video" class="media" muted autoplay loop>
              <source src="videos/Naruto.mp4" type="video/mp4">
        </video> 

        <div>
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)">Bonjour!</h1>
            <p data-scroll="toggle(.scaleDownIn, .scaleDownOut)" class="texte">et Bienvenue !</p>
            <p><image src="images/fleche.png" alt="fleche" id="fleche"></image></p>
        </div>
        
        <div id="slide1Intro" class="slides">
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)"></h1>
        </div>
        
        <div id="slide1Middle" class="slides">
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)" id="titreSlide1">Trouver un IUT</h1>
            <p data-scroll="toggle(.scaleDownIn, .scaleDownOut)" class="texte" id="texte">
            Si sa fortune était petite,
            Elle était sûre tout au moins.
A la fin, les trésors déchargés sur la plage
Le tentèrent si bien qu'il vendit son troupeau,
Trafiqua (2) de l'argent, le mit entier(3) sur l'eau.
            Cet argent périt par naufrage.
Son maître fut réduit à garder les brebis,
Non plus berger en chef comme il était jadis,
Quand ses propres moutons paissaient sur le rivage:
Celui qui s'était vu Coridon ou Tircis (4)
            Fut Pierrot (4) et rien davantage.
Au bout de quelque temps, il fit quelques profits,
            Racheta des bêtes à laine ;
Et comme un jour les vents retenant leur haleine
Laissaient paisiblement aborder les vaisseaux :
Vous voulez de l'argent, ô Mesdames les Eaux,
Dit-il, adressez-vous, je vous prie, à quelque autre:
            Ma foi, vous n'aurez pas le nôtre.

Ceci n'est pas un conte à plaisir inventé.
            Je me sers de la vérité
            Pour montrer par expérience,
            Qu'un sou quand il est assuré
            Vaut mieux que cinq en espérance (5) ;
Qu'il se faut contenter de sa condition ;
Qu'aux conseils de la mer et de l'ambition
            Nous devons fermer les oreilles.
Pour un qui s'en louera, dix mille s'en plaindront.
            La mer promet monts et merveilles :
Fiez-vous y, les vents et les voleurs viendront.

	 
Sagesse et prudence dans la gestion de nos biens,
c'est le conseil de La Fontaine ... 
            </p>
            <p data-scroll="toggle(.fromTopIn, .fromTopOut)">
                <img src="images/anime1.png" alt="bob" id="imageSolo" class="media">
                <span></span>
            </p>
        </div>
        <div id="slide1End" class="slides">
            <h1 data-scroll="toggle(.fromRightIn, .fromRightOut)" style="text-shadow:4px 4px black;">Une Image !</h1>
        </div>
        <div id="slide2" class="slides">
                <image src="images/anime7.jpg" alt="image" class="media"></image>
        </div>
        <div id="slide3Begin" class="slides">
            <h1 data-scroll="toggle(.scaleDownIn, .scaleDownOut)" style="text-shadow:4px 4px black;margin-top:100px;">Encore plus !</h1>
        </div>
        <div id="slide3Back" class="slides">
            <image src='images/gif3.gif' alt="image" class="media"></image>
        </div>
        <div id="slide3End" class="slides">
        </div>
        <div id="slide3Sup" class="slides">
            <p></p> <!-- NE PAS SUPPRIMER -->
            <p data-depth="0.4">
                <img src="images/anime3.jpg" alt="bob" id="image1">
            </p>
            <p data-depth="0.5">
                <img src="images/anime2.jpg" alt="bob" id="image2">
            </p>
            <p data-depth="0.6">
                <img src="images/anime6.jpg" alt="bob" id="image3">
            </p>
            <p data-depth="0.4">
                <img src="images/anime5.png" alt="bob" id="image4">
            </p>
            <p data-depth="0.3">
                <img src="images/anime4.jpg" alt="bob" id="image5">
            </p>
       </div>
        <div id="slide4" class="slides">
            <image src="images/anime8.jpg" alt="image" class="media"></image>
        </div>
        
        
        
        
        <script src="parallax/parallax.js"></script>
        <script src="ScrollTrigger/ScrollTrigger.min.js"></script>
        <script src="Trigger.js"></script>
        <script src="Parallax-scroll.js"></script>
        <script src="Parallax-souris.js"></script>
    </body>
</html>