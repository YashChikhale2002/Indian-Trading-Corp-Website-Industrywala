// Main JavaScript file for Gupta Machinery Stores

// Quote Form Modal Functions
function openQuoteForm() {
    const modal = document.getElementById('quoteModal');
    const modalContent = document.getElementById('quoteModalContent');
    
    modal.classList.remove('hidden');
    
    // Trigger animation after a small delay
    setTimeout(() => {
        modalContent.classList.remove('translate-x-full');
    }, 10);
    
    // Prevent body scroll
    document.body.style.overflow = 'hidden';
}

function closeQuoteForm() {
    const modal = document.getElementById('quoteModal');
    const modalContent = document.getElementById('quoteModalContent');
    
    modalContent.classList.add('translate-x-full');
    
    // Hide modal after animation completes
    setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }, 300);
}

// Close modal when clicking outside
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('quoteModal');
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeQuoteForm();
            }
        });
    }
    
    // Handle quote form submission
    const quoteForm = document.getElementById('quote-form');
    if (quoteForm) {
        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show success message
            alert('Thank you for your quote request! We will contact you within 24 hours.');
            
            // Reset form and close modal
            quoteForm.reset();
            closeQuoteForm();
        });
    }
});

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if(target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    
    if (mobileMenu && mobileMenuBtn) {
        if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    }
});

// Hero Carousel JavaScript (5 Slides)
// Simple Auto-Carousel - 3 Seconds
let currentSlide = 0;
const slides = document.querySelectorAll('.hero-bg-slide');

function changeSlide(index) {
    // Remove active from current slide
    slides[currentSlide].classList.remove('active');
    
    // Set new slide
    currentSlide = index;
    
    // Add active to new slide
    slides[currentSlide].classList.add('active');
}

function nextSlide() {
    const nextIndex = (currentSlide + 1) % slides.length;
    changeSlide(nextIndex);
}

function prevSlide() {
    const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
    changeSlide(prevIndex);
}

// Auto-rotate every 3 seconds
let autoSlideInterval = setInterval(nextSlide, 3000);

// Pause on hover (optional)
const heroSection = document.querySelector('section');
if (heroSection) {
    heroSection.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });
    
    heroSection.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(nextSlide, 3000);
    });
}

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowLeft') prevSlide();
    if (e.key === 'ArrowRight') nextSlide();
});

// Touch swipe support for mobile
let touchStartX = 0;
let touchEndX = 0;

if (heroSection) {
    heroSection.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });

    heroSection.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
}

function handleSwipe() {
    if (touchEndX < touchStartX - 50) {
        nextSlide();
    }
    if (touchEndX > touchStartX + 50) {
        prevSlide();
    }
}



        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0a2463',
                        secondary: '#d32f2f',
                        accent: '#ff6b35',
                    }
                }
            }
        }
    


      // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Hero Carousel
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.hero-dot');

        function changeSlide(index) {
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('w-8');
            dots[currentSlide].classList.add('bg-white/50');
            dots[currentSlide].classList.remove('bg-white');

            currentSlide = index;

            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('w-8');
            dots[currentSlide].classList.add('bg-white');
            dots[currentSlide].classList.remove('bg-white/50');
        }


        // Background carousel auto-rotation for product section
        let currentBgSlide = 0;
        const bgSlides = document.querySelectorAll('.bg-slide');
        const totalBgSlides = bgSlides.length;

        function rotateBgSlide() {
            bgSlides[currentBgSlide].classList.remove('active');
            currentBgSlide = (currentBgSlide + 1) % totalBgSlides;
            bgSlides[currentBgSlide].classList.add('active');
        }

        // Auto-rotate every 5 seconds
        setInterval(rotateBgSlide, 5000);

        // Parallax scroll effect
        const productSection = document.getElementById('productSection');
        const parallaxLayer = document.querySelector('.parallax-layer');
        const parallaxBg = document.querySelector('.parallax-bg');

        if (productSection && parallaxLayer && parallaxBg) {
            window.addEventListener('scroll', function () {
                const scrolled = window.pageYOffset;
                const sectionTop = productSection.offsetTop;
                const sectionHeight = productSection.offsetHeight;

                // Only apply parallax when section is in view
                if (scrolled + window.innerHeight > sectionTop && scrolled < sectionTop + sectionHeight) {
                    const offset = (scrolled - sectionTop) * 0.5;
                    parallaxBg.style.transform = `translateY(${offset}px)`;
                    parallaxLayer.style.transform = `translateY(${-offset * 0.3}px)`;
                }
            });

            // Mouse move parallax effect
            productSection.addEventListener('mousemove', function (e) {
                const rect = productSection.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const moveX = (x - rect.width / 2) * 0.01;
                const moveY = (y - rect.height / 2) * 0.01;

                parallaxBg.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.1)`;
            });

            productSection.addEventListener('mouseleave', function () {
                parallaxBg.style.transform = 'translate(0, 0) scale(1)';
            });
        }
   // Toggle mobile menu
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    }

    // Open quote form
    function openQuoteForm() {
        const modal = document.getElementById('quoteModal');
        const content = document.getElementById('quoteModalContent');
        modal.classList.remove('hidden');
        setTimeout(function() {
            content.style.transform = 'translateX(0)';
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    // Close quote form
    function closeQuoteForm() {
        const content = document.getElementById('quoteModalContent');
        content.style.transform = 'translateX(100%)';
        setTimeout(function() {
            document.getElementById('quoteModal').classList.add('hidden');
        }, 300);
        document.body.style.overflow = '';
    }

    // Handle form submit
    function handleFormSubmit(event) {
        event.preventDefault();
        alert('Thank you! Your quote request has been submitted. We will contact you within 24 hours.');
        closeQuoteForm();
        document.getElementById('quote-form').reset();
        return false;
    }

    // Close on background click
    document.getElementById('quoteModal').onclick = function(e) {
        if (e.target.id === 'quoteModal') {
            closeQuoteForm();
        }
    };