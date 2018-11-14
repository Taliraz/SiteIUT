<html>
	<body>
		<form method="post" action="index.php?action=created&controller=page">
			<fieldset>
				<legend> Page : </legend>

				<p>
					<label for="titrePage_id"> Titre </label> :
					<input type = "text" placeholder="Ex : Nom page " name="titrePage" id="intitulePage_id" required/>
				</p>


				<p>
					<label for=adressePage_id> Adresse de la page </label> :
					<input type ="text" placeholder="Ex : Adresse page" name="adressePage" id="adressePage_id" required/>
				</p>


				<?php
					$liste = ModelPage::getAllPage();
					foreach($liste as $valeur){
						echo '<option value="'.$valeur->getIdPage().'">'.$valeur->getTitrePage().'</option';
					}

				?>


				<p>
					<input type="submit" value="Envoyer"/>

				</p>

			</fieldset>
		</form>
	</body>
</html>
