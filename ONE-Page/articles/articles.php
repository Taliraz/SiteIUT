
<ul id="liste_articles">
    <?php 
    require_once (File::build_path(array("model","ModelArticle.php")));
    require_once (File::build_path(array("ONE-Page","jbbcode", "JBBCode", "Parser.php")));
    $art = ModelArticle::getAllArticles();
    $req = Model::$pdo->query('SELECT COUNT(idArticle) FROM `mon-Articles`');
    $total_articles = $req->fetch();
    $total = intval($total_articles[0]);
    $cpt = 0;
        
    echo '
    <select id="selectArt" onchange="artGoTo()">';
        foreach($art as $key) {
            echo '<option value="'.$key->getIdArticle().'">'.$key->getNomArticle().'</option>';
        }  
    echo '
        <option value="0" id="optionPPN">Le PPN</option>
    </select> '; 
    
    echo '
        <li class="article">
            <h1 class="nomArticle">Le PPN</h1>
            <span id="0" class="getArtId"></span>
            <div class="artHeader">
            </div>
            <!-- <a id="PPN" href=$domain."/img/PPN_INFORMATIQUE_256097.pdf" download="PPN_INFORMATIQUE">Télécharger le PPN</a> -->
            <embed id="pdfPPN" src="ONE-Page/images/PPN_INFORMATIQUE.pdf"  type="application/pdf"/>
        </li>';
    
    foreach($art as $key){ 
        $id = $key->getIdArticle();
        
        
        if ($cpt < $total){
            $reqNext = Model::$pdo->query("SELECT nomArticle, idArticle FROM `mon-Articles` WHERE idArticle = (select min(idArticle) from `mon-Articles` where idArticle > $id)");
            $reqPrev = Model::$pdo->query("SELECT nomArticle, idArticle FROM `mon-Articles` WHERE idArticle = (select max(idArticle) from `mon-Articles` where idArticle < $id)");
            $nextNom = $reqNext->fetch();
            $prevNom = $reqPrev->fetch();
        }
        
        $cpt++;
        
        require (File::build_path(array("ONE-Page", "jbbcode", "getParsed.php")));
        $parser->parse($key->getContenuArticle());
        
        echo '<li class="article">
                <h1 class="nomArticle">'.$key->getNomArticle().'</h1>
                <span id="'.$id.'" class="getArtId"></span>
                <div class="artHeader">';
                
        if ($prevNom != NULL){
            echo '<p class="InfosPrev">Précédent : <br>'.$prevNom[0].'</p>';
        }
        else {
            echo '<p class="InfosPrev"></p>';
        }
        
        if($nextNom != NULL){
            echo '<p class="InfosNext">Suivant : <br>'.$nextNom[0].'</p>';
        }
        else {
            echo '<p class="InfosNext"></p>';
        }
        
        echo '</div>
            <span class="tooltip">
                <span class="tooltiptext">Cliquez pour une lecture plein écran !</span>
                <p class="contenu_article">'.$parser->getAsHtml() .'<br></p>
            </span>
            
            </li>';
        }
        
    ?>
</ul>
<div id="switcher"></div>


