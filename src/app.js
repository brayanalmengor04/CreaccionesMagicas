let rating =0;
const menuresponsive = document.getElementById('menuResponsive'); 
const menuMostrar = document.getElementById('menuoculto');
const menuOcultar = document.getElementById('iconOcultar');  
const ocultarPop = document.getElementById('ocultarPopModel');
function closeMenu(){document.getElementById('menuoculto').style.left ='480px';}; 
function closeModelBox(){document.getElementById('idModalBox').style.display= 'none';}
function home(){window.location.href="/src/index.php"};
 

const contactos = document.getElementById('linktab').addEventListener('click',()=>{
    window.open("https://linktab.co/creaccionesmagicasbylily", '_blank');});

const botonPopUp = document.getElementById('btnBoxModel'); 
botonPopUp.addEventListener("click",()=>{
    document.getElementById('idModalBox').style.display= 'flex'; 
});

function mostrarInfo(){document.querySelector('.container__servicios__mainitem-info').style.visibility = 'visible'}; 
function cerrarInfo() {
    document.querySelector('.container__servicios__mainitem-info').style.visibility ='hidden';
};
menuresponsive.addEventListener("click",()=>{ menuMostrar.style.left = '0px';   });
menuOcultar.addEventListener("click",()=>{menuMostrar.style.left ='480px';});
const redicionar = document.getElementById('redireccionar').addEventListener("click",()=>{window.location.href = "/src/tiendaonly.php";});
const ratingAction = document.querySelectorAll('.container__resenia-calificacion span'); 
/*
document.addEventListener('DOMContentLoaded', function () {
    
    var carruselContainer = document.querySelector('.container__testimonios__carrucel');
    var carruselContent = document.querySelector('.container__testimonios__main-textrenia');
    
   
  
  
    
    document.getElementById('btn-izquierda').addEventListener('click', function () {
        //carruselContainer.scrollLeft -= 670; // Puedes ajustar la cantidad según tu diseño 
        carruselContainer.scrollBy({
            left: -670,
            behavior: 'smooth' // Aplica un desplazamiento suave vertical
        });
    });

    document.getElementById('btn-derecha').addEventListener('click', function () {
        // Mueve el scroll a la derecha
        //carruselContainer.scrollLeft += 670; // Puedes ajustar la cantidad según tu diseño 
        carruselContainer.scrollBy({
            left: 670,
            behavior: 'smooth' // Aplica un desplazamiento suave vertical
        });
    });
     

});

*/

document.addEventListener('DOMContentLoaded', function () {
        
    var carruselContainer = document.querySelector('.container__testimonios__carrucel');
    var carruselContent = document.querySelector('.container__testimonios__main-textrenia');

    document.getElementById('btn-izquierda').addEventListener('click', function () {
        // Mueve el scroll a la izquierda con animación suave
        smoothScroll(carruselContainer, -670, 500); // -100 es la cantidad a desplazar, 500 es la duración en milisegundos
    });

    document.getElementById('btn-derecha').addEventListener('click', function () {
        // Mueve el scroll a la derecha con animación suave
        smoothScroll(carruselContainer, 670, 500); // 100 es la cantidad a desplazar, 500 es la duración en milisegundos
    });

    function smoothScroll(element, amount, duration) {
        var start = element.scrollLeft;
        var startTime = performance.now();

        function step(time) {
            var currentTime = time - startTime;

            element.scrollLeft = Math.easeInOutQuad(currentTime, start, amount, duration);

            if (currentTime < duration) {
                requestAnimationFrame(step);
            }
        }

        requestAnimationFrame(step);
    }

    // Función de aceleración/desaceleración cuadrática
    Math.easeInOutQuad = function (t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    };
});

