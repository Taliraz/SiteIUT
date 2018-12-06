   

<ul class="carousel">
    <?php 
    require_once (File::build_path(array("model","ModelTemoignage.php")));
    $tem = ModelTemoignage::getAllTemoignages();
    foreach($tem as $key){
        echo '
            <li class="car_ele">
                <ul class="tem_pack">
                    <image src="'.File::build_path_css(array("ONE-Page","images", "fleche_l.png")).'" alt="fleche" class="fleche_l"></image>
                    <li class="carousel-prev"><button type="button"></button></li>
                    <li class="tem_main">
                        <p class="tem_tit">'.$key->getTitreTemoignage().'</p>
                        <p class="tem_cont">'.$key->getContenuTemoignage().'</p>
                        <p class="tem_aut"><span>'.$key->getPrenomEtudiant() .'</span> <span>'. $key->getNomEtudiant().'</span></p>
                    </li>
                    <li class="carousel-next"><button type="button"></button></li>
                    <image src="'.File::build_path_css(array("ONE-Page","images", "fleche_d.png")).'" alt="fleche" class="fleche_d"></image>
                </ul> 
            </li>
            ';
    }
    ?>
</ul>


