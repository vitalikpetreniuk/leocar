import Swiper from '../../../../../../plugins/brainwave/assembly/node_modules/swiper';
import Pagination from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/pagination.min.mjs';
import Navigation from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/navigation.min.mjs';

const ourTeamSwiper = document.querySelectorAll('.swiper');
if (ourTeamSwiper.length > 0) {

	new Swiper(document.querySelector('.leo-our-clients__slider'), {
		modules: [Pagination,Navigation],
		slidesPerView: 3,
		pagination: {
			el: '.leo-our-clients__pagination',
			type: 'bullets',
			clickable: true,
			dynamicBullets: false,
		},
		navigation: {
			nextEl: '.leo-our-clients__button_next',
			prevEl: '.leo-our-clients__button_prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 5,
			},
			1280: {
				slidesPerView: 7,
			},
		},
	});

	new Swiper(document.querySelector('.leo-reviews__slider'), {
		modules: [Pagination,Navigation],
		pagination: {
			el: '.leo-reviews__pagination',
			type: 'bullets',
			clickable: true,
			dynamicBullets: false,
		},
		navigation: {
			nextEl: '.leo-reviews__button_next',
			prevEl: '.leo-reviews__button_prev',
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			1024: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
		},
	});
}