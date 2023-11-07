const redicionar = document.getElementById('redireccionar')
.addEventListener("click",()=>{window.location.href = "/src/index.html";});
const carrucelItems = document.querySelector('.container__servicio-main');
const arrowTop = document.querySelector('.container__servicio__main-scrolltop');
const arrowDown = document.querySelector('.container__servicio__main-scrolldown');

document.addEventListener("DOMContentLoaded" ,()=>{
    const collectionStore = document.querySelector('.container__servicio-main');  
    if (collectionStore) {
        const collectionCardsBox = collectionStore.querySelectorAll('.container__servicios__main-items');   
        const collectionParrafo = document.querySelectorAll('.container__servicios__main-items > .container__servicios__mainitem-info');
        collectionCardsBox.forEach((elements,index) => {
            const buttonCard = elements.querySelector('button').addEventListener("click",()=>{
                collectionParrafo[index].classList.add('hoverInfo'); 
            }); 
            const buttonSpan = elements.querySelector('span').addEventListener("click",()=>{
                collectionParrafo[index].classList.remove('hoverInfo');  
            });            
        });

    }
}); 
arrowTop.addEventListener('click',()=>{
    carrucelItems.scrollTop -=100;
});
arrowDown.addEventListener('click',()=>{
    carrucelItems.scrollTop +=100;
});






