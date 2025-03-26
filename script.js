let index = 0;
const slides = document.querySelectorAll('.img-slider');
const totalSlides = slides.length;
const carousel = document.querySelector('.carousel');
const slideWidth = slides[0].offsetWidth;

function moveSlide(step) {
    index += step;

    // If it's the last slide, go back to the first one.
    if (index === totalSlides) {
        index = 0;
    }
    // If it's the first slide, go to the last one.
    if (index < 0) {
        index = totalSlides - 1;
    }

    // Set the transition for smooth sliding
    carousel.style.transition = 'transform 0.3s linear';

    // Move the carousel by the correct offset
    carousel.style.transform = `translateX(-${index * slideWidth}px)`;
}

// Auto move the slides every 3 seconds
function autoMove() {
    moveSlide(1);
}

// Start the interval for automatic slide transition
setInterval(autoMove, 3000);