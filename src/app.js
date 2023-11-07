let rating =0;
const menuresponsive = document.getElementById('menuResponsive'); 
const menuMostrar = document.getElementById('menuoculto');
const menuOcultar = document.getElementById('iconOcultar');  
const ocultarPop = document.getElementById('ocultarPopModel');
function closeMenu(){document.getElementById('menuoculto').style.left ='480px';}; 
function closeModelBox(){document.getElementById('idModalBox').style.display= 'none';}
function home(){window.location.href="/src/index.html"};

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
const redicionar = document.getElementById('redireccionar').addEventListener("click",()=>{window.location.href = "/src/tienda.html";});
const ratingAction = document.querySelectorAll('.container__resenia-calificacion span'); 

function rate(params) {
        rating= params;
        console.log(rating);
        ratingAction.forEach((element,index) => {
            if (rating>index) {
                element.classList.add('rating');   
            }
            else{
                element.classList.remove('rating');
            }
        });
}
function ratehover(params) { rating= params; console.log(rating);
    ratingAction.forEach((element,index) => {
        if (rating>index) {
            element.classList.add('rating');   
        }
        else{
            element.classList.remove('rating');
        }
    });
}



