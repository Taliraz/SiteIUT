// Execution de cette fonction lorsque le DOM sera entièrement chargé
$(document).ready(function() {
     var fleche_l = document.getElementsByClassName("fleche_l")[0]
     fleche_l.style.display = "none" 
	// Calcul préalables :
		// Element de référence pour la zone de visualisation (ici le premier item)
		Reference = $(".carousel li:first-child");
		// Nombre d'éléments de la liste
		NbElement = $(".carousel .tem_tit").length;
	// Ciblage de la bande de diapositives
	$(".carousel")
		// Englobage de la liste par la zone de visualisation
		.wrap('<div class="carousel-conteneur"></div>')
		// Application d'une largeur à la bande de diapositive afin de conserver une structrure horizontale
		.css("width", (Reference.width() * NbElement) );
	// Ciblage de la zone de visualisation
	$(".carousel-conteneur")
		// Application de la largeur d'une seule diapositive
		.width(  Reference.width()  )
		// Application de la hauteur d'une seule diapositive
		.height( Reference.height() )
		// Blocage des débordements
		.css("overflow", "hidden");
		// Insertion des boutons de navigation

		Cpt = 0;
		// Clic sur le bouton "Suivant"

		$(".carousel-next").click(function() {
			// Si le compteur est inférieur au nombre de diaposives moins 1
			if(Cpt < (NbElement-1) ) {
				// Ajout +1 au compteur (nous allons sur la diapositive suivante)
				++Cpt;
				// Mouvement du carrousel en arrière-plan
				$(".fleche_d").animate({
					marginRight : - (Reference.width() * Cpt)
				});
				$(".fleche_l").animate({
					marginRight : - (Reference.width() * Cpt)
				});
				$(".carousel").animate({
					marginLeft : - (Reference.width() * Cpt)
				});
			} 
            if (Cpt == NbElement-1) {
                var fleche_d = document.getElementsByClassName("fleche_d")[Cpt]
                fleche_d.style.display = "none"
            }
            // fin du if
		});
		// Action du bouton "Précédent"
		$(".carousel-prev").click(function() {
			// Si le compteur est supérieur à zéro
			if(Cpt > 0) {

				// Soustraction -1 au compteur (nous allons sur la diapositive précédente)
				--Cpt;
				// Mouvement du carrousel en arrière-plan
				$(".fleche_l").animate({
					marginRight : - (Reference.width() * Cpt)
				});
				$(".fleche_d").animate({
					marginRight : - (Reference.width() * Cpt)
				});
				$(".carousel").animate({
					marginLeft : - (Reference.width() * Cpt)
				});
			} 
            // fin du if
		});
});