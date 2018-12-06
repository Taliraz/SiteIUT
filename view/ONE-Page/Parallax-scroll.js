
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


window.onload=function(){
    slide1Intro.style.top = innerHeight
    slide1Middle.style.op = innerHeight+slide1Intro.clientHeight + 'px'
    slide1End.style.op = innerHeight+slide1Intro.clientHeight+slide1Middle.clientHeight + 'px'
    slide2.style.op = innerHeight+700 + 'px'
    slide3Begin.style.op = 700+innerHeight+slide1Intro.clientHeight+slide1Middle.clientHeight + 'px'
    slide3Sup.style.op = 900+innerHeight+slide1Intro.clientHeight+slide1Middle.clientHeight + 'px'
    slide3Back.style.op = 900+innerHeight+slide1Intro.clientHeight+slide1Middle.clientHeight + 'px'
    slide4.style.op = innerHeight+100 + 'px'
    
};



var scrollheight = 	document.body.scrollHeight // height of entire document
var windowheight = window.innerHeight // height of browser window


function parallaxScroll(objet, vitesse, yOrigin){
	var scrolltop = window.pageYOffset // get number of pixels document has scrolled vertically
	var scrollamount = (scrolltop / (scrollheight-windowheight)) * 100 // get amount scrolled (in %)
	objet.style.top = yOrigin -scrolltop * vitesse + 'px' // move bubble1 at 20% of scroll speed
}


window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(video, 0.1, 0)) // call parallaxbubbles() on next available screen repaint
}, false)

window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(slide1Intro, 1, video.clientHeight)) // call parallaxbubbles() on next available screen repaint
}, false)

window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(slide1Middle, 1, video.clientHeight+slide1Intro.clientHeight)) // call parallaxbubbles() on next available screen repaint
}, false)

window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(slide1End, 1, video.clientHeight+slide1Intro.clientHeight+slide1Middle.clientHeight)) // call parallaxbubbles() on next available screen repaint
}, false)

window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(slide2, 0.6, video.clientHeight+700)) // call parallaxbubbles() on next available screen repaint
}, false)

window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(slide3Begin, 1, 700+video.clientHeight+slide1Intro.clientHeight+slide1Middle.clientHeight)) // call parallaxbubbles() on next available screen repaint
}, false)

window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(slide3End, 1, 900+video.clientHeight+slide1Intro.clientHeight+slide1Middle.clientHeight)) // call parallaxbubbles() on next available screen repaint
}, false)

window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(slide3Sup, 1, 900+video.clientHeight+slide1Intro.clientHeight+slide1Middle.clientHeight)) // call parallaxbubbles() on next available screen repaint
}, false)

window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(slide3Back, 1, 900+video.clientHeight+slide1Intro.clientHeight+slide1Middle.clientHeight)) // call parallaxbubbles() on next available screen repaint
}, false)

window.addEventListener('scroll', function(){ // on page scroll
	requestAnimationFrame(parallaxScroll(slide4, 0.2, video.clientHeight+100)) // call parallaxbubbles() on next available screen repaint
}, false)




