
// para el boton del modo resposive del nav

const boton = document.querySelector('#boton');
const menu = document.querySelector('#menu');

boton.addEventListener('click', () => {
    console.log('click')
    menu.classList.toggle('hidden')
})





