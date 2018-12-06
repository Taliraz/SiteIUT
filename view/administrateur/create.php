<html> 
    <body>
      <form method="post" action="admin.php?controller=administrateur&action=created">
        <fieldset>
          <legend>Mon formulaire :</legend>
          <p>
            <label for="login_id">Login</label> :
            <input type="text" placeholder="Ex : 256AB34" name="login" id="login_id" required/>
          </p>

          <p> 
            <label for="mdp_id">Mot de passe</label> :
            <input type="password" name="mdp" id="mdp_id" required/>
          <p>
            <input type="submit" value="Envoyer" />
          </p>
        </fieldset> 
      </form>
    </body>
</html>