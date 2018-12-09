   

<ul class="liste_articles">
    <?php 
    require_once (File::build_path(array("model","ModelArticle.php")));
    $art = ModelArticle::getAllArticles();
    $req = Model::$pdo->query('SELECT COUNT(idArticle) FROM `mon-Articles`');
    $total_articles = $req->fetch();
    $cpt = 0;
    foreach($art as $key){ 
        $cpt++;
        echo '
            <li class="article">
                <p class="nom_article">'.$key->getNomArticle().'</p>
                <p class="contenu_article">'.$key->getContenuArticle() .'</p>
            ';
        
        if ($cpt < intval($total_articles[0])){
            echo '<br><div class="ligne_article"></div>';
        }
                
        echo '
            </li>
            ';
    }
    ?>
</ul>