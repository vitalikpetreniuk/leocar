export default function header() {
    let body = document.body;
    let header = document.querySelector('header');

    let announcementBlock = document.querySelector('.leo-announcement');
    if (announcementBlock) {
        announcementBlock.querySelector('.close').addEventListener('click', () => {
            announcementBlock.classList.add('hidden');
        });
    }

    let burgerElement = document.querySelector('.leo-burger');
    if (burgerElement) {
        let toggleMobileOpen = () => {
            document.querySelector('header .mobile-menu').style.height = window.innerHeight+ 'px';
            body.classList.toggle('menu-open');
        };

        burgerElement.addEventListener('click', toggleMobileOpen);
    }
}