const redicionar = document.getElementById('redireccionar')
.addEventListener("click",()=>{window.location.href = "/src/index.html";});
const carrucelItems = document.querySelector('.container__servicio-main');

const arrowTop = document.querySelector('.container__servicio__main-scrolltop');
const arrowDown = document.querySelector('.container__servicio__main-scrolldown');

document.addEventListener("DOMContentLoaded" ,()=>{
    const collectionStore = document.querySelector('.container__servicios__main-collectionCards');  
    if (collectionStore) {
        const collectionCardsBox = collectionStore.querySelectorAll('.container__servicios__main__cards');   
        const collectionParrafo =   document.querySelectorAll('.container__servicios__main__cards > .container__servicios__main__items-info');

        collectionCardsBox.forEach((elements,index) => {
            const buttonCard = elements.querySelector('.container__servicios__main__items-descripcion button').addEventListener("click",()=>{
                collectionParrafo[index].style.display = 'flex'; 
            }); 
            const buttonSpan = elements.querySelector('.container__servicios__main__items-info span').addEventListener("click",()=>{
                collectionParrafo[index].style.display= 'none';  
            });            
        });
    }
});   
const regresarInicio = document.querySelector('.container__menuresponsive__menu-mainfiltrer img')
.addEventListener("click",()=>{window.location.href ="/src/index.html";} ); 


const menuresponsive = document.querySelector('.container__menuresponsive')
.addEventListener('click',()=>{
    document.querySelector('.container__menuresponsive-menu').style.left = '0';
}); 

const menuCLoseResponsive = document.querySelector('.container__menuresponsive__menu-icon')
.addEventListener('click',()=>{
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





