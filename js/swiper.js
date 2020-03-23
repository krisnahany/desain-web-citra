var swiper = new Swiper('.swiper-container.banner', {
	slidesPerView: 1,
	spaceBetween: 0,
	loop: true,
	pagination: {
		el: '.banner .swiper-pagination',
		clickable: true,
	},
});

var swiper = new Swiper('.intro-mobile', {
	slidesPerView: 1,
	spaceBetween: 0,
	loop: true,
	pagination: {
		el: '.intro-mobile .swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.intro-mobile .swiper-button-next',
		prevEl: '.intro-mobile .swiper-button-prev',
	},
});

var swiper = new Swiper('.product-swiper', {
	slidesPerView: 3,
	spaceBetween: 0,
	// loop: true,
	navigation: {
		nextEl: '.product-swiper .swiper-button-next',
		prevEl: '.product-swiper .swiper-button-prev',
	},
	breakpoints: {
		768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        480: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        // 320: {
        //   slidesPerView: 1,
        //   spaceBetween: 10,
        // }
      }
});