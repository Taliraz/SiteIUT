<html> 
    <body>
      <form method="post" action="index.php?action=created">
        <fieldset>
          <legend>Stage :</legend>
          <p>
            <label for="intitule_id">Intitule</label> :
            <input type="text" placeholder="Ex : Developpement logiciel" name="intitule" id="intitule_id" required/>
          </p>

          <p>
            <label for="dateDeb_id">Date de Début</label> :
            <input type="date" placeholder="Ex : 20/10/2018" name="dateDeb" id="dateDeb_id" required/>
          </p>

          <p>
            <label for="dateDeb_id">Date de Fin</label> :
            <input type="date" placeholder="Ex : 20/10/2018" name="dateFin" id="dateFin_id" required/>
          </p>

          <p>
            <label for="remunere_id">Stage Remunere</label> :
            <select name="remunere" id="remunere_id" required>
              <option value="true">Oui </option>
              <option value="false">Non </option>
            </select>
          </p>

          <p>
            <input type="submit" value="Envoyer" />
          </p>

        </fieldset> 
      </form>
    </body>
</html>