   

<ul class="carousel">
    <?php 
    require_once (File::build_path(array("model","ModelTemoignage.php")));
    $tem = ModelTemoignage::getAllTemoignages();
    foreach($tem as $key){
        $idIUT = $key->getIdIUT();
        $req_iut = Model::$pdo->query("SELECT nomIUT FROM `mon-IUTs` WHERE idIUT = $idIUT");
        $iutArray = $req_iut->fetch();
        $iut = $iutArray[0];  
        
        echo '
            <li class="car_ele">
                <ul class="tem_pack">
                
                    <image src="'.File::build_path_css(array("ONE-Page","images", "fleche_l.png")).'" alt="fleche" class="fleche_l"></image>
                    
                    <li class="tem_main">
                        <p class="tem_tit">'.$key->getTitreTemoignage().'</p>
                        
                        <div class="tem_pic" style="background-image: url('.$key->getPhotoTemoignage().')"></div>
                        
                        <p class="tem_aut"><span>'.$key->getPrenomEtudiant() .'</span> <span>'. $key->getNomEtudiant().'</span></p>
                        
                        <p class="tem_date"><span>'.$key->getAnneeEtude() .'</span> <br> <span>'. $iut.'</span></p>
                    </li>
            
                    <image src="'.File::build_path_css(array("ONE-Page","images", "fleche_d.png")).'" alt="fleche" class="fleche_d"></image>
                    
                    <div class="tem_cont">
                        <p>'.$key->getContenuTemoignage().'</p>
                    </div>
                    
                    
                    
                    <a class="carousel-prev"><button type="button"></button></a>
                    <a class="carousel-next"><button type="button"></button></a>
                    <a class="popup_trigger" href="tem_cont"><button class="popup-button"></button></a>
                </ul>
            </li>
            ';
    }
    ?>
</ul>
<script>
$('.display_popup').on('click', function()
{
 $('.tem_cont').dialog();
}
</script>

