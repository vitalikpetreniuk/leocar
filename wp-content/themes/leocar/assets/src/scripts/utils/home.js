export default function home() {
    let $ = jQuery;

    let dateInput = document.querySelector('input#td-date');
    if(dateInput) {
        let datepicker = new Datepicker(dateInput, {
            daysOfWeekDisabled: [0,6]
        });
    }

    let chooseCarButton = document.querySelector('button.choose-car');
    let leoCatalogSection = document.querySelector('section.leo-catalog');
    if (chooseCarButton && leoCatalogSection) {
        chooseCarButton.addEventListener('click', () => {
            let offset = 120; // Adjust this value to change the top margin

            if (window.screen.width > 1099) {
                offset = 140;
            }

            let elementTop = leoCatalogSection.getBoundingClientRect().top + window.scrollY;
            let adjustedScrollPosition = elementTop - offset;

            window.scrollTo({
                top: adjustedScrollPosition,
                behavior: 'smooth',
            });
        });
    }

    let navLinks = document.querySelectorAll('.nav-link');
    let sections = document.querySelectorAll('section');
    let offset = getHeaderHeight();

    if(navLinks) {
        navLinks.forEach(link => link.addEventListener('click', scrollToSection));
    }

    if (window.screen.width > 1099) {
        let $grid = $('.reviews-list').masonry({
            gutter: 20
        });

        let borderHeight = '700px'
        let reviewsSection = document.querySelector('.leo-reviews');
        let outerDiv = reviewsSection.querySelector('.reviews-outer');
        let innerDiv = reviewsSection.querySelector('.reviews-list');
        let toggleButton = reviewsSection.querySelector('.show-reviews');

        if(reviewsSection) {
            outerDiv.style.height = borderHeight;
            toggleButton.addEventListener('click', toggleHeight);
        }

        function toggleHeight() {

            if (outerDiv.style.height === borderHeight || outerDiv.style.height === '') {
                outerDiv.style.height = innerDiv.clientHeight + 'px';
                outerDiv.classList.add('no-gradient');
                toggleButton.textContent = 'Приховати';
            } else {
                outerDiv.style.height = borderHeight;
                outerDiv.classList.remove('no-gradient');
                toggleButton.textContent = 'Показати більше';
            }
        }
    }

    function scrollToSection(event) {
        event.preventDefault();
        const targetSectionId = event.target.getAttribute('href').slice(1); // Remove the leading #
        const targetSection = document.getElementById(targetSectionId);
        const targetSectionTop = targetSection.offsetTop - offset; // Account for offset

        if (window.screen.width <= 1099) {
            document.body.classList.remove('menu-open');
            window.scrollTo({
                top: targetSectionTop
            });
        }else{
            window.scrollTo({
                top: targetSectionTop,
                behavior: 'smooth' // Smooth scrolling
            });
        }

        // Remove active class from all links on click
        navLinks.forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    }
    function getHeaderHeight() {
        const header = document.querySelector('header'); // Replace with your header element selector
        if (!header) { return 0; }
        const rect = header.getBoundingClientRect();
        return rect.height;
    }
}