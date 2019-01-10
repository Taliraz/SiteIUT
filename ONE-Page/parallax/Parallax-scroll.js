

var pageTop = 0
var slide0 = document.getElementById('slide0')
var slide1 = document.getElementById('slide1')
var slide2 = document.getElementById('slide2')
var slide3 = document.getElementById('slide3')
var slide4 = document.getElementById('slide4')

var scrollheight = 	document.body.scrollHeight 
var windowheight = window.innerHeight 
var marginTop = (windowheight/100)*8

var classArticles = slide3.getElementsByClassName("liste_articles")


function viewportToPixels(value) {
  var parts = value.match(/([0-9\.]+)(vh|vw)/)
  var q = Number(parts[1])
  var side = window[['innerHeight', 'innerWidth'][['vh', 'vw'].indexOf(parts[2])]]
  return side * (q/100)
}



window.onload = function() {   
    if (window.innerWidth < 600) {
        pageTop = marginTop
    }
    var pageEnd = slide0.clientHeight + slide1.clientHeight + slide2.clientHeight + slide3.clientHeight + slide4.clientHeight + pageTop
    document.body.style.height = pageEnd + "px";
}

window.onresize = function() {  
    if (window.innerWidth < 600) {
        pageTop = marginTop
    }
    var pageEnd = slide0.clientHeight + slide1.clientHeight + slide2.clientHeight + slide3.clientHeight + slide4.clientHeight + pageTop
    document.body.style.height = pageEnd + "px";
}




//Fonction de réglage de la hauteur en fonction du scroll

function parallaxScroll(objet, vitesse, yOrigin){
	var scrolltop = window.pageYOffset 
	var scrollamount = (scrolltop / (scrollheight-windowheight)) * 100 
	objet.style.top = yOrigin -scrolltop * vitesse + 'px' 
}




//Slide 0 - Haut de page

window.addEventListener('load', function(){
     slide0.style.height = slide0.clientHeight + "px";
	parallaxScroll(slide0, 1, pageTop)
}, false)

window.addEventListener('resize', function(){ 
     slide0.style.height = slide0.clientHeight + "px";
	parallaxScroll(slide0, 1,  pageTop)
}, false)

window.addEventListener('scroll', function(){ 
    slide0.style.height = slide0.clientHeight + "px";
	parallaxScroll(slide0, 1,  pageTop)
}, false)




//Premier Slide

window.addEventListener('load', function(){ 
	parallaxScroll(slide1, 1, slide0.clientHeight + pageTop)
}, false)

window.addEventListener('resize', function(){ 
	parallaxScroll(slide1, 1, slide0.clientHeight + pageTop)
}, false)

window.addEventListener('scroll', function(){ 
	parallaxScroll(slide1, 1, slide0.clientHeight + pageTop)
}, false)






//Deuxieme Slide
var v = 0.5

window.addEventListener('load', function(){ 
    var h2 = (slide0.clientHeight + slide1.clientHeight)*v + pageTop
	parallaxScroll(slide2, v, h2)
}, false)

window.addEventListener('resize', function(){ 
    var h2 = (slide0.clientHeight + slide1.clientHeight)*v + pageTop
	parallaxScroll(slide2, v, h2)
}, false)

window.addEventListener('scroll', function(){ 
    var h2 = (slide0.clientHeight + slide1.clientHeight)*v + pageTop
	parallaxScroll(slide2, v, h2)
}, false)






//Troisème Slide 

window.addEventListener('load', function(){ 
    if(window.innerWidth>600){
        var h4 = slide0.clientHeight + slide1.clientHeight + slide2.clientHeight + pageTop
    }
    else {
        var h4 = slide0.clientHeight + slide1.clientHeight + slide2.clientHeight + pageTop
    }
	parallaxScroll(slide3, 1, h4)
}, false)

window.addEventListener('resize', function(){ 
    if(window.innerWidth>600){
        var h4 = slide0.clientHeight + slide1.clientHeight + slide2.clientHeight + pageTop
    }
    else {
        var h4 = slide0.clientHeight + slide1.clientHeight + slide2.clientHeight + pageTop
    }
	parallaxScroll(slide3, 1, h4)
}, false)

window.addEventListener('scroll', function(){ 
    if(window.innerWidth>600){
        var h4 = slide0.clientHeight + slide1.clientHeight + slide2.clientHeight + pageTop
    }
    else {
        var h4 = slide0.clientHeight + slide1.clientHeight + slide2.clientHeight + pageTop
    }
	parallaxScroll(slide3, 1, h4)
}, false)






//Quatrième Slide

var v2 = 0.7

window.addEventListener('load', function(){ 
    if(window.innerWidth>600){
        var h5 = (slide0.clientHeight + slide1.clientHeight +  slide3.clientHeight + slide2.clientHeight)*v2 + pageTop
    }
    else {
        var h5 = (slide0.clientHeight + slide1.clientHeight + slide3.clientHeight + slide2.clientHeight)*v2 + pageTop
    }
	parallaxScroll(slide4, v2, h5)
}, false)

window.addEventListener('resize', function(){ 
    if(window.innerWidth>600){
        var h5 = (slide0.clientHeight + slide1.clientHeight + slide3.clientHeight + slide2.clientHeight)*v2 + pageTop
    }
    else {
        var h5 = (slide0.clientHeight + slide1.clientHeight +  slide3.clientHeight + slide2.clientHeight)*v2 + pageTop
    }
	parallaxScroll(slide4, v2, h5)
}, false)

window.addEventListener('scroll', function(){ 
    if(window.innerWidth>600){
        var h5 = (slide0.clientHeight + slide1.clientHeight  + slide3.clientHeight + slide2.clientHeight)*v2 + pageTop
    }
    else {
        var h5 = (slide0.clientHeight + slide1.clientHeight + slide3.clientHeight + slide2.clientHeight)*v2 + pageTop
    }
	parallaxScroll(slide4, v2, h5)
}, false)


