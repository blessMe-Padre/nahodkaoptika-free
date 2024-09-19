export const initNav = () => {
    const body = document.querySelector('body');
    // Меню
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuButtons = document.querySelector('.btn-close-menu');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');


    menuButtons.addEventListener('click', e => {
        menuButtons.classList.toggle('active');
        mobileMenu.classList.toggle('is-active');
        body.classList.toggle('lock');
    });


    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', (evt) => {
            menuButtons.classList.remove('active');
            mobileMenu.classList.remove('is-active');
            body.classList.remove('lock');
        });
    });

    // КАТАЛОГ
    const catalogBtn = document.querySelector('.category__filter-button');
    const catalogBlock = document.querySelector('.category__filter-block');

    if (catalogBtn && catalogBlock) {
        catalogBtn.addEventListener('click', () => {
            catalogBlock.classList.toggle('is-active');
        });
    }
}