var body = document.querySelector('body')
var bub1 = document.getElementById('bub1')
var display = document.getElementById("slide0")

var getTop = document.getElementById('getTop')
var getSlide1 = document.getElementById('getSlide1')
var getSlide2 = document.getElementById('getSlide2')
var getSlide3 = document.getElementById('getSlide3')
var getSlide4 = document.getElementById('getSlide4')
var getFormEntreprise = document.getElementById('getFormEntreprise')
var tooltiptext = document.getElementById('carousel').getElementsByClassName('tooltiptext')


var artNext = document.getElementsByClassName('InfosNext')
var artPrev = document.getElementsByClassName('InfosPrev')



//Bubules


var WW = window.innerWidth
var screenHeight = window.innerHeight
var timestamp = 0
var mX = 0
var totalBubble = 1


function setPropertySpeed(speed, objet) {
    objet.style.setProperty('--PointSpeed', speed +'s')
}

function setPropertyColor(color, objet) {
    objet.style.setProperty('--PointCouleur', color)
}

function setPropertyStyle1(color, objet) {
    var border = 0 + "px"
    objet.style.setProperty('--PointBorderEpaiss', border)  
}

function setPropertyStyle2(color, objet) {
    var border = 2 + "px"
    objet.style.setProperty('--PointBorderEpaiss', border)
    objet.style.setProperty('--PointBorderCouleur', color)
    objet.style.setProperty('--PointCouleur', "none")
}

function setPropertyWave(coord, objet) {
    
    var lineClose = coord * 0.5 + "vw"
    var lineMiddle = coord * 0.9 + "vw"
    coord = coord + "vw"
    
    objet.style.setProperty('--CourbePoint3', coord)
    objet.style.setProperty('--CourbePoint2', lineMiddle)
    objet.style.setProperty('--CourbePoint1', lineClose)
    objet.style.setProperty('--CourbePoint6', coord)
    objet.style.setProperty('--CourbePoint5', lineMiddle)
    objet.style.setProperty('--CourbePoint4', lineClose)
}

function getRandomSpeed(objet) {
    var speed = Math.random()*4 + 1;  
    setPropertySpeed(speed, objet);
    return speed
}

function getRandomMultiColor(objet) { 
    var color = "#"
    var i 
    for (i=0; i<6; i++){
        var rand = Math.floor(Math.random()*16)
        var j
        for (j=0; j<9; j++) {
            if (rand == j){
                color = color + j + ""
            }
        }
        if (rand == 10) {
            color = color + "A"
        }
        if (rand == 11) {
            color = color + "B"
        }
        if (rand == 12) {
            color = color + "C"
        }
        if (rand == 13) {
            color = color + "D"
        }
        if (rand == 14) {
            color = color + "E"
        }
        if (rand == 15) {
            color = color + "F"
        }
    }
    setPropertyColor(color, objet)
}

function getRandomColor(objet) {
    var tabColor = ["#c5d527", "#cad93c", "#d0dd52", "#d6e167", "#dce57d", "#e2ea93", "#e7eea8", "#edf2be", "#f3f6d3", "#f9fae9", "#ffffff"]
    var rand = Math.floor(Math.random()*11)
    var i 
    var color
    for(i=0;i<11;i++){
        if(rand==i){
            color = tabColor[i]
        }
    } 
    setPropertyColor(color, objet)
    return color
}

function getRandomStyle (color, objet) {
    var rand = Math.random();
    if (rand<0.5) {
        setPropertyStyle1(color, objet)
    }
    else {
        setPropertyStyle2(color, objet)
    }
}

function getRandomWave(objet) {
    var coord = (Math.random()+1)/2
    setPropertyWave(coord, objet)
}

function spawnBubble (spawnSpot, type) {
    totalBubble = document.getElementsByClassName("bubble").length + 1
    
    var premBubble = document.getElementById("bub1")
    var newBubble = document.createElement("div")
    body.appendChild(newBubble)
    
    var nomBubble = "bub"+totalBubble
    newBubble.id = nomBubble
     
    var Bubble = document.getElementById(nomBubble)
    
    if (type == "left"){
        Bubble.style.left = Math.random() * 15 + "vw"
    }
    else if (type == "right"){
        Bubble.style.left = 100 - (Math.random() * 15) + "vw"
    }
    else {
        Bubble.style.left = spawnSpot + ((Math.random()-0.5) * 10) + "vw"
    }
    
    Bubble.style.position = "fixed"
    Bubble.style.top = 100 + "vh"
    
    var speed = getRandomSpeed(Bubble)
    var color = getRandomColor(Bubble)
    getRandomStyle(color, Bubble)
    getRandomWave(Bubble)
    
    var idBubble = "#"+nomBubble
    
    $(idBubble).addClass('bubble')
}

$(document).mousemove(function(e) {
    totalBubble = document.getElementsByClassName("bubble").length 
    var now = Date.now()
    currentmX = e.screenX
    var mouseSpot = Math.floor((e.screenX/WW)*100) 
    var dt = now - timestamp
    var distance = Math.abs(currentmX - mX)
    var speed = Math.round(distance / dt * 1000)
    
    if (window.scrollY < screenHeight){
        if (speed > 7000){
            spawnBubble(mouseSpot, "middle")
        }

        if (mouseSpot < 1) {
            spawnBubble(mouseSpot, "left")
        }

        if (mouseSpot > 98) {
            spawnBubble(mouseSpot, "right")
        }
    }     

    mX = currentmX;
    timestamp = now;
    
});

window.addEventListener("scroll", function(){
    if (window.scrollY > screenHeight) {
        for (var i=2;i<=totalBubble+1;i++){
            var nom = "bub"+i
            var deadBubble = document.getElementById(nom)
            body.removeChild(deadBubble)
        }
    }
}, false);



//Blocage du scroll

var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
}




//Scroll

function getMarginTop(){
    var windowheight = window.innerHeight 
    var windowwidth = window.innerWidth 
    if (windowwidth < 600){
        var marginTop = (windowheight/100)*8
        return marginTop
    }
    else {
        return 0
    }
}

function forceSlide0(){
    var cible = slide0
    var speed = 500
    $('html, body').animate( { scrollTop: $(cible).offset().top - getMarginTop() }, speed );
}

getTop.addEventListener("click", function(){
    forceSlide0()
}, false);

function forceSlide1(){
    var cible = slide1
    var speed = 500
    $('html, body').animate( { scrollTop: $(cible).offset().top - getMarginTop() }, speed );
}

getSlide1.addEventListener("click", function(){
    forceSlide1()
}, false);

function forceSlide2(){
    var cible = slide1
    var speed = 500
    var scroll = Math.floor($(cible).offset().top + cible.offsetHeight) + 1
    $('html, body').animate( { scrollTop: scroll - getMarginTop() }, speed );
}

getSlide2.addEventListener("click", function(){
    forceSlide2()
}, false);

function forceSlide3(){
    var cible = slide3
    var speed = 500
    $('html, body').animate( { scrollTop: $(cible).offset().top - getMarginTop() }, speed );
}

getSlide3.addEventListener("click", function(){
    forceSlide3()
}, false);

function forceSlide4(){
    var cible = slide3
    var speed = 500
    var scroll = Math.floor($(cible).offset().top + cible.offsetHeight)
    $('html, body').animate( { scrollTop: scroll - getMarginTop() }, speed );
}

getSlide4.addEventListener("click", function(){
    forceSlide4()
}, false);


//Gestion de l'état de scroll

var niveauScroll = 0
var niveauScrollMax = (document.getElementsByClassName('slides').length) - 1

window.addEventListener("scroll", function(){
    var slide2Top = Math.floor(slide1.offsetTop + slide1.offsetHeight) 
    var middleScreen = window.innerHeight/2
    
    if (slide0.offsetTop < middleScreen) {
        getTop.style.backgroundColor = "white"
        getSlide1.style.backgroundColor = "#779f2b"
        getSlide2.style.backgroundColor = "#779f2b"
        getSlide3.style.backgroundColor = "#779f2b"
        getSlide4.style.backgroundColor = "#779f2b"
        getFormEntreprise.style.backgroundColor = "#779f2b"
        niveauScroll = 0
    }
    if (slide1.offsetTop < middleScreen){
        getTop.style.backgroundColor = "#779f2b"
        getSlide1.style.backgroundColor = "white"
        getSlide2.style.backgroundColor = "#779f2b"
        getSlide3.style.backgroundColor = "#779f2b"
        getSlide4.style.backgroundColor = "#779f2b"
        getFormEntreprise.style.backgroundColor = "#779f2b"
        niveauScroll = 1
    }
    if (slide2Top < middleScreen) {
        getTop.style.backgroundColor = "#766c8e"
        getSlide1.style.backgroundColor = "#766c8e"
        getSlide2.style.backgroundColor = "white"
        getSlide3.style.backgroundColor = "#766c8e"
        getSlide4.style.backgroundColor = "#766c8e"
        getFormEntreprise.style.backgroundColor = "#766c8e"
        niveauScroll = 2
    }
    if (slide3.offsetTop < middleScreen) {
        getTop.style.backgroundColor = "#779f2b"
        getSlide1.style.backgroundColor = "#779f2b"
        getSlide2.style.backgroundColor = "#779f2b"
        getSlide3.style.backgroundColor = "white"
        getSlide4.style.backgroundColor = "#779f2b"
        getFormEntreprise.style.backgroundColor = "#779f2b"
        niveauScroll = 3
    }  
    if (slide4.offsetTop < middleScreen) {
        getTop.style.backgroundColor = "#766c8e"
        getSlide1.style.backgroundColor = "#766c8e"
        getSlide2.style.backgroundColor = "#766c8e"
        getSlide3.style.backgroundColor = "#766c8e"
        getSlide4.style.backgroundColor = "white"
        getFormEntreprise.style.backgroundColor = "#766c8e"
        niveauScroll = 4
    }
    
}, false);

window.addEventListener("load", function(){
    var slide2Top = Math.floor(slide1.offsetTop + slide1.offsetHeight) 
    var middleScreen = window.innerHeight/2
    
    if (slide0.offsetTop < middleScreen) {
        getTop.style.backgroundColor = "white"
        getSlide1.style.backgroundColor = "#779f2b"
        getSlide2.style.backgroundColor = "#779f2b"
        getSlide3.style.backgroundColor = "#779f2b"
        getSlide4.style.backgroundColor = "#779f2b"
        getFormEntreprise.style.backgroundColor = "#779f2b"
        niveauScroll = 0
    }
    if (slide1.offsetTop < middleScreen){
        getTop.style.backgroundColor = "#779f2b"
        getSlide1.style.backgroundColor = "white"
        getSlide2.style.backgroundColor = "#779f2b"
        getSlide3.style.backgroundColor = "#779f2b"
        getSlide4.style.backgroundColor = "#779f2b"
        getFormEntreprise.style.backgroundColor = "#779f2b"
        niveauScroll = 1
    }
    if (slide2Top < middleScreen) {
        getTop.style.backgroundColor = "#766c8e"
        getSlide1.style.backgroundColor = "#766c8e"
        getSlide2.style.backgroundColor = "white"
        getSlide3.style.backgroundColor = "#766c8e"
        getSlide4.style.backgroundColor = "#766c8e"
        getFormEntreprise.style.backgroundColor = "#766c8e"
        niveauScroll = 2
    }
    if (slide3.offsetTop < middleScreen) {
        getTop.style.backgroundColor = "#779f2b"
        getSlide1.style.backgroundColor = "#779f2b"
        getSlide2.style.backgroundColor = "#779f2b"
        getSlide3.style.backgroundColor = "white"
        getSlide4.style.backgroundColor = "#779f2b"
        getFormEntreprise.style.backgroundColor = "#779f2b"
        niveauScroll = 3
    }  
    if (slide4.offsetTop < middleScreen) {
        getTop.style.backgroundColor = "#766c8e"
        getSlide1.style.backgroundColor = "#766c8e"
        getSlide2.style.backgroundColor = "#766c8e"
        getSlide3.style.backgroundColor = "#766c8e"
        getSlide4.style.backgroundColor = "white"
        getFormEntreprise.style.backgroundColor = "#766c8e"
        niveauScroll = 4
    }
}, false);




//Get scroll direction 
/*
var scrollPos = 0
var goTop = 0
var goDown = 0

function throttle(fn, wait) {
      var time = Date.now()   
      return function() {
        if ((time + wait - Date.now()) < 0 & goTop == 1) {
            getTopScroll()
            time = Date.now()
        }
        if ((time + wait - Date.now()) < 0 & goDown == 1) {
            getDownScroll()
            time = Date.now()
        }
    }
}

function blankFunc(){}

window.addEventListener('wheel', throttle(blankFunc, 300))

window.addEventListener("scroll", function(){
    if ((document.body.getBoundingClientRect()).top > scrollPos){
        goTop = 1
        goDown = 0
    }
    else {
        goTop = 0
        goDown = 1
    }
    setTimeout('goDown = 0', 1)
    setTimeout('goTop = 0', 1)
    scrollPos = (document.body.getBoundingClientRect()).top;
}, false)


function getTopScroll(){
     if (niveauScroll != 0) {
        var nomFunc = "forceSlide" + (niveauScroll-1)
        window[nomFunc]()
    }
}

function getDownScroll(){
    if (niveauScroll != niveauScrollMax){
        var nomFunc = "forceSlide" + (niveauScroll+1)
        window[nomFunc]()
    }
}
*/




/* ToolTip */
var currentmX = 0
var currentmY = 0

$(document).mousemove(function(e) {
    currentmX = e.screenX
    currentmY = e.screenY
    var now = Date.now()
    var mouseSpot = Math.floor((e.screenX/WW)*100) 
    var dt = now - timestamp
    var distance = Math.abs(currentmX - mX)
    var speed = Math.round(distance / dt * 1000)
    for (var i = 0; i < tooltiptext.length; i++) {
        tooltiptext[i].style.top =  3000 +  "px"
        tooltiptext[i].style.left = 3000 + "px" 
    }
})

setInterval(onStop, 1000)

function onStop(){
    for (var i = 0; i < tooltiptext.length; i++) {
        tooltiptext[i].style.top =  currentmY -130 +  "px"
        tooltiptext[i].style.left = currentmX + 20 + "px" 
    }
}

