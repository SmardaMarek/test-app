const carousel = document.getElementById('product-carousel');
const wrapper = document.getElementById('carousel-wrapper');
const pageIndicator = document.getElementById('carousel-page');

const itemWidth = 320 + 32; // 80 (w-80) + 2×16 (p-4)
const itemsPerPage = Math.floor(wrapper.offsetWidth / itemWidth);
const totalItems = carousel.children.length;
const totalPages = Math.ceil(totalItems / itemsPerPage);
let currentPage = 0;

function updateCarouselPosition() {
    const offset = currentPage * wrapper.offsetWidth;
    carousel.style.transform = `translateX(-${offset}px)`;
    pageIndicator.textContent = `${currentPage + 1} / ${totalPages}`;
}

function moveCarousel(direction) {
    currentPage += direction;
    if (currentPage < 0) currentPage = 0;
    if (currentPage >= totalPages) currentPage = totalPages - 1;
    updateCarouselPosition();
}

// Draggable Support
let isDragging = false;
let startX = 0;
let scrollLeft = 0;

wrapper.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.pageX - wrapper.offsetLeft;
    scrollLeft = wrapper.scrollLeft;
});

wrapper.addEventListener('mouseleave', () => isDragging = false);
wrapper.addEventListener('mouseup', () => isDragging = false);

wrapper.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - wrapper.offsetLeft;
    const walk = x - startX;
    wrapper.scrollLeft = scrollLeft - walk;
});

// Also support touch devices
wrapper.addEventListener('touchstart', (e) => {
    isDragging = true;
    startX = e.touches[0].clientX - wrapper.offsetLeft;
    scrollLeft = wrapper.scrollLeft;
});

wrapper.addEventListener('touchend', () => isDragging = false);

wrapper.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    const x = e.touches[0].clientX - wrapper.offsetLeft;
    const walk = x - startX;
    wrapper.scrollLeft = scrollLeft - walk;
});

// Initial position
updateCarouselPosition();

function openVideoPlayer(videoId) {
    const video = document.getElementById(videoId);
    const source = video.querySelector('source');

    if (source) {
        window.open(source.src, '_blank');
    }
}

// udělat funkci globálně přístupnou
window.openVideoPlayer = openVideoPlayer;

document.addEventListener('DOMContentLoaded', () => {
    const textElement = document.getElementById('rotatingText');
    const texts = ['Vypracování úkolu 1', 'Assignment 1 Completion'];
    let index = 0;

    setInterval(() => {
        textElement.classList.add('opacity-0');

        setTimeout(() => {
            index = (index + 1) % texts.length;
            textElement.textContent = texts[index];
            textElement.classList.remove('opacity-0');
        }, 500);
    }, 3000);
});

document.getElementById('scrollToArticle').addEventListener('click', function(e) {
    e.preventDefault(); // Zabráníme výchozímu chování odkazu
    const target = document.querySelector('#article'); // Sekce, na kterou se má scrollovat
    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset; // Pozice sekce
    const startPosition = window.pageYOffset; // Počáteční pozice
    const distance = targetPosition - startPosition; // Vzdálenost, kterou je třeba posunout
    const duration = 1500; // Doba trvání scrollu (v milisekundách)
    let startTime = null;

    function animation(currentTime) {
        if (!startTime) startTime = currentTime; // Nastavení počátečního času animace
        const timeElapsed = currentTime - startTime; // Uplynulý čas
        const scrollPosition = easeInOutQuad(timeElapsed, startPosition, distance, duration); // Výpočet pozice během animace

        window.scrollTo(0, scrollPosition); // Posuneme stránku na novou pozici

        if (timeElapsed < duration) {
            requestAnimationFrame(animation); // Pokračujeme v animaci
        } else {
            window.scrollTo(0, targetPosition); // Konečná pozice, aby nedošlo k chybám v poslední fázi
        }
    }

    // Funkce pro plynulý pohyb (ease-in-out)
    function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation); // Spustíme animaci
});

const bannersSection = document.getElementById('banners');
const bubble = document.getElementById('bubble');
const bubbleText = document.getElementById('bubble-text');

let lastTitle = '';

bannersSection.addEventListener('mousemove', (e) => {
    const rect = bannersSection.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;

    // Zobrazit bublinu
    bubble.classList.remove('hidden');

    // Detekuj prvek pod kurzorem
    const elementUnderCursor = document.elementFromPoint(e.clientX, e.clientY);

    if (elementUnderCursor && elementUnderCursor.tagName === 'IMG') {
        const title = elementUnderCursor.getAttribute('data-title') || 'Obrázek';

        // Pokud je to nový obrázek, změň text a spusť animaci
        if (title !== lastTitle) {
            bubbleText.textContent = title;
            lastTitle = title;

            // Resetuj a přidej třídu pro animaci
            bubble.classList.remove('bubble-animate');
            void bubble.offsetWidth; // Force reflow
            bubble.classList.add('bubble-animate');
        }

        bubble.style.display = 'block';
    } else {
        bubble.style.display = 'none';
        lastTitle = '';
    }

    // Posun bubliny
    bubble.style.left = `${mouseX + 1}px`;
    bubble.style.top = `${mouseY + 1}px`;
});

bannersSection.addEventListener('mouseleave', () => {
    bubble.style.display = 'none';
    lastTitle = '';
});

const productsSection = document.getElementById('products');
const bubble2 = document.getElementById('bubble-2');
let lastProductElement = null;

productsSection.addEventListener('mousemove', (e) => {
    const rect = productsSection.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;

    // Zobrazit bublinu
    bubble2.classList.remove('hidden');

    const elementUnderCursor = document.elementFromPoint(e.clientX, e.clientY);

    if (elementUnderCursor && elementUnderCursor.tagName === 'IMG') {
        if (elementUnderCursor) {
            // Pokud je to nový obrázek, spusť animaci
            if (elementUnderCursor !== lastProductElement) {
                lastProductElement = elementUnderCursor;

                bubble2.classList.remove('bubble-animate');
                void bubble2.offsetWidth; // Force reflow
                bubble2.classList.add('bubble-animate');
            }

            bubble2.style.display = 'block';
        } else {
            bubble2.style.display = 'none';
            lastProductElement = null;
        }
    }

    bubble2.style.left = `${mouseX + 1}px`;
    bubble2.style.top = `${mouseY + 1}px`;
});

productsSection.addEventListener('mouseleave', () => {
    bubble2.style.display = 'none';
    lastProductElement = null;
});




