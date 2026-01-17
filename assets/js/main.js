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
