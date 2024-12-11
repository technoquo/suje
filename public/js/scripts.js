// Function to change the theme
function changeTheme(themeName) {
    document.documentElement.setAttribute('data-theme', themeName);
    localStorage.setItem('theme', themeName); // Save the theme in localStorage
}

// Load the theme from localStorage when the page loads
document.addEventListener('DOMContentLoaded', function() {
    const savedTheme = localStorage.getItem('theme') ||
        'cupcake'; // Default to 'cupcake' if no theme is saved
    changeTheme(savedTheme);
});

// Example: Switch between light and dark themes
document.getElementById('themeSwitcher').addEventListener('click', function() {
    const currentTheme = document.documentElement.getAttribute('data-theme');

    if (currentTheme === 'cupcake') {
        document.querySelectorAll('.glide__arrow').forEach(arrow => {
            arrow.classList.replace('border-gray-200', 'border-indigo-500/100');
        });
        changeTheme('retro');
    } else {
        document.querySelectorAll('.glide__arrow').forEach(arrow => {
            arrow.classList.replace('border-indigo-500', 'border-gray-500');
        });
        changeTheme('cupcake');
    }
});

document.addEventListener('alpine:init', () => {
    Alpine.data('carousel', () => ({
        currentSlide: 1,
        totalSlides: 4,
        interval: null,

        startCarousel() {
            this.interval = setInterval(() => {
                this.nextSlide();
            }, 3000);
        },

        nextSlide() {
            this.currentSlide = this.currentSlide === this.totalSlides ? 1 : this.currentSlide +
                1;
        },

        prevSlide() {
            this.currentSlide = this.currentSlide === 1 ? this.totalSlides : this.currentSlide -
                1;
        },
    }));
});


document.getElementById('menuToggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
});


const detailsElement = document.getElementById('sportsDetails');
console.log(detailsElement);
// Close details when mouse leaves the group
document.querySelector('.group-sport').addEventListener('mouseleave', () => {

    if (detailsElement.open) {
        detailsElement.removeAttribute('open');
    }
});

function imageRotator() {
    return {
        images: [
            '/img/1-photo.png',
            '/img/2-photo.png',
            '/img/3-photo.png',
            '/img/4-photo.png',
            '/img/5-photo.png',
            '/img/6-photo.png',
            '/img/7-photo.png',
            '/img/8-photo.png',
            '/img/9-photo.png',
            '/img/10-photo.png',
            '/img/11-photo.png',
            '/img/12-photo.png',

        ],
        currentImage: '/img/1-photo.png',
        fadingOut: false,
        init() {
            this.startRotation();
        },
        startRotation() {
            setInterval(() => {
                this.fadingOut = true; // Start fade out
                setTimeout(() => {
                    this.currentImage = this.images[Math.floor(Math.random() * this.images.length)];
                    this.fadingOut = false; // Fade back in
                }, 500); // Match the fade-out duration
            }, 2000); // Change image every 5 seconds
        }
    };
}

