var body = document.querySelector('body')
var bub1 = document.getElementById('bub1')
var display = document.getElementById("slide1Intro")
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
        
        if (totalBubble > 100) {
            display.style.backgroundColor = "white"
            
            display.style.backgroundImage = "url(https://i.imgflip.com/1gm4tn.jpg)"
        
            display.style.backgroundSize = "auto 100%"
            display.style.backgroundPosition = "center"
            display.style.backgroundRepeat = "no-repeat"
            var fleche = document.getElementById("fleche")
            fleche.style.filter = "invert(0.5)"
        }
    }     

    mX = currentmX;
    timestamp = now;
    
});


window.addEventListener("scroll", function(){
    if (window.scrollY > screenHeight) {
        display.style.backgroundColor = "transparent"
        display.style.backgroundImage = "none"
        for (var i=2;i<=totalBubble+1;i++){
            var nom = "bub"+i
            var deadBubble = document.getElementById(nom)
            body.removeChild(deadBubble)
        }
    }
}, false);







