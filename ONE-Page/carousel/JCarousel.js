$(document).ready(function() {
		Reference = $("#carousel li:first-child");
		NbElement = $("#carousel .tem_tit").length;
	$("#carousel")
		.wrap('<div class="carousel-conteneur"></div>')
		.css("width", (Reference.width() * NbElement) );
	$(".carousel-conteneur")
		.width(Reference.width())
		.height(Reference.height())
		.css("overflow", "hidden");
		Cpt = 0;
		$(".carousel-next").click(function() {
            ++Cpt;
			if(Cpt < NbElement ) {
				$(".fleche_d").animate({ marginRight : - (Reference.width() * Cpt) }, 'fast', 'swing');
				$(".fleche_l").animate({ marginRight : - (Reference.width() * Cpt) }, 'fast', 'swing');
				$("#carousel").animate({ marginLeft : - (Reference.width() * Cpt) }, 'fast', 'swing');
			} 
            if (Cpt == NbElement){
                Cpt = 0;
                $(".fleche_l").animate({ marginRight : - (Reference.width() * Cpt) }, 'slow', 'swing');
                $(".fleche_d").animate({ marginRight : - (Reference.width() * Cpt) }, 'slow', 'swing');
                $("#carousel").animate({ marginLeft : - (Reference.width() * Cpt) }, 'slow', 'swing');
            }
		});

		$(".carousel-prev").click(function() {
			--Cpt;
			if(Cpt > 0) {
				$(".fleche_l").animate({ marginRight : - (Reference.width() * Cpt) }, 'fast', 'swing');
				$(".fleche_d").animate({ marginRight : - (Reference.width() * Cpt) }, 'fast', 'swing');
				$("#carousel").animate({ marginLeft : - (Reference.width() * Cpt) }, 'fast', 'swing');
			} 
            if (Cpt < 0){
                Cpt = NbElement - 1;
                $(".fleche_d").animate({ marginRight : - (Reference.width() * Cpt) }, 'slow', 'swing');
				$(".fleche_l").animate({ marginRight : - (Reference.width() * Cpt) }, 'slow', 'swing');
				$("#carousel").animate({ marginLeft : - (Reference.width() * Cpt) }, 'slow', 'swing');
            }
		});
});