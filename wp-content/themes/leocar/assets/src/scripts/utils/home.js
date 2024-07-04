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

	if (timeInput) {
		// Insert the select element after the input
		timeInput.parentNode.insertBefore(timeSelect, timeInput.nextSibling);
	}

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

    let personalDriver = document.getElementById('leo-personal-driver');
    if (personalDriver) {
        let pdItems = personalDriver.querySelectorAll('.pd-item');
        pdItems.forEach(item => {
            item.querySelector('span.plus').addEventListener('click', () => {
                // Close siblings with class 'open' before toggling this item
                item.parentElement.querySelectorAll('.open').forEach(openedItem => {
                    if (openedItem !== item) { // Exclude the clicked item itself
                        openedItem.classList.remove('open');
                    }
                });

                // Toggle the clicked item
                item.classList.toggle('open');
            });
        });
    }

    let rentReturn = document.getElementById('leo-rent-return');
    if (rentReturn) {
        let rrItems = rentReturn.querySelectorAll('.tabs-list > li');
        let rrTabs = rentReturn.querySelectorAll('.tabs-content > div');

        rrItems[0].classList.add('active');
        rrTabs[0].classList.add('active');

        rrItems.forEach((item, index) => {
            item.addEventListener('click', (event) => {
                rrItems.forEach(listItem => listItem.classList.remove('active'));
                rrTabs.forEach(tabItem => tabItem.classList.remove('active'));

                item.classList.add('active');
                rrTabs[index].classList.add('active');
            });
        });
    }

    let introForm = document.querySelector('.priceForm');
    if(introForm) {
        let receiveDate = document.querySelector('input#receive-date');
        let returnDate = document.querySelector('input#return-date');
        if(receiveDate) {
            let datepicker = new Datepicker(receiveDate, {
                daysOfWeekDisabled: [0,6],
                disableTouchKeyboard: true,
                format: 'dd/mm/yyyy',
                autohide: true,
            });
        }
        if(returnDate) {
            let datepicker = new Datepicker(returnDate, {
                daysOfWeekDisabled: [0,6],
                disableTouchKeyboard: true,
                format: 'dd/mm/yyyy',
                autohide: true,
            });
        }

        let returnCheckbox = document.getElementById('change-return')

        returnCheckbox.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                introForm.querySelector('.choose-return').classList.remove('hidden');
            } else {
                introForm.querySelector('.choose-return').classList.add('hidden');
            }
        })

        changeLocation(introForm.querySelector('.choose-receive'),introForm.querySelector('.choose-receive > span'),introForm.querySelector('.choose-receive > ul'), introForm.querySelector('.choose-receive > select'));
        changeLocation(introForm.querySelector('.choose-return'),introForm.querySelector('.choose-return > span'),introForm.querySelector('.choose-return > ul'), introForm.querySelector('.choose-return > select'));

        changeTime(introForm.querySelector('#receive-time + div'), introForm.querySelector('#receive-time'));
        changeTime(introForm.querySelector('#return-time + div'), introForm.querySelector('#return-time'));

        function changeLocation(block, blockSpan, blockUl, blockSelect){
            blockSpan.addEventListener('click', () => {
                block.classList.toggle('open');
            });
            let receiveOptions = blockUl.querySelectorAll('li');
            receiveOptions.forEach(option => {
                option.addEventListener('click', () => {
                    receiveOptions.forEach(item => item.classList.remove('active'));
                    option.classList.add('active');
                    block.classList.remove('empty');
                    blockSpan.innerHTML = option.innerHTML;
                    blockSelect.value = option.getAttribute('data-value');
                    block.classList.remove('open');
                });
            });
        }
        function changeTime(timeBlock, timeSelect){
            timeBlock.querySelector('span').addEventListener('click', () => {
                timeBlock.classList.toggle('open');
            });

            let timeOptions = timeBlock.querySelectorAll('ul li');
            timeOptions.forEach(option => {
                option.addEventListener('click', () => {
                    timeOptions.forEach(item => item.classList.remove('active'));
                    option.classList.add('active');

                    timeBlock.querySelector('span').innerHTML = option.innerHTML;
                    timeSelect.value = option.getAttribute('data-value');
                    timeBlock.classList.remove('open');
                });
            });
        }

        const closeDiv = document.querySelector('#receive-time + div,#return-time + div, .choose-receive, .choose-return');
        if(closeDiv){
            document.addEventListener('mouseup', function(event) {
                console.log(closeDiv)
                if (!closeDiv.contains(event.target)) {
                    closeDiv.classList.remove('open');
                }
            });
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

		window.addEventListener('scroll', function() {
			
			if (window.pageYOffset > 1 && !scrollTopBtn.classList.contains('active')) {
	
				scrollTopBtn.classList.add('active')
	
			} else if (window.pageYOffset < 1 && scrollTopBtn.classList.contains('active')) {
	
				scrollTopBtn.classList.remove('active')
			}
		});
	});
}