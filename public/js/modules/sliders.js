//BildSlider
let sliders = document.querySelectorAll('._swiper');
if (sliders) {
	for (let index = 0; index < sliders.length; index++) {
		let slider = sliders[index];
		if (!slider.classList.contains('swiper-bild')) {
			let slider_items = slider.children;
			if (slider_items) {
				for (let index = 0; index < slider_items.length; index++) {
					let el = slider_items[index];
					el.classList.add('swiper-slide');
				}
			}
			let slider_content = slider.innerHTML;
			let slider_wrapper = document.createElement('div');
			slider_wrapper.classList.add('swiper-wrapper');
			slider_wrapper.innerHTML = slider_content;
			slider.innerHTML = '';
			slider.appendChild(slider_wrapper);
			slider.classList.add('swiper-bild');

			if (slider.classList.contains('_swiper_scroll')) {
				let sliderScroll = document.createElement('div');
				sliderScroll.classList.add('swiper-scrollbar');
				slider.appendChild(sliderScroll);
			}
		}
		if (slider.classList.contains('_gallery')) {
			//slider.data('lightGallery').destroy(true);
		}
	}
	sliders_bild_callback();
}

function sliders_bild_callback(params) { }

let sliderScrollItems = document.querySelectorAll('._swiper_scroll');
if (sliderScrollItems.length > 0) {
	for (let index = 0; index < sliderScrollItems.length; index++) {
		const sliderScrollItem = sliderScrollItems[index];
		const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
		const sliderScroll = new Swiper(sliderScrollItem, {
			observer: true,
			observeParents: true,
			direction: 'vertical',
			slidesPerView: 'auto',
			freeMode: true,
			scrollbar: {
				el: sliderScrollBar,
				draggable: true,
				snapOnRelease: false
			},
			mousewheel: {
				releaseOnEdges: true,
			},
		});
		sliderScroll.scrollbar.updateSize();
	}
}

// function sliders_bild_callback(params) { }



// Сюда пишем класс нашего слайдера и меняем переменную
let prodSlSmall = new Swiper('.prodSlSmall', {
	slidesPerView: 1,
	spaceBetween: 0,
	speed: 1500,
	direction: "vertical",
	spaceBetween: 10,
	slidesPerView: 3,
	freeMode: true,
	// grabCursor: true, // менять иконку курсора
	// mousewheel: true, // можно прокручивать изображения колёсиком мыши
	// loopedSlides: 5,
	// grabCursor: true,
	// controller: {
	// 	control: prodSlBig
	// },
	// watchSlidesProgress: true,
	// watchOverflow: true,
	slideToClickedSlide: true,
	// centerInsufficientSlides: true,
	// simulateTouch: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	breakpoints: {
		361: {
			slidesPerView: 4,
		},
		461: {
			slidesPerView: 5,
		},
		900: {
			spaceBetween: 13.5,
			slidesPerView: 4,
		},
		1160: {
			spaceBetween: 13.5,
			slidesPerView: 5,
		},
	},
	on: {
		lazyImageReady: function () {
			ibg();
		},
	}
	// And if we need scrollbar
	//scrollbar: {
	//	el: '.swiper-scrollbar',
	//},
});


// Сюда пишем класс нашего слайдера и меняем переменную
let prodSlBig = new Swiper('.prodSlBig', {
	slidesPerView: 1,
	spaceBetween: 0,
	speed: 1500,
	effect: 'fade',
	fadeEffect: {
		crossFade: true
	},
	thumbs: {
		swiper: prodSlSmall
	}
	/*
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 0,
			autoHeight: true,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		992: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
		1268: {
			slidesPerView: 4,
			spaceBetween: 30,
		},
	},
	*/
	// on: {
	// 	lazyImageReady: function () {
	// 		ibg();
	// 	},
	// }
	// And if we need scrollbar
	//scrollbar: {
	//	el: '.swiper-scrollbar',
	//},
});


// Сюда пишем класс нашего слайдера и меняем переменную
let subCatInCat = new Swiper('.subCatInCat', {

	slidesPerView: 1,
	spaceBetween: 10, //отступ в пикселях

	speed: 2000,
	loop: true, //циклично

	breakpoints: {
		640: {
			slidesPerView: 2,
		},
		768: {
			slidesPerView: 6,
		},
		1024: {
			slidesPerView: 5,
		},
	},
	on: {
		lazyImageReady: function () {
			ibg();
		},
	}

});

let main_banner = new Swiper('.main_banner', {
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},

    navigation: {
        nextEl: ".main_banner .slider_nav_btn_next",
        prevEl: ".main_banner .slider_nav_btn_prev",
    },

});

let popular__baner = new Swiper('.popular__baner', {
	autoplay: {
		delay: 8000,
		disableOnInteraction: false,
	},
    loop: true,


    navigation: {
        nextEl: ".popular__baner .slider_nav_btn_next",
        prevEl: ".popular__baner .slider_nav_btn_prev",
    },

});


let popular_in_main_slider = new Swiper('.popular_in_main_slider', {

    slidesPerView: 2,
    spaceBetween: 30,
    autoHeight:true,

    navigation: {
        nextEl: ".popular_in_main_slider .slider_nav_btn_next",
        prevEl: ".popular_in_main_slider .slider_nav_btn_prev",
    },

    breakpoints: {

		768: {
			slidesPerView: 4,
		},


		1024: {
			slidesPerView: 5,
		},
	},
});
