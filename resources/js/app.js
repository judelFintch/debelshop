import Splide from '@splidejs/splide';

new Splide('.splide', {
    type: 'loop',
    perPage: 3,
    autoplay: true,
    interval: 5000,
    pauseOnHover: false,
    pagination: false
}).mount();
