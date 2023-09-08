const d = document;

const headerhamburgerButton$ = d.querySelector('#headerhamburgerButton');
const responsiveMenu$ = d.querySelector('nav.header__nav-responsive')
const shadowResponsiveMenu$ = d.querySelector('div.header__nav-responsive-shadow')

headerhamburgerButton$.addEventListener('click', () => {
    headerhamburgerButton$.classList.toggle('is-active')
    responsiveMenu$.classList.toggle('is-active')
    shadowResponsiveMenu$.classList.toggle('is-active')
})

// let sections = d.querySelectorAll('section');
// sections = [...sections].filter(s => ["Nosotros", "Servicios", "Ubicacion", "Horarios"].includes(s.id))

// window.addEventListener('scroll', function () {
//     sections.forEach(section => {
//         const navLink = d.querySelector(`nav.header__nav-responsive a[href="#${section.id}"]`);
//         const rect = section.getBoundingClientRect();
//         const isActive = rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2;

//         (isActive) ? navLink.classList.add('active') : navLink.classList.remove('active');
//     });
// });

const links = document.querySelectorAll('nav.header__nav-responsive a');
links.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault(); // Evita el comportamiento predeterminado del enlace
        const targetSection = document.querySelector(link.getAttribute('href'));
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth' });
            links.forEach(link => link.classList.remove('active'));
            link.classList.add('active');
        }
    });
});





d.querySelector('.js_slider').lory({
    infinite: 1
});