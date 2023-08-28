const d = document;

const headerhamburgerButton$ = d.querySelector('#headerhamburgerButton');

headerhamburgerButton$.addEventListener('click', (event) => {
    headerhamburgerButton$.classList.toggle('is-active')

})