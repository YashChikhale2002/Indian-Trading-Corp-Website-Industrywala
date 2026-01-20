<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Indian Traders Corp</title>
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
        <img src="./assets/images/crousel1.jpg" 
             alt="About Indian Traders Corp" 
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

    <!-- Company Overview -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                    <div>
                        <div class="inline-block bg-blue-100 text-primary px-4 py-1 rounded-full text-sm font-bold mb-4">
                            OUR STORY
                        </div>
                        <h2 class="text-4xl font-bold text-primary mb-6">Trusted Name in Industrial Supplies</h2>
                        <p class="text-lg text-gray-700 leading-relaxed mb-4">
                            Established in 1969, Indian Traders Corp has been a cornerstone in the industrial supplies sector for over five decades. We serve as authorized stockists and dealers for industrial valves, pipes, fittings, and accessories throughout Central India.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Based in Nagpur, Maharashtra, we have built our reputation on quality products, competitive pricing, and exceptional customer service. Our partnership-based business model allows us to maintain strong relationships with both suppliers and customers.
                        </p>
                    </div>
                    <div class="relative">
                        <div class="bg-gradient-to-br from-primary to-blue-900 rounded-2xl p-8 text-white shadow-2xl">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="text-center">
                                    <div class="text-5xl font-bold text-yellow-400 mb-2">55+</div>
                                    <div class="text-sm text-blue-200">Years in Business</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-5xl font-bold text-yellow-400 mb-2">500+</div>
                                    <div class="text-sm text-blue-200">Products</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-5xl font-bold text-yellow-400 mb-2">1000+</div>
                                    <div class="text-sm text-blue-200">Happy Clients</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-5xl font-bold text-yellow-400 mb-2">₹25Cr</div>
                                    <div class="text-sm text-blue-200">Annual Turnover</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block bg-red-100 text-secondary px-4 py-1 rounded-full text-sm font-bold mb-4">
                    LEADERSHIP
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Meet Our Team</h2>
                <p class="text-gray-600 text-lg">Experienced professionals driving our success</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                    <div class="w-32 h-32 bg-gradient-to-br from-blue-600 to-blue-800 rounded-full mx-auto mb-6 flex items-center justify-center shadow-lg">
                        <span class="text-4xl font-bold text-white">BG</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Bharatchandra Gupta</h3>
                    <p class="text-secondary font-semibold">Partner</p>
                </div>

                <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                    <div class="w-32 h-32 bg-gradient-to-br from-red-600 to-red-800 rounded-full mx-auto mb-6 flex items-center justify-center shadow-lg">
                        <span class="text-4xl font-bold text-white">SG</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Sharadchandra Gupta</h3>
                    <p class="text-secondary font-semibold">Partner</p>
                </div>

                <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                    <div class="w-32 h-32 bg-gradient-to-br from-green-600 to-green-800 rounded-full mx-auto mb-6 flex items-center justify-center shadow-lg">
                        <span class="text-4xl font-bold text-white">SG</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Satishchandra Gupta</h3>
                    <p class="text-secondary font-semibold">Partner</p>
                </div>

                <div class="text-center bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition">
                    <div class="w-32 h-32 bg-gradient-to-br from-purple-600 to-purple-800 rounded-full mx-auto mb-6 flex items-center justify-center shadow-lg">
                        <span class="text-4xl font-bold text-white">HG</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Hitesh Gandecha</h3>
                    <p class="text-secondary font-semibold">CEO</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-block bg-red-100 text-secondary px-4 py-1 rounded-full text-sm font-bold mb-4">
                    QUALITY ASSURANCE
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-primary mb-4">Certifications & Standards</h2>
                <p class="text-gray-600 text-lg">Internationally recognized quality certifications</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-gradient-to-br from-blue-50 to-white border-2 border-blue-200 p-10 rounded-2xl text-center shadow-lg hover:shadow-xl transition">
                    <div class="w-24 h-24 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-2">ISO 9001:2008</h3>
                    <p class="text-gray-600">Quality Management System Certified</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-white border-2 border-green-200 p-10 rounded-2xl text-center shadow-lg hover:shadow-xl transition">
                    <div class="w-24 h-24 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-green-700 mb-2">ISI Certified</h3>
                    <p class="text-gray-600">Indian Standards Institute Approved</p>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-white border-2 border-red-200 p-10 rounded-2xl text-center shadow-lg hover:shadow-xl transition">
                    <div class="w-24 h-24 bg-secondary rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-2">ASTM, IBR, JIS</h3>
                    <p class="text-gray-600">International Grade Materials</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-blue-600 to-blue-800 p-10 rounded-2xl text-white shadow-2xl">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold mb-4">Our Mission</h3>
                    <p class="text-blue-100 leading-relaxed text-lg">
                        To provide high-quality industrial valves, pipes, and fittings to our customers while maintaining competitive pricing and exceptional service standards. We strive to be the most trusted supplier in Central India through integrity, reliability, and customer-first approach.
                    </p>
                </div>

                <div class="bg-gradient-to-br from-red-600 to-red-800 p-10 rounded-2xl text-white shadow-2xl">
                    <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold mb-4">Our Vision</h3>
                    <p class="text-red-100 leading-relaxed text-lg">
                        To become the leading authorized dealer and stockist for industrial supplies across India, known for our integrity, product quality, and customer-first approach. We aim to set industry standards for service excellence and reliability in everything we do.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-primary via-blue-900 to-blue-800 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Partner With Us Today</h2>
            <p class="text-xl mb-8 text-blue-100">Experience the difference of working with industry leaders</p>
            <div class="flex flex-wrap justify-center gap-4">
                <button onclick="openQuoteForm()" class="bg-secondary hover:bg-red-700 text-white font-bold px-8 py-3 rounded-lg transition transform hover:scale-105 shadow-xl">
                    Get Quote
                </button>
                <a href="contact.html" class="bg-white hover:bg-gray-100 text-primary font-bold px-8 py-3 rounded-lg transition transform hover:scale-105 shadow-xl">
                    Contact Us
                </a>
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
</script>
</body>
</html>
