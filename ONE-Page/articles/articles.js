var next = document.getElementsByClassName('InfosNext')
var prev = document.getElementsByClassName('InfosPrev')
var articles = document.getElementsByClassName('article')
var nomArticle = document.getElementsByClassName('nomArticle')
var switcher = document.getElementById('load')
var getArtId = document.getElementsByClassName('getArtId')
var totalArticles = articles.length
var articleActuel = 0

var titreTaille = nomArticle[articleActuel].offsetWidth
var margin = ((window.innerWidth*9/10) - titreTaille)/2
nomArticle[articleActuel].style.marginLeft = margin


$('.InfosNext').click(function(){
    if(articleActuel < totalArticles - 1){
        
        var titreTaille = nomArticle[articleActuel+1].offsetWidth
        var margin = ((window.innerWidth*9/10) - titreTaille)/2
        nomArticle[articleActuel+1].style.marginLeft = margin
        
        switcher.style.backgroundColor = 'white' 
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
        switcher.style.backgroundColor = 'white' 
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
    switcher.style.backgroundColor = 'white' 
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