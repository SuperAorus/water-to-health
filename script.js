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


window.addEventListener('scroll', function() {
    var header = document.querySelector('.header');
    if (window.pageYOffset > 0) {
        header.classList.add('oscuro');
    } else {
        header.classList.remove('oscuro');
    }
});



