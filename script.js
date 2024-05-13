const btnMenu = document.querySelector('.navegacion__boton');
const menu = document.querySelector('.navegacion__lista');

btnMenu.addEventListener('click', () => {
    menu.classList.toggle('abierto');
});

document.addEventListener('click', (event) => {
    if (!event.target.matches('.navegacion__boton') &&!event.target.matches('.navegacion__lista') &&!event.target.matches('.navegacion__enlace')) {
        menu.classList.remove('abierto');
    }
});

const header = document.querySelector('.header');

window.addEventListener('scroll', function() {
    if (window.pageYOffset > 0) {
        header.style.opacity = '0.8';
    } else {
        header.style.opacity = '1';
    }
});