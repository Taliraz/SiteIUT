<html> 
    <body>
      <form class="createFormulaire" method="post" action="admin.php?action=created">
        <fieldset>
          <legend>Ajouter une Ville :</legend>
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
          <p>
              <input id="bouton-retour" type="button" value="Retour" onclick="history.go(-1)">
          </p>
        </fieldset> 
      </form>
    </body>
</html>