
<ul class="liste_articles">
    <?php 
    require_once (File::build_path(array("model","ModelArticle.php")));
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
        
    echo '</select> '; 
    
    foreach($art as $key){ 
        $id = $key->getIdArticle();
        
        
        if ($cpt < $total){
            $reqNext = Model::$pdo->query("SELECT nomArticle, idArticle FROM `mon-Articles` WHERE idArticle = (select min(idArticle) from `mon-Articles` where idArticle > $id)");
            $reqPrev = Model::$pdo->query("SELECT nomArticle, idArticle FROM `mon-Articles` WHERE idArticle = (select max(idArticle) from `mon-Articles` where idArticle < $id)");
            $nextNom = $reqNext->fetch();
            $prevNom = $reqPrev->fetch();
        }
        
        $cpt++;
        
        
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
                <p class="contenu_article">'.$key->getContenuArticle() .'</p>
            </li>';
        }
    ?>
</ul>
<div id="switcher"></div>
