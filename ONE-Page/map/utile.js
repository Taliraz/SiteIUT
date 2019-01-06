

function closeAllPopup(){
  var tabPopup=document.getElementsByClassName('popup')
  popupActive = false
  for (var i=0;i<tabPopup.length;i++){
    tabPopup[i].style.left = "-80vh"
    if (window.innerWidth > 600) {
        tabPopup[i].style.animation = "speedBack 1s ease-in"
    }
  }
}

function displayPopup(id){
    closeAllPopup()
    var popupActive = false
    document.getElementById(id).style.left = "0%"
    document.getElementById(id).style.background = "rgba(0,0,0,0)"
    if (window.innerWidth > 600) {
        document.getElementById(id).style.animation = "speed 1s ease-out"
    }  
}

function closePopup(id){
    popupActive = false
    document.getElementById(id).style.left = "-80vh"
    if (window.innerWidth > 600) {
        document.getElementById(id).style.animation = "speedBack 0.5s ease-in"
    }

}

window.addEventListener('scroll', function() {
    closeAllPopup()
    enableScroll()
}, false)


function goToVille(){
    var idPopup = document.getElementById("selectIUT").value
    displayPopup(idPopup)
}