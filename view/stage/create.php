<html> 
    <body>
      <form method="post" action="admin.php?action=created&controller=stage">
        <fieldset>
          <legend>Stage :</legend>
          <p>
            <label for="intituleStage_id">Intitule</label> :
            <input type="text" placeholder="Ex : Developpement logiciel" name="intituleStage" id="intituleStage_id" required/>
          </p>

          <p>
            <label for="dateDebStage_id">Date de Début</label> :
            <input type="date" placeholder="Ex : 20/10/2018" name="dateDebStage" id="dateDebStage_id" required/>
          </p>

          <p>
            <label for="dateFinStage_id">Date de Fin</label> :
            <input type="date" placeholder="Ex : 20/10/2018" name="dateFinStage" id="dateFinStage_id" required/>
          </p>

          <p>
            <label for="gratifie_id">Stage Gratifie</label> :
            <select name="gratifie" id="gratifie_id" required>
              <option value="true">Oui </option>
              <option value="false">Non </option>
            </select>
          </p>

          <p>
             <label for="descriptionStage_id">Description du Stage</label><br />
             <textarea name="descriptionStage" id="descriptionStage_id"></textarea>
          </p>

         <p>
              <label for="idVille_id">Ville</label> 
              <select name="idVille" size="1" id="idVille_id">
                <?php
                require_once File::build_path(array("model","ModelVille.php"));
                $liste=ModelVille::getAllVilles();
                foreach($liste as $valeur){
                  echo '<option value="'.$valeur->getId().'">'.$valeur->getNom().'</option>';
                }
                ?>
              </select>
          </p>

        <p>
            <label for="nbPlaces_id">Nombre de Places</label> :
            <input type="text" name="nbPlaces" id="nbPlaces_id" required/>
        </p>

        <p>
            <label for="numSiret_id">Numéro de Siret</label> :
            <input type="text" name="numSiret" id="numSiret_id" required/>
        </p>

        <p>
            <label for="nomEntreprise_id">Nom de l'entreprise</label> :
            <input type="text" name="nomEntreprise" id="nomEntreprise_id" required/>
        </p>

        <p>
            <label for="siteEntreprise_id">Site de l'entreprise</label> :
            <input type="text" name="siteEntreprise" id="siteEntreprise_id" required/>
        </p>

        <p>
            <label for="adresseEntreprise_id">Adresse de l'entreprise</label> :
            <input type="text" name="adresseEntreprise" id="adresseEntreprise_id" required/>
        </p>

        <p>
            <label for="telephoneEntreprise_id">Numéro de téléphone de l'entreprise</label> :
            <input type="text" name="telephoneEntreprise" id="telephoneEntreprise_id" required/>
        </p>

        <p>
            <label for="nomContact_id">Nom du contact</label> :
            <input type="text" name="nomContact" id="nomContact_id" required/>
        </p>

        <p>
            <label for="prenomContact_id">Prenom du Contact</label> :
            <input type="text" name="prenomContact" id="prenomContact_id" required/>
        </p>

        <p>
            <label for="fonctionContact_id">Fonction du contact</label> :
            <input type="text" placeholder="Ex : Developpeur logiciel" name="fonctionContact" id="fonctionContact_id" required/>
        </p>

        <p>
            <label for="telephoneContact_id">Numéro de téléphone du contact</label> :
            <input type="text" name="telephoneContact" id="telephoneContact_id" required/>
        </p>

        <p>
            <label for="emailContact_id">Email du contact</label> :
            <input type="text" name="emailContact" id="emailContact_id" required/>
        </p>


          <p>
            <input type="submit" value="Envoyer" />
          </p>

        </fieldset> 
      </form>
    </body>
</html>