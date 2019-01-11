
<form class="updateFormulaire" method="post" action="admin.php?controller=article&action=updated&idArticle=<?php echo $v->getIdArticle(); ?>">
    
    <fieldset>
      <legend>Mon formulaire :</legend>
      <p> 
        <label for="nom_id">Nom</label> :
        <?php echo'<input type="text" value="'.$v->getNomArticle().'" name="nom" id="login_id" required/>'?>
      </p>
      <p>
         <label for="contenu_id">Contenu</label><br />
         <?php echo '<textarea name="contenu" id="contenu_id">'. $v->getContenuArticle() .'</textarea>'?>
      </p>
      <p>
        <input id="bouton-envoyer" type="submit" value="Envoyer" />
      </p>
      <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
    </fieldset> 
</form>

<script type="text/javascript" src="<?php echo File::build_path_css(array("ONE-Page","JQuery.js")) ?>"></script>
<script>
$(function() {
    var optionWbb = {
        buttons: "bold,italic,underline,strike,|,img,video,link,|,fontcolor,fontsize,|,justifyleft,justifycenter,justifyright,|,quote"
    }
    $("#contenu_id").wysibb(optionWbb);
})
</script>