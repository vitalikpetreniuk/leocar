export default function home() {
    let $ = jQuery;

    let dateInput = document.querySelector('input#td-date');
    if(dateInput) {
        let datepicker = new Datepicker(dateInput, {
            daysOfWeekDisabled: [0,6],
            disableTouchKeyboard: true,
            format: 'dd/mm/yyyy',
            autohide: true,
        });
    }

    /* TIME */

    const timeInput = document.getElementById("td-time");

    // Create the select element
    const timeSelect = document.createElement("ul");

    // Generate options only for hours from 9 to 19 with half-hour increments
    for (let hour = 9; hour <= 19; hour++) {
        for (let minute = 0; minute <= 30; minute += 30) {
            const formattedTime = hour.toString().padStart(2, "0") + ":" + minute.toString().padStart(2, "0");
            const option = document.createElement("li");
            option.dataset.value = formattedTime;
            option.textContent = formattedTime;
            timeSelect.appendChild(option);
        }
    }

    // Insert the select element after the input
    timeInput.parentNode.insertBefore(timeSelect, timeInput.nextSibling);

    /* TIME */

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

    let navLinks = document.querySelectorAll('header ul li, .quick-links ul li');
    let sections = document.querySelectorAll('section');
    let offset = getHeaderHeight();

    if(navLinks) {
		navLinks.forEach(link => link.addEventListener('click', scrollToSection));
    }
    if (window.screen.width >= 768) {
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
    if (window.screen.width > 1099) {
        $('.flip-card').each(function(){
            let $this = $(this);
            $this.find('.flip-card-inner').on('click', function(){
                $this.parent().siblings().find('.flip-card').removeClass('flipped');

                if(!$(this).parent().hasClass('flipped')) {
                    $(this).parent().addClass('flipped');
                }else{
                    $(this).parent().removeClass('flipped');
                }
            })
        })
        $(document).mouseup(function(e){
            let container = $('.flip-card-inner');
            if(!container.is(e.target) && container.has(e.target).length === 0) {
                $('.flip-card').removeClass('flipped');
            }
        })
    }

    function scrollToSection(event) {
        event.preventDefault();
        const targetSectionId = event.target.getAttribute('href').slice(1); // Remove the leading #
        const targetSection = document.getElementById(targetSectionId);
        const targetSectionTop = targetSection.offsetTop - offset; // Account for offset

		  document.querySelector('.leo-burger').click();

        if (window.screen.width < 1024) {
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

	document.querySelectorAll('.scroll-top').forEach(function(scrollTopBtn) {

		scrollTopBtn.addEventListener('click', function(e) {
			window.scrollTo({
				top: 0,
				behavior: 'smooth'
		  	});
		})
	});
}