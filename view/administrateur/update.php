<html> 
    <body>
      <form class="updateFormulaire" method="post" action="admin.php?controller=utilisateur&action=updated&login=<?php echo $v->getLogin(); ?>">
        <fieldset>
          <legend>Mon formulaire :</legend>
          <p> 
            <label for="login_id">Login</label> :
            <?php echo'<input readonly type="text" value="'.$v->getLogin().'" name="login" id="login_id" required/>'?>
          </p>
          <p> 
            <label for="mdp_id">Mot de passe</label> :
            <input type="password" name="mdp" id="mdp_id" required/>
          <p>
          <p>
            <input id="bouton-envoyer" type="submit" value="Envoyer" />
          </p>
          <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
        </fieldset> 
      </form>
    </body>
</html>