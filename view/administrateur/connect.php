<html>
    <body>
      <form id="connexion" method="post" action="admin.php?controller=administrateur&action=connected">
        <fieldset>
          <legend>Connexion :</legend>
          <p>
            <label for="login_id">Login</label> :
            <input type="text" placeholder="Ex : 256AB34" name="login" id="login_id" required/>
          </p>
          <p> 
            <label for="mdp_id">Mot de passe</label> :
            <input type="password" name="mdp" id="mdp_id" required/>
          <p>
            <input type="submit" value="Envoyer" id="connexionButton"/>
          </p>
        </fieldset> 
      </form>
    </body>
</html>