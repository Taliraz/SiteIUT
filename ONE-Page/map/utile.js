

function closeAllPopup(){
  var tabPopup=document.getElementsByClassName('popup')
  popupActive = false
  for (var i=0;i<tabPopup.length;i++){
    tabPopup[i].style.left = "-80vh"
  }
}

function displayPopup(id){
    closeAllPopup()
    var popupActive = false
    document.getElementById(id).style.left = "0%"
    document.getElementById(id).style.background = "rgba(0,0,0,0)"
    
}

function closePopup(id){
    popupActive = false
    document.getElementById(id).style.left = "-80vh"
}

window.addEventListener('scroll', function() {
    closeAllPopup()
    enableScroll()
}, false)





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