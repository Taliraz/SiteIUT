<html> 
    <body>
      <form method="post" action="admin.php?controller=article&action=updated&idArticle=<?php echo $v->getIdArticle(); ?>">
        <fieldset>
          <legend>Mon formulaire :</legend>
          <p> 
            <label for="nom_id">Nom</label> :
            <?php echo'<input type="text" value="'.$v->getNomArticle().'" name="nom" id="login_id" required/>'?>
          </p>
          <p>
             <label for="contenu_id">Contenu</label><br />
             <?php echo '<textarea name="contenu" id="contenu_id">'.$v->getContenuArticle().'</textarea>'?>
          </p>
          <p>
            <input type="submit" value="Envoyer" />
          </p>
        </fieldset> 
      </form>
    </body>
</html>