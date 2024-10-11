 // Filtrage des catégories
 function filterCategory(category) {
    let products = document.querySelectorAll('.product-item');
    products.forEach(product => {
        product.style.display = 'block';
        if (category !== 'all' && product.getAttribute('data-category') !== category) {
            product.style.display = 'none';
        }
    });
}

let currentIndex = 0;
const carouselItems = document.querySelectorAll('.carousel-item');
const totalItems = carouselItems.length;

function showCarouselItem(index) {
    carouselItems.forEach((item, i) => {
        item.style.display = (i === index) ? 'block' : 'none';
        item.setAttribute('aria-hidden', i !== index);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalItems;
    showCarouselItem(currentIndex);
}

function previousSlide() {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    showCarouselItem(currentIndex);
}

showCarouselItem(currentIndex);
setInterval(nextSlide, 5000);


