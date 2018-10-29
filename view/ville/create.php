<html> 
    <body>
      <form method="post" action="index.php?action=created&controller=ville">
        <fieldset>
          <legend>Ville :</legend>
          <p>
            <label for="nom_id">Nom</label> :
            <input type="text" placeholder="Ex : Montpellier" name="nom" id="nom_id" required/>
          </p>
          <p>
            <label for="codePostal_id">Code Postal</label> :
            <input type="text" placeholder="Ex : 34000" name="codePostal" id="codePostal_id" required/>
          </p>
          <p>
            <label for="departement_id">Departement</label> :
            <input type="text" placeholder="Ex : Herault" name="departement" id="departement_id" required/>
          </p>
          <p>
            <input type="submit" value="Envoyer" />
          </p>
        </fieldset> 
      </form>
    </body>
</html>