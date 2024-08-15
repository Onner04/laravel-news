const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const menus = $$('.nav-bar-list-child.nav-list-child-menu .nav-bar-list-child__content');
const items = $$(' .nav-bar-list-child__content-box');

menus.forEach((menu, index) => {
    menu.addEventListener('click', () => {
        items.forEach((item, i) => {
            if (i === index) {
                item.classList.toggle('active');
            } else {
                item.classList.remove('active');
            }
        });
    });
});