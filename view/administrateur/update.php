<html> 
    <body>
      <form method="post" action="index.php?controller=utilisateur&action=updated&login=<?php echo $v->getLogin(); ?>">
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
            <input type="submit" value="Envoyer" />
          </p>
        </fieldset> 
      </form>
    </body>
</html>