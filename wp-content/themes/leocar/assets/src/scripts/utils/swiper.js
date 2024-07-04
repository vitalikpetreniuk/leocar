import Swiper from '../../../../../../plugins/brainwave/assembly/node_modules/swiper';
import Pagination from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/pagination.min.mjs';
import Navigation from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/navigation.min.mjs';
import Thumbs from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/thumbs.min.mjs';

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

const introSwiper = document.querySelector('.leo-intro .swiper');
if (introSwiper && window.screen.width <= 1099) {
	new Swiper(document.querySelector('.leo-intro .swiper'), {
		modules: [Pagination,Navigation],
		slidesPerView: 1,
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: false,
			dynamicBullets: false,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		}
	});
}

const productSwiper = document.querySelector('.mySwiperCarousel');
if(productSwiper) {
	let mySwiperThumbs = new Swiper('.mySwiperThumbs', {
		lazy: true,
		loop: true,
		spaceBetween: 8,
		slidesPerView: 5,
		slidesPerGroup: 1,
		freeMode: true,
		watchSlidesProgress: true,
		autoHeight: true,
		breakpoints: {
			820: {
				slidesPerView: 3,
				spaceBetween: 12,
				direction: 'vertical',
			}
		},
	});
	let mySwiperCarousel = new Swiper('.mySwiperCarousel', {
		modules: [Thumbs, Pagination, Navigation],
		lazy: true,
		loop: true,
		slidesPerView: 1,
		thumbs: {
			swiper: mySwiperThumbs,
		},
		pagination: {
			el: '.swiper-pagination',
			dynamicBullets: true,
			dynamicMainBullets: 1,
			clickable: true
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});
}