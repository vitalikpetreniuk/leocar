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

    let menuItemsSub = document.querySelectorAll('.mobile-main li.menu-item-has-children');
    if (menuItemsSub.length) {
        menuItemsSub.forEach((menuItem, index) => {
            menuItem.addEventListener('click', (e) => {
                menuItem.classList.toggle('open');
            });
        });
    }

    let menuBarList = document.querySelectorAll('.menu-bar-footer div');
    if (menuBarList.length) {
        menuBarList.forEach((menuBl) => {
            menuBl.querySelector('span').addEventListener('click', (e) => {
                menuBl.classList.toggle('open');
            });

            let menuBlItems = menuBl.querySelectorAll('li');
            menuBlItems.forEach((menuBlItem) => {
                menuBlItem.addEventListener('click', (e) => {
                    menuBlItems.forEach(allItems => allItems.classList.remove('active'));
                    menuBlItem.classList.add('active');
                    menuBl.querySelector('span').innerHTML = menuBlItem.innerHTML;

                    menuBl.classList.remove('open');
                });
            });
        });
    }

    let currencyDesktop = document.querySelector('header .currency');
    let languageDesktop = document.querySelector('header .language');

    if(currencyDesktop) {
        currencyDesktop.querySelector('span').addEventListener('click', (e) => {
            currencyDesktop.classList.toggle('open');
        });

        let currencyItems = currencyDesktop.querySelectorAll('li');
        currencyItems.forEach((currencyItem) => {
            currencyItem.addEventListener('click', (e) => {
                currencyItems.forEach(allItems => allItems.classList.remove('active'));
                currencyItem.classList.add('active');
                currencyDesktop.querySelector('span').innerHTML = currencyItem.innerHTML;
                currencyDesktop.classList.remove('open');
            });
        });
    }
    if(languageDesktop) {
        languageDesktop.querySelector('span').addEventListener('click', (e) => {
            languageDesktop.classList.toggle('open');
        });

        let languageItems = languageDesktop.querySelectorAll('li');
        languageItems.forEach((languageItem) => {
            languageItem.addEventListener('click', (e) => {
                languageItems.forEach(allItems => allItems.classList.remove('active'));
                languageItem.classList.add('active');
                languageDesktop.querySelector('span').innerHTML = languageItem.innerHTML;
                languageDesktop.classList.remove('open');
            });
        });
    }


    document.addEventListener('mouseup', function(e) {
        // Назва контейнеру
        let container = document.querySelector('.mobile-menu');
        // Умова, щоб працювало тільки коли попап відкритий
        if (document.querySelector('body').classList.contains('menu-open')) {

            if (!e.target.closest('a') && !container.contains(e.target) && !e.target.closest('.leo-burger')) {
                document.querySelector('.leo-burger').click();
            }
        }
    });
}