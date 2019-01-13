var next = document.getElementsByClassName('InfosNext')
var prev = document.getElementsByClassName('InfosPrev')
var articles = document.getElementsByClassName('article')
var nomArticle = document.getElementsByClassName('nomArticle')
var contenu = document.getElementsByClassName('contenu_article')
var switcher = document.getElementById('load')
var getArtId = document.getElementsByClassName('getArtId')
var totalArticles = articles.length
var articleActuel = 0
var open = false

var titreTaille = nomArticle[articleActuel].offsetWidth
var margin = ((window.innerWidth*9/10) - titreTaille)/2
nomArticle[articleActuel].style.marginLeft = margin



$('.InfosNext').click(function(){
    if(articleActuel < totalArticles - 1){
        
        var titreTaille = nomArticle[articleActuel+1].offsetWidth
        var margin = ((window.innerWidth*9/10) - titreTaille)/2
        nomArticle[articleActuel+1].style.marginLeft = margin
        
        switcher.style.backgroundColor = '#e4e2ea' 
        switcher.style.top = "150vh"
        setTimeout("articles[articleActuel].style.display = 'none' ", 450)
        setTimeout("articleActuel = articleActuel + 1", 460)
        setTimeout("switcher.style.top = '0vh' ", 500)
        setTimeout("switcher.style.background = 'none' ", 500)
        setTimeout("document.getElementById('selectArt').value = getArtId[articleActuel].id", 460)
    }
})

$('.InfosPrev').click(function(){
    if(articleActuel > 0){
        switcher.style.backgroundColor = '#e4e2ea' 
        switcher.style.top = "150vh"

        setTimeout("articles[articleActuel-1].style.display = 'block'", 450);
        setTimeout("articleActuel = articleActuel - 1", 460);
        setTimeout("switcher.style.top = '0vh' ", 500)
        setTimeout("switcher.style.background = 'none' ", 500)
        setTimeout("document.getElementById('selectArt').value = getArtId[articleActuel].id", 460)
    }
})

function artGoToNext(){
    if(articleActuel < totalArticles - 1){
        
        var titreTaille = nomArticle[articleActuel+1].offsetWidth
        var margin = ((window.innerWidth*9/10) - titreTaille)/2
        nomArticle[articleActuel+1].style.marginLeft = margin
        
        articles[articleActuel].style.display = 'none'
        articleActuel = articleActuel + 1
    }
}

function artGoToPrev(){
    if(articleActuel > 0){
        articles[articleActuel-1].style.display = 'block'
        articleActuel = articleActuel - 1
    }
}

function artGoTo(){
    var val = document.getElementById("selectArt").value
    switcher.style.backgroundColor = '#e4e2ea' 
    switcher.style.top = "150vh"
    setTimeout("switcher.style.background = 'none' ", 500)
    setTimeout("switcher.style.top = '0vh' ", 500)
    setTimeout('selectDir('+val+')', 450)
    setTimeout("document.getElementById('selectArt').value = getArtId[articleActuel].id", 460)
}

function selectDir(val){
    if (getArtId[articleActuel].id > val){
        while (getArtId[articleActuel].id != val){
            artGoToPrev()
        }
    }
    else {
        while (getArtId[articleActuel].id != val){
            artGoToNext()
        }
    }
}
$(document).ready(function() {
    document.getElementById('selectArt').value = getArtId[articleActuel].id
})


for(var i = 0; i <= contenu.length; i++){
    contenu[i].addEventListener("click", function(){
        var menu = document.getElementById('menu')
        if (open == false){
            contenu[articleActuel-1].style.position = "fixed"
            contenu[articleActuel-1].style.width = "100vw"
            contenu[articleActuel-1].style.height = "94vh"
            contenu[articleActuel-1].style.top = "0"
            contenu[articleActuel-1].style.left = "0"
            contenu[articleActuel-1].style.zIndex = "100"
            contenu[articleActuel-1].style.margin = "0"
            contenu[articleActuel-1].style.paddingTop = "2vh"
            contenu[articleActuel-1].style.textAlign = "center"
            contenu[articleActuel-1].style.borderStyle = "outset"
            contenu[articleActuel-1].style.borderColor = "#3C2D5E"
            contenu[articleActuel-1].style.borderWidth = "2vh 0vw 2vh 0vw"
            menu.style.left = "100vw"
            open = true
        }
        else {
            contenu[articleActuel-1].style.position = "inherit"
            contenu[articleActuel-1].style.height = "auto"
            contenu[articleActuel-1].style.top = "auto"
            contenu[articleActuel-1].style.left = "auto"
            contenu[articleActuel-1].style.zIndex = "1"
            contenu[articleActuel-1].style.height = "75%"
            contenu[articleActuel-1].style.textAlign = "left"
            contenu[articleActuel-1].style.border = "none"
            if (window.innerWidth >= 600) {
                menu.style.left = "95vw"
                contenu[articleActuel-1].style.margin = "2vh"
                contenu[articleActuel-1].style.padding = "20px"
                contenu[articleActuel-1].style.width = "90%"
            }
            else {
                menu.style.left = "0"
                contenu[articleActuel-1].style.padding = "0"
                contenu[articleActuel-1].style.margin = "0"
            }
            open = false
            forceSlide3()
        }
    })
}
