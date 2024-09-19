export const initSlider = () => {
    const item = document.querySelector('.main-item');
    console.log('main-item');

    let swiper;
    if (item) {
        swiper = new Swiper(item, {
            autoplay: {
                delay: 3000
            },
            speed: 3000,
            loop: true,
            // effect: "fade",
            // direction: 'horizontal',
            spaceBetween: 30,
            slidesPerView: 1,
            // equalHeight: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
        });
    }
}