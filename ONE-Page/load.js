$( document ).ready(function() {
    
    document.getElementById('loading').style.width = "100%"
    document.getElementById('load').style.transform = "translate(0, -180vh)"
    document.getElementById('load').style.background = "rgba(0,0,0,0)"
    document.getElementById('load').style.zIndex= "0"
    

    setTimeout("document.getElementById('loading').style.display = 'none'", 200)
    setTimeout("document.getElementById('loading').style.width = '10vw' ", 200)
    setTimeout("document.getElementById('loading').style.marginTop = '90vh' ", 200)
    setTimeout("document.getElementById('load').style.zIndex= '10' ", 200)
    setTimeout("document.getElementById('load').style.width= '100vw' ", 200)
    setTimeout("document.getElementById('load').style.height= '150vh' ", 200)
    setTimeout("document.getElementById('load').style.top= '0vh' ", 200)
    setTimeout("document.getElementById('load').style.left= '0' ", 200)
    setTimeout("document.getElementById('load').style.transition= 'all 0.5s' ", 500)
    setTimeout("document.getElementById('loading').style.display = 'inline' ", 500)
});