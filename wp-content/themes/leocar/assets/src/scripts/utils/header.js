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

	 document.addEventListener('mouseup', function(e) {
		// Назва контейнеру
		let container = document.querySelector('.mobile-menu');
		// Умова, щоб працювало тільки коли попап відкритий
		if (document.querySelector('body').classList.contains('menu-open')) {
			 
			 if (!e.target.closest('a') && !container.contains(e.target)) {
				document.querySelector('.leo-burger').click();
			 }
		}
  });
}