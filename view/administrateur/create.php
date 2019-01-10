<html> 
    <body>
      <form class="createFormulaire" method="post" action="admin.php?controller=administrateur&action=created">
        <fieldset>
          <legend>Ajouter un Administrateur :</legend>
          <p>
            <label for="login_id">Login</label> :
            <input type="text" placeholder="Ex : 256AB34" name="login" id="login_id" required/>
          </p>

          <p> 
            <label for="mdp_id">Mot de passe</label> :
            <input type="password" name="mdp" id="mdp_id" required/>
          <p>
            <input id="bouton-envoyer" type="submit" value="Envoyer" />
          </p>
          <p>
              <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
          </p>
        </fieldset> 
      </form>
    </body>
</html>