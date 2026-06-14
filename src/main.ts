import './style.css'


const menuToggle = document.getElementById('menu-toggle');

const body = document.body;

menuToggle?.addEventListener('click', () => {
    const isOpen = body?.classList.contains('main-menu-open');
    menuToggle.setAttribute('aria-expanded', String(!isOpen));
    body?.classList.toggle('main-menu-open');
});

const languageToggle = document.getElementById('language-toggle');

languageToggle?.addEventListener('click', () => {
    const isOpen = body?.classList.contains('language-menu-open');
    languageToggle.setAttribute('aria-expanded', String(!isOpen));
    body?.classList.toggle('language-menu-open');
});


const pageMenuToggle = document.getElementById('page-menu-toggle');

pageMenuToggle?.addEventListener('click', () => {
    const isOpen = body?.classList.contains('page-menu-open');
    pageMenuToggle.setAttribute('aria-expanded', String(!isOpen));
    body?.classList.toggle('page-menu-open');
});

const pageMenu = document.getElementById('page-menu');

const pageMenuItems = pageMenu?.querySelectorAll('a');

pageMenuItems?.forEach((item) => {
    item.addEventListener('click', () => {
        body?.classList.remove('page-menu-open');
        pageMenuToggle?.setAttribute('aria-expanded', 'false');
    });
});