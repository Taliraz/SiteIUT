//Fonction utilisée pour fermer la popup et enlever la classe selected sur le lien
function deselect(e) {
     $('.tem_cont').slideFadeToggle(function()
     {
        e.removeClass('selected');
     }); 
}
$(function(){
    
    var status = false;
    
 $('.popup_trigger').on('click', function()
     {
     if($(this).hasClass('selected'))
     {
         status = true;
        deselect($(this)); 
    }
     else
     {
         status = true;
         $(this).addClass('selected');
         $('.tem_cont').slideFadeToggle();
     }
     return false;
    });
    
    
    
    $('.tem_cont').on('click', function()
     {
     if(status == true){
        status = false;
        deselect($(this));
            
        } 
         return false;
     });

    
    $('.carousel-next').on('click', function(){
        if(status == true){
            status = false;
            deselect($(this));  
        }
         return false;
    });

    
    $('.carousel-next').on('click', function(){
        if(status == true){
            status = false;
            deselect($(this));
        }
         return false;
    }); 
  
});



//Fonction d'animation de la fenêtre. Elle permet d'afficher ou de masquer la fenêtre
$.fn.slideFadeToggle = function(easing, callback)
{
 return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
};