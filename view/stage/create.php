<html> 
    <head>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    </head>
    <body>
        <div id="advert">
            <span>Section Réservée aux Entreprises</span>
            <br><br>
            <span id="pasC">Pas concerné ?</span>
            <p>
                <input id="bouton-retour" type="button" value="-> Retour" onclick="history.go(-1)" class="bouton">
            </p>
        </div>
      <form id="formStage" method="post" action="admin.php?action=created&controller=stage">
        <fieldset>
          <legend>Proposition de Stage</legend>
          <p>
            <label for="intituleStage_id">Intitule : </label>
            <input type="text" placeholder="Ex : Developpement logiciel" name="intituleStage" id="intituleStage_id" required/>
          </p>

          <p>
            <label for="dateDebStage_id">Date de Début : </label>
            <input type="date" placeholder="Ex : 20/10/2018" name="dateDebStage" id="dateDebStage_id" required/>
          </p>

          <p>
            <label for="dateFinStage_id">Date de Fin : </label>
            <input type="date" placeholder="Ex : 20/10/2018" name="dateFinStage" id="dateFinStage_id" required/>
          </p>

          <p>
            <label for="gratifie_id">Stage Gratifie : </label> 
            <select name="gratifie" id="gratifie_id" required>
              <option value="1">Oui </option>
              <option value="0">Non </option>
            </select>
          </p>

          <p>
             <label for="descriptionStage_id">Description du Stage : </label><br />
             <textarea name="descriptionStage" id="descriptionStage_id"></textarea>
          </p>

         <p>
              <label for="idVille_id">Ville : </label> 
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
            <label for="nbPlaces_id">Nombre de Places : </label>
            <input type="text" name="nbPlaces" id="nbPlaces_id" required/>
        </p>

        <p>
            <label for="numSiret_id">Numéro de Siret : </label>
            <input type="text" name="numSiret" id="numSiret_id" required/>
        </p>

        <p>
            <label for="nomEntreprise_id">Nom de l'entreprise : </label>
            <input type="text" name="nomEntreprise" id="nomEntreprise_id" required/>
        </p>

        <p>
            <label for="siteEntreprise_id">Site de l'entreprise : </label>
            <input type="text" name="siteEntreprise" id="siteEntreprise_id" required/>
        </p>

        <p>
            <label for="adresseEntreprise_id">Adresse de l'entreprise : </label>
            <input type="text" name="adresseEntreprise" id="adresseEntreprise_id" required/>
        </p>

        <p>
            <label for="telephoneEntreprise_id">Numéro de téléphone de l'entreprise : </label>
            <input type="text" name="telephoneEntreprise" id="telephoneEntreprise_id" required/>
        </p>

        <p>
            <label for="nomContact_id">Nom du contact : </label>
            <input type="text" name="nomContact" id="nomContact_id" required/>
        </p>

        <p>
            <label for="prenomContact_id">Prenom du Contact : </label>
            <input type="text" name="prenomContact" id="prenomContact_id" required/>
        </p>

        <p>
            <label for="fonctionContact_id">Fonction du contact : </label>
            <input type="text" placeholder="Ex : Developpeur logiciel" name="fonctionContact" id="fonctionContact_id" required/>
        </p>

        <p>
            <label for="telephoneContact_id">Numéro de téléphone du contact : </label>
            <input type="text" name="telephoneContact" id="telephoneContact_id" required/>
        </p>

        <p>
            <label for="emailContact_id">Email du contact : </label>
            <input type="text" name="emailContact" id="emailContact_id" required/>
        </p>
            <br>

          <p>
                <input type="submit" value="Envoyer" class="bouton" />
          </p>
        </fieldset> 
      </form>
    </body>
</html>

<style>
    html {
        font-family: 'Oswald', 'Work Sans', sans-serif;
        background-image: url("ONE-Page/images/fond_form2.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100%;
    }
    
    legend {
        font-size: 3vw;
    }
    
    label {
        font-family: 'Oswald', 'Work Sans', sans-serif;
        font-size: 1.5vw;
    }
    
    input{
        width: 30vw;
        height: 5vh;
        font-family: 'Oswald', 'Work Sans', sans-serif;
        font-size: 1.5vw;
    }

    select{
        width: 30vw;
        height: 5vh;
        font-family: 'Oswald', 'Work Sans', sans-serif;
        font-size: 1.5vw;
    }

    textarea{
        width: 50vw;
        height: 30vh;
        resize: none;
        font-family: 'Oswald', 'Work Sans', sans-serif;
        font-size: 1.5vw;
    }
    
    #formStage {
        width: 80%;
        margin-left: 8%;
        padding: 2%;
        background-color: #e8eaed;
    }
    
    #formStage p {
        margin-left: 5vw;
    }
    
    .bouton {
        width: 10vw;
    }
    
    #advert {
        position: fixed;
        font-size: 1vw;
        top: 0;
        left: 0;
        width: 10vw;
        height: auto;
        text-align: center;
        border-bottom-right-radius: 50%;
        background-color: white;
    }
    
    #bouton-retour {
        background-color: white;
        z-index: 10;
        font-size: 1.2vw;
        width: 5vw;
        border: none;
        cursor: pointer;
        margin:0;
        transform: translate(-1vw, -1vh);
    }
    
    @media screen and (max-width: 600px) {
        
        #formStage {
            width: 95vw;
            height: 93vh;
            margin: 0;
            padding-top: 7vh;
            top: 0;
            left: 0;
            position: fixed;
            overflow-y: scroll;
        }
        
        html {
            margin: 0;
            background: none;
        }
        
        legend {
            font-size: 4vh;
        }
        
        label {
            font-size: 2vh;
        }
        
        input{
            width: 80vw; 
            height: 5vh;
            font-size: 2vh;
        }

        select{
            width: 30vw;
            height: 5vh;
            font-size: 2vh;
        }

        textarea{
            width: 80vw;
            height: 30vh;
            font-size: 2vh;
        }
        
        .bouton {
            width: 30vw;
            height: 7vh;
        }
        
        #advert {
            z-index: 10;
            width: 50vw;
            height: 7vh; 
            font-size: 2.5vh;
            border-bottom-right-radius: 0;
        }
        
        #bouton-retour {
            float: right;
            position: fixed;
            right: 0;
            top: 0;
            height: 8vh;
            background-color: #c2d4ee;
            font-size: 3vh;
            width: 50vw;
        }
        
        #pasC {
            display: none;
        }
    }
</style>