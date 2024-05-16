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

const enlaces = document.querySelectorAll('.navegacion__enlace a');

window.addEventListener('scroll', () => {
  if (window.pageYOffset > 0) {
    if (window.matchMedia('(min-width: 768px)').matches) {
      enlaces.forEach((enlace) => {
        enlace.style.color = '#000';
      });
    }
  } else {
    enlaces.forEach((enlace) => {
      enlace.style.color = '#fff';
    });
  }
});

const logo = document.querySelector('.logo__img');
const title = document.querySelector('.logo__nombre');

window.addEventListener('scroll', () => {
  if (window.pageYOffset > 0) {
    logo.style.display = 'block';
    title.style.display = 'none';
    logo.style.transition = 'all 0.5s ease'; // Agrega una transición suave al mostrar el logotipo
    title.style.transition = 'all 0.5s ease'; // Agrega una transición suave al ocultar el h1
  } else {
    logo.style.display = 'none';
    title.style.display = 'inline-block';
  }
});



window.addEventListener('scroll', () => {
  if (window.pageYOffset > 0) {
    if (window.matchMedia('(min-width: 768px)').matches) {
      document.body.style.backgroundColor = '#333';
    }
  } else {
    document.body.style.backgroundColor = '#fff';
  }
});


const enlacesActivo = document.querySelectorAll('.navegacion__enlace a');

window.addEventListener('scroll', () => {
  enlacesActivo.forEach((enlace) => {
    const seccion = document.querySelector(enlace.getAttribute('href'));
    if (isElementInViewport(seccion)) {
      enlace.classList.add('activo');
    } else {
      enlace.classList.remove('activo');
    }
  });
});

function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );

    const logo = document.querySelector('.logo__img');

logo.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
}

window.addEventListener('scroll', () => {
  if (window.pageYOffset > 0) {
      document.querySelector('.header').style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
  } else {
      document.querySelector('.header').style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
  }
});

const float = document.querySelector('.float');
const mensaje = document.createElement('div');
mensaje.textContent = ' Presiona Si Necesitas Ayuda!';
mensaje.style.position = 'absolute';
mensaje.style.left = '-150%';
mensaje.style.top = '0%';
mensaje.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';
mensaje.style.padding = '10px';
mensaje.style.borderRadius = '5px';
mensaje.style.color = 'black ';
mensaje.style.transition = 'all 1s ease';



setTimeout(() => {
  float.appendChild(mensaje);
    mensaje.style.left = '-230%';
}, 500);

setTimeout(() => {
  mensaje.style.left = '300%';
}, 4000);

float.addEventListener('mouseover', () => {
  mensaje.style.left = '-230%';
});

float.addEventListener('mouseout', () => {
  mensaje.style.left = '300%';
});

const whatsappButton = document.querySelector('.float');

let isScrolling = false;

window.addEventListener('scroll', () => {
  isScrolling = true;
  whatsappButton.classList.add('scrolling');
});

window.addEventListener('scrollend', () => {
  isScrolling = false;
  whatsappButton.classList.remove('scrolling');
});

setInterval(() => {
  if (!isScrolling) {
    whatsappButton.classList.remove('scrolling');
  }
}, 100);


let scrollTimeout;

window.addEventListener('scroll', () => {
  isScrolling = true;
  whatsappButton.classList.add('scrolling');
  clearTimeout(scrollTimeout);
  scrollTimeout = setTimeout(() => {
    isScrolling = false;
    whatsappButton.classList.remove('scrolling');
  }, 200);
});
