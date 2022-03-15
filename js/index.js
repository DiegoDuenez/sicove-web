$(document).ready(function(){
    //cambiarBG()
})

function cambiarBG() {
    var i =0; 
    const imagenes = [
        "url(img/carrusel/Estacion.jpg)",
        "url(img/carrusel/Taller.png)",
        "url(img/carrusel/Taller2.png)",
        "url(img/carrusel/taller3.png)",
        "url(img/carrusel/TallerSicove.jpg)"
    ]

    var bg = imagenes[Math.floor(Math.random() * imagenes.length)]
    var imagen =  $(".banner")
    setInterval(function () {
       
        imagen.fadeOut(1000, function () {
        //imagen.css('background-image', 'linear-gradient(to left, rgba(245, 246, 252, 0),rgba(30, 61, 9, 0.699)), '  + imagenes[i++]);
        imagen.css('background-image', ''  + imagenes[i++]);
        imagen.fadeIn(1000);
          
        });
       
    if(i == imagenes.length)
        i = 0;
    }, 3000);            

}

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 ) {
        $("#navMovil").css("padding", "1rem")
    } else {
        $("#navMovil").css("padding", "1rem")
    }
} 
var lastScrollTop = 0
navbar = $("#navMovil")
navbarMini = $("#navMini")
window.addEventListener("scroll", function () {
    var scrollTop = window.pageYOffset || this.document.documentElement.scrollTop
    if (scrollTop > "500") {
        navbar.css("top", "-10em");
        navbarMini.css("display","flex");
        navbarMini.css("top","0");
    }
    else {
        navbar.css("top", "0");
        navbarMini.css("top","-10em");
    }
    lastScrollTop = scrollTop
})

/*
if (screen.width >= 965) {
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 ) {
        $("#navMovil").css("padding", "1rem")
    } else {
        $("#navMovil").css("padding", "1rem")
        $("#logoSicove a img").css("width", "8.5rem")
    }
    } 
    var lastScrollTop = 0
    navbar = $("#navMovil")
    navbarMini = $("#navMini")
    window.addEventListener("scroll", function () {
        var scrollTop = window.pageYOffset || this.document.documentElement.scrollTop
        
        if (scrollTop > "500") {
            navbar.css("top", "-10em");
           navbarMini.css("display","flex");
            navbarMini.css("top","0");
        }
        else {
            navbar.css("top", "0");
            navbarMini.css("top","-10em");
        }
        lastScrollTop = scrollTop
    })
}
else if (screen.width < 965) {
    
}*/
