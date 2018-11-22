
window.requestAnimationFrame = window.requestAnimationFrame
                               || window.mozRequestAnimationFrame
                               || window.webkitRequestAnimationFrame
                               || window.msRequestAnimationFrame
                               || function(f){setTimeout(f, 1000/60)}

var video = document.getElementById('video')
var slide1Intro = document.getElementById('slide1Intro')
var slide1Middle = document.getElementById('slide1Middle')
var slide1End = document.getElementById('slide1End')
var slide2 = document.getElementById('slide2')
var slide3Begin = document.getElementById('slide3Begin')
var slide3End = document.getElementById('slide3End')
var slide3Sup = document.getElementById('slide3Sup')
var slide3Back = document.getElementById('slide3Back')
var slide4 = document.getElementById('slide4')

var lastpic = document.getElementById("image5")

var texte = document.getElementById("texte")
var imageSolo = document.getElementById("imageSolo")
var titreSlide1 = document.getElementById("titreSlide1")


window.onload = function() {
    document.body.style.height = 2*video.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight + slide3Back.clientHeight - 50 + slide4.clientHeight + "px"
    
    slide3End.style.height = lastpic.link.offsetTop - (2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight) + "px"
    
    slide1Middle.style.height = texte.clientHeight + imageSolo.clientHeight + titreSlide1.clientHeight + "px"
}

window.onresize = function() {
    document.body.style.height = 2*video.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight + slide3Back.clientHeight - 50 + slide4.clientHeight + "px"
    
    slide3End.style.height = lastpic.link.offsetTop - (2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight) + "px"
    
    slide1Middle.style.height = texte.clientHeight + imageSolo.clientHeight + titreSlide1.clientHeight + "px"
}


var scrollheight = 	document.body.scrollHeight 
var windowheight = window.innerHeight 


//Fonction de réglage de la hauteur en fonction du scroll

function parallaxScroll(objet, vitesse, yOrigin){
	var scrolltop = window.pageYOffset 
	var scrollamount = (scrolltop / (scrollheight-windowheight)) * 100 
	objet.style.top = yOrigin -scrolltop * vitesse + 'px' 
}



//Video

window.addEventListener('load', function(){ 
	requestAnimationFrame(parallaxScroll(video, 0.1, 0))
}, false)

window.addEventListener('scroll', function(){ 
	requestAnimationFrame(parallaxScroll(video, 0.1, 0)) 
}, false)




//Premier Slide - Première Partie

window.addEventListener('load', function(){
     slide1Intro.style.height = video.clientHeight + "px";
	requestAnimationFrame(parallaxScroll(slide1Intro, 1, 0)) 
}, false)

window.addEventListener('resize', function(){ 
     slide1Intro.style.height = video.clientHeight + "px";
	requestAnimationFrame(parallaxScroll(slide1Intro, 1, 0)) 
}, false)

window.addEventListener('scroll', function(){ 
    slide1Intro.style.height = video.clientHeight + "px";
	requestAnimationFrame(parallaxScroll(slide1Intro, 1, 0)) 
}, false)




//Premier Slide - Deuxième Partie

window.addEventListener('load', function(){ 
	requestAnimationFrame(parallaxScroll(slide1Middle, 1, slide1Intro.clientHeight)) 
}, false)

window.addEventListener('resize', function(){ 
	requestAnimationFrame(parallaxScroll(slide1Middle, 1, slide1Intro.clientHeight)) 
}, false)

window.addEventListener('scroll', function(){ 
	requestAnimationFrame(parallaxScroll(slide1Middle, 1, slide1Intro.clientHeight))
}, false)







//Premier Slide - Troisième Partie

window.addEventListener('load', function(){ 
    var h1 = slide1Intro.clientHeight;
	requestAnimationFrame(parallaxScroll(slide1End, 1, h1+slide1Middle.clientHeight - 1))
}, false)

window.addEventListener('resize', function(){ 
    var h1 = slide1Intro.clientHeight;
	requestAnimationFrame(parallaxScroll(slide1End, 1, h1+slide1Middle.clientHeight - 1)) 
}, false)

window.addEventListener('scroll', function(){ 
    var h1 = slide1Intro.clientHeight;
	requestAnimationFrame(parallaxScroll(slide1End, 1, h1+slide1Middle.clientHeight - 1)) 
}, false)




//Deuxieme Slide
var v = 0.5

window.addEventListener('load', function(){ 
    var h2 = (slide1Intro.clientHeight + slide1Middle.clientHeight)*v
	requestAnimationFrame(parallaxScroll(slide2, v, h2)) 
}, false)

window.addEventListener('resize', function(){ 
    var h2 = (slide1Intro.clientHeight + slide1Middle.clientHeight)*v
	requestAnimationFrame(parallaxScroll(slide2, v, h2)) 
}, false)

window.addEventListener('scroll', function(){ 
    var h2 = (slide1Intro.clientHeight + slide1Middle.clientHeight)*v
	requestAnimationFrame(parallaxScroll(slide2, v, h2)) 
}, false)





//Troisième Slide - Première Partie

window.addEventListener('load', function(){ 
    var h3 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3Begin, 1, h3)) 
}, false)

window.addEventListener('resize', function(){
    var h3 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3Begin, 1, h3)) 
}, false)

window.addEventListener('scroll', function(){ 
    var h3 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3Begin, 1, h3))  
}, false)





//Troisème Slide - Deuxième Partie - Première Couche

window.addEventListener('load', function(){ 
    var h4 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3End, 1, h4)) 
}, false)

window.addEventListener('resize', function(){ 
    var h4 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3End, 1, h4))
}, false)

window.addEventListener('scroll', function(){ 
    var h4 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3End, 1, h4)) 
}, false)




//Troisème Slide - Deuxième Partie - Deuxième Couche

window.addEventListener('load', function(){ 
    var h4 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3Sup, 1, h4)) 
}, false)

window.addEventListener('resize', function(){ 
    var h4 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3Sup, 1, h4)) 
}, false)

window.addEventListener('scroll', function(){ 
    var h4 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3Sup, 1, h4)) 
}, false)



//Troisème Slide - Deuxième Partie - Troisième Couche

window.addEventListener('load', function(){
    var h4 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3Back, 1, h4)) 
}, false)

window.addEventListener('resize', function(){
    var h4 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3Back, 1, h4))  
}, false)

window.addEventListener('scroll', function(){ 
    var h4 = 2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight - 50
	requestAnimationFrame(parallaxScroll(slide3Back, 1, h4))  
}, false)



//Quatrième Slide

var v2 = 0.2

window.addEventListener('load', function(){ 
    var h5 = (2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight + slide3Back.clientHeight - 50)*v2
	requestAnimationFrame(parallaxScroll(slide4, v2, h5)) 
}, false)

window.addEventListener('resize', function(){ 
    var h5 = (2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight + slide3Back.clientHeight - 50)*v2
	requestAnimationFrame(parallaxScroll(slide4, v2, h5)) 
}, false)

window.addEventListener('scroll', function(){ 
    var h5 = (2*slide1Intro.clientHeight + slide1Middle.clientHeight + slide3Begin.clientHeight + slide3Back.clientHeight - 50)*v2
	requestAnimationFrame(parallaxScroll(slide4, v2, h5)) 
}, false)


