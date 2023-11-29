const redicionar = document.getElementById('redireccionar').addEventListener("click", () => { window.location.href = "/src/index.php"; });
const carrucelItems = document.querySelector('.container__servicio-main');
const arrowTop = document.querySelector('.container__servicio__main-scrolltop');
const arrowDown = document.querySelector('.container__servicio__main-scrolldown'); 
let bannerUrl = [
    "/resources/productospersonalizados.svg",
    "/resources/bannerescuela.svg",
    "/resources/bannerHalloween.png",
    "/resources/navidad.svg",
    "/resources/bannersanvalentin.svg"
];
var increments = 0;
function cambiarValores(params) {
    switch (params) {
    case 0:
        document.querySelector('.container__evenetosCarrucel__slider__componentes > h4').innerHTML =
        "Transforma tus Ideas en Realidad: Personalización a tu Medida, Imaginación sin Límites."; 

        break;
    case 1:  
        document.querySelector('.container__evenetosCarrucel__slider__componentes > h4').innerHTML =
         "Regreso a Clases sin Estrés: Encuentra Todo lo que Necesitas con Nuestros Servicios Personalizados.¡Haz del Regreso a Clases un Momento Inolvidable";
         break;
    case 2:  
    document.querySelector('.container__evenetosCarrucel__slider__componentes > h4').innerHTML =
    "Un Halloween Inolvidable: Descubre Servicios Personalizados para Crear Magia en Cada Rincón. ¡Celebra con Nosotros de Manera Única y Espeluznante";
        break;
    case 3:  
    document.querySelector('.container__evenetosCarrucel__slider__componentes > h4').innerHTML =
    "Navidad Mágica: Descubre Nuestros Servicios Personalizados para Crear un Festín de Alegría y Encanto. ¡Haz de esta Temporada un Cuadro Perfecto con Detalles Únicos!";
        break;
    case 4:     
    document.querySelector('.container__evenetosCarrucel__slider__componentes > h4').innerHTML =
    "San Valentín Inolvidable: Encuentra Servicios Personalizados para Celebar el Amor de Manera Especial. ¡Haz de Este Día un Momento Único y Romántico";
        break;
    default: 
    document.querySelector('.container__evenetosCarrucel__slider__componentes > h4').innerHTML =
    "Transforma tus Ideas en Realidad: Personalización a tu Medida, Imaginación sin Límites.";
        break;
}
}



document.querySelector('.container__eventosCarrucel').style.backgroundImage = `url(${bannerUrl[increments]})`;
document.querySelector('.container__tap_slider-right').addEventListener("click", () => {
    increments++; 
    cambiarValores(increments);

    document.querySelector('.container__eventosCarrucel').style.backgroundImage = `url(${bannerUrl[increments]})`;

    // Ajustar la opacidad después de cambiar la imagen
    if (increments > 3) {
        document.querySelector('.container__tap_slider-right').style.opacity = '0.5';
        increments = 3;
    } else {
        document.querySelector('.container__tapp_slider-left').style.opacity = '1';
    }
});

document.querySelector('.container__tap_slider-right').addEventListener("click", () => {
    increments++;

    // Verificar si alcanzamos el límite superior
    if (increments >= bannerUrl.length - 1) {
        increments = bannerUrl.length - 1;
        document.querySelector('.container__tap_slider-right').style.opacity = '0.5'; 
        
    } else {
        document.querySelector('.container__tapp_slider-left').style.opacity = '1';
    }

    document.querySelector('.container__eventosCarrucel').style.backgroundImage = `url(${bannerUrl[increments]})`;
});

document.querySelector('.container__tapp_slider-left').addEventListener("click", () => {
    increments--;
    cambiarValores(increments);
    // Verificar si alcanzamos el límite inferior
    if (increments <= 0) {
        increments = 0;
        document.querySelector('.container__tapp_slider-left').style.opacity = '0.5'; 
        
    } else {
        document.querySelector('.container__tap_slider-right').style.opacity = '1';
    }

    document.querySelector('.container__eventosCarrucel').style.backgroundImage = `url(${bannerUrl[increments]})`;
});


// Función para cambiar la imagen
function cambiarImagen() {
    increments++; 
    cambiarValores(increments);
    // Verificar si alcanzamos el límite superior
    if (increments >= bannerUrl.length) {
        increments = 0; // Reiniciar a 0 cuando llegamos al último índice
    }
    document.querySelector('.container__eventosCarrucel').style.backgroundImage = `url(${bannerUrl[increments]})`;
}
// Configurar intervalo para cambiar la imagen cada 30 segundos
const intervalo = setInterval(cambiarImagen, 20000);

function EstablecerSesion(thisObj) {
    var padre = document.getElementById('formulario'); 
    var elemento = document.createElement("input"); 
    elemento.setAttribute("type","hidden"); 
    elemento.setAttribute("name","ValorSesion");
    elemento.setAttribute("value",thisObj.innerHTML); 
    padre.appendChild(elemento); 
    padre.submit(); 

}


document.addEventListener("DOMContentLoaded", () => {
    const collectionStore = document.querySelector('.container__servicios__main-collectionCards');
    if (collectionStore) {
        const collectionCardsBox = collectionStore.querySelectorAll('.container__servicios__main__cards');
        const collectionParrafo = document.querySelectorAll('.container__servicios__main__cards > .container__servicios__main__items-info');

        collectionCardsBox.forEach((elements, index) => {
            const buttonCard = elements.querySelector('.container__servicios__main__items-descripcion button').addEventListener("click", () => {
                collectionParrafo[index].style.display = 'flex';
            });
            const buttonSpan = elements.querySelector('.container__servicios__main__items-info span').addEventListener("click", () => {
                collectionParrafo[index].style.display = 'none';
            });
        });
    }
});
const regresarInicio = document.querySelector('.container__menuresponsive__menu-mainfiltrer img')
    .addEventListener("click", () => { window.location.href = "/src/index.php"; });


const menuresponsive = document.querySelector('.container__menuresponsive')
    .addEventListener('click', () => {
        document.querySelector('.container__menuresponsive-menu').style.left = '0';
    });

const menuCLoseResponsive = document.querySelector('.container__menuresponsive__menu-icon')
    .addEventListener('click', () => {
        document.querySelector('.container__menuresponsive-menu').style.left = '1400px';
    });

/*
arrowTop.addEventListener('click',()=>{
    carrucelItems.scrollTop -=100;
});
arrowDown.addEventListener('click',()=>{
    carrucelItems.scrollTop +=100;
});
*/





