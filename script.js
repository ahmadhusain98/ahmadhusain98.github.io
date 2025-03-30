const sliderWrapper = document.querySelector('.slider-wrapper');
const cards = document.querySelectorAll('.card-slider');
const cardWidth = cards[0].offsetWidth + 20;
const sliderDots = document.querySelector('.slider-dots');

let currentIndex = 0;

// Tambahkan dot slider
for (let i = 0; i < cards.length; i++) {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    dot.addEventListener('click', () => {
        currentIndex = i;
        updateSlider();
    });
    sliderDots.appendChild(dot);
}

const dots = document.querySelectorAll('.dot');

function updateSlider() {
    sliderWrapper.style.transition = 'transform 0.5s ease';
    sliderWrapper.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

    // Update dot aktif
    dots.forEach((dot, index) => {
        dot.classList.remove('active');
        if (index === currentIndex) {
            dot.classList.add('active');
        }
    });
}

function slide() {
    currentIndex++;
    if (currentIndex >= cards.length) {
        currentIndex = 0;
        sliderWrapper.style.transition = 'none';
        sliderWrapper.style.transform = `translateX(0px)`;
        setTimeout(() => {
            sliderWrapper.style.transition = 'transform 0.5s ease';
        }, 10);
    }
    updateSlider();
}

setInterval(slide, 3000);

// Inisialisasi dot aktif
updateSlider();