<html> 
    <body>
      <form method="post" action="index.php?action=created">
        <fieldset>
          <legend>Temoignages :</legend>
          <p>
            <label for="contenu_id">contenu</label> :
            <br>
            <textarea name="contenu" id="contenu" required></textarea>
          </p>

          <p>
            <label for="datePublication_id">Date de Publication</label> :
            <input type="date" placeholder="Ex : 20/10/2018" name="datePublication" id="datePublication_id" required/>
          </p>

          <p>
            <label for="theme_id">Theme</label> :
            <select name="theme" id="theme_id" required>
              <option value="theme1">Theme 1 </option>
              <option value="theme2">Theme 2 </option>
            </select>
          </p>

          <p>
            <input type="submit" value="Envoyer" />
          </p>

        </fieldset> 
      </form>
    </body>
</html>