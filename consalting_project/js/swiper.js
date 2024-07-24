
new Swiper('.our_services_slider',{
    pagination: {
        el: '.our_services_pagination',
        type: 'bullets',
        clickable: true,
    },

    slidesPerView: 3,
    breakpoints: {
        1200: {
            slidesPerView: 3,
            spaceBetween: 1,
            slideToClickedSlide: true,
        },
        690: {
            slidesPerView: 2,
            spaceBetween: 1,
            slideToClickedSlide: true,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 1,
            slideToClickedSlide: true,
        },

    }
});

new Swiper('.our_testimonials_slider',{
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },

    slidesPerView: 1,

});

new Swiper('.latest_project_slider',{
    spaceBetween: 3,
    slidesPerView: 1,
    pagination: {
        el: '.latest_project_pagination',
        type: 'bullets',
        clickable: true,
    },

    breakpoints: {
        996: {
            slidesPerView: 3,
            spaceBetween: 30,
            slideToClickedSlide: true,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 90,
            slideToClickedSlide: true,
        },
        672: {
            slidesPerView: 2,
            spaceBetween: 30,
            slideToClickedSlide: true,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 30,
            slideToClickedSlide: true,
        },

    },

});


