<html> 
    <body>
      <form method="post" action="admin.php?controller=article&action=created">
        <fieldset>
          <legend>Article :</legend>
          <p>
            <label for="nom_id">Nom</label> :
            <input type="text" placeholder="Ex : Description" name="nom" id="nom_id" required/>
          </p>
          <p>
             <label for="contenu_id">Contenu</label><br />
             <textarea name="contenu" id="contenu_id"></textarea>
          </p>
          <p>
            <input type="submit" value="Envoyer" />
          </p>
        </fieldset> 
      </form>
    </body>
</html>