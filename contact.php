<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Indian Traders Corp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
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
    </script>
</head>
<body class="bg-gray-50">
<?php include 'assets/include/header.php'; ?>
<!-- Quote Form Modal - CENTER MODAL -->
<div id="quoteModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div id="quoteModalContent" class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl transform scale-95 transition-transform duration-300 max-h-[90vh] overflow-y-auto">
        
        <!-- Header -->
        <div class="bg-gradient-to-r from-primary to-blue-900 text-white p-5 rounded-t-2xl sticky top-0 z-10">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-xl font-bold">Request a Quote</h3>
                    <p class="text-blue-100 text-xs mt-1">Get competitive pricing for your needs</p>
                </div>
                <button onclick="closeQuoteForm()" class="text-white hover:text-gray-200 transition p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Compact Form in Grid -->
        <form id="quote-form" class="p-6" onsubmit="return handleFormSubmit(event)">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Full Name -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Full Name *</label>
                    <input type="text" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm" placeholder="Enter your name">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Email Address *</label>
                    <input type="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm" placeholder="your@email.com">
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Phone Number *</label>
                    <input type="tel" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm" placeholder="+91 XXXXX XXXXX">
                </div>

                <!-- Company -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Company Name</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm" placeholder="Your company name">
                </div>

                <!-- Product Category -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Product Category *</label>
                    <select required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm">
                        <option value="">Select a category</option>
                        <option value="gate-valves">Gate Valves</option>
                        <option value="globe-valves">Globe Valves</option>
                        <option value="ball-valves">Ball Valves</option>
                        <option value="non-return-valves">Non Return Valves</option>
                        <option value="butterfly-valves">Butterfly Valves</option>
                        <option value="pipes-fittings">Pipes & Fittings</option>
                        <option value="flanges">Flanges</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Quantity -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Quantity Required</label>
                    <input type="text" placeholder="e.g., 50 units" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm">
                </div>

                <!-- Message - Full Width -->
                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-1.5 text-sm">Requirements / Message *</label>
                    <textarea required rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm" placeholder="Please describe your requirements..."></textarea>
                </div>
            </div>

            <button type="submit" class="w-full bg-secondary hover:bg-red-700 text-white font-bold py-3 rounded-lg transition transform hover:scale-105 shadow-lg mt-4">
                Submit Quote Request
            </button>

            <p class="text-xs text-gray-500 text-center mt-3">We'll respond to your quote request within 24 hours</p>
        </form>
    </div>
</div>

    <!-- Just Image - Inline CSS Only -->
<!-- Responsive Single Image Banner -->
<section class="page-banner" style="width: 100%; position: relative; overflow: hidden; margin: 0; padding: 0; background: #e5e7eb;">
    <div style="position: relative; width: 100%; height: 100%;">
        <img src="./assets/images/crousel2.jpg" 
             alt="Contact Indian Traders Corp" 
             class="banner-image"
             style="width: 100%; height: 100%; display: block;">
    </div>
</section>

<!-- Responsive Banner CSS -->
<style>
    /* Base mobile styles */
    .page-banner {
        height: 220px; /* Mobile default */
    }

    .banner-image {
        object-fit: contain; /* Shows complete image on mobile */
        object-position: center;
    }

    /* Tablet: 640px and above */
    @media (min-width: 640px) {
        .page-banner {
            height: 320px;
        }

        .banner-image {
            object-fit: cover; /* Fill space on tablet */
        }
    }

    /* Desktop: 1024px and above */
    @media (min-width: 1024px) {
        .page-banner {
            height: 450px;
        }

        .banner-image {
            object-fit: cover; /* Fill space beautifully */
        }
    }

    /* Large Desktop: 1440px and above */
    @media (min-width: 1440px) {
        .page-banner {
            height: 550px;
        }
    }
</style>

    <!-- Contact Information & Form -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-7xl mx-auto">
                <!-- Contact Information -->
                <div>
                    <div class="inline-block bg-blue-100 text-primary px-4 py-1 rounded-full text-sm font-bold mb-6">
                        REACH US
                    </div>
                    <h2 class="text-4xl font-bold text-primary mb-6">Let's Connect</h2>
                    <p class="text-gray-600 mb-8 text-lg">Have questions? We're here to provide expert consultation and support for all your industrial needs.</p>

                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start space-x-4 bg-blue-50 p-6 rounded-xl">
                            <div class="w-14 h-14 bg-primary rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 mb-1">Visit Our Office</h3>
                                <p class="text-gray-600">Opposite Daga Hospital, Gandhibagh<br>Nagpur, Maharashtra - 440002, India</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-4 bg-green-50 p-6 rounded-xl">
                            <div class="w-14 h-14 bg-green-600 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 mb-1">Call Us</h3>
                                <p class="text-gray-600">+91 712 234 5678<br>+91 712 234 5679</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4 bg-yellow-50 p-6 rounded-xl">
                            <div class="w-14 h-14 bg-secondary rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 mb-1">Email Us</h3>
                                <p class="text-gray-600">info@indiantraderscorp.com<br>sales@indiantraderscorp.com</p>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="flex items-start space-x-4 bg-purple-50 p-6 rounded-xl">
                            <div class="w-14 h-14 bg-purple-600 rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 mb-1">Business Hours</h3>
                                <p class="text-gray-600">Monday - Saturday: 10:30 AM - 6:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-gradient-to-br from-gray-50 to-white p-8 rounded-2xl shadow-xl border-2 border-gray-200">
                    <h2 class="text-3xl font-bold text-primary mb-6">Send Us a Message</h2>
                    <form id="contact-form" class="space-y-5">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Full Name *</label>
                            <input type="text" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email Address *</label>
                            <input type="email" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Phone Number *</label>
                            <input type="tel" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Subject *</label>
                            <select required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition">
                                <option value="">Select a subject</option>
                                <option value="inquiry">General Inquiry</option>
                                <option value="quote">Request Quote</option>
                                <option value="support">Technical Support</option>
                                <option value="partnership">Business Partnership</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Message *</label>
                            <textarea required rows="5" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition" placeholder="Tell us about your requirements..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-secondary hover:bg-red-700 text-white font-bold py-4 rounded-lg transition transform hover:scale-105 shadow-lg">
                            Send Message
                        </button>
                    </form>

                    <div id="form-message" class="hidden mt-4 p-4 rounded-lg"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-block bg-red-100 text-secondary px-4 py-1 rounded-full text-sm font-bold mb-4">
                    LOCATION
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Find Us</h2>
                <p class="text-gray-600 text-lg">Visit our showroom in Gandhibagh, Nagpur</p>
            </div>
            <div class="max-w-5xl mx-auto">
                <div class="bg-gray-200 rounded-2xl overflow-hidden shadow-2xl" style="height: 450px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.2!2d79.08!3d21.15!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjHCsDA5JzAwLjAiTiA3OcKwMDQnNDguMCJF!5e0!3m2!1sen!2sin!4v1234567890"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

<?php include 'assets/include/footer.php'; ?>


    <script>
    // Toggle mobile menu
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }

    // Open quote form - CENTER MODAL
    function openQuoteForm() {
        const modal = document.getElementById('quoteModal');
        const content = document.getElementById('quoteModalContent');
        modal.classList.remove('hidden');
        setTimeout(function() {
            content.style.transform = 'scale(1)';
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    // Close quote form
    function closeQuoteForm() {
        const content = document.getElementById('quoteModalContent');
        content.style.transform = 'scale(0.95)';
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

    // Contact form submission
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const messageDiv = document.getElementById('form-message');
        messageDiv.className = 'mt-4 p-4 rounded-lg bg-green-100 text-green-700 border-2 border-green-300';
        messageDiv.textContent = 'Thank you for your message! We will get back to you soon.';
        messageDiv.classList.remove('hidden');
        this.reset();
        
        setTimeout(() => {
            messageDiv.classList.add('hidden');
        }, 5000);
    });
</script>
</body>
</html>
