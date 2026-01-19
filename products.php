<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Indian Traders Corp | Industrial Valves & Pipe Fittings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0a2463',
                        secondary: '#d32f2f',
                    }
                }
            }
        }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #f5f5f5;
        }

        /* Professional Product Card */
        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e5e5;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 28px rgba(10, 36, 99, 0.15);
            border-color: #0a2463;
        }

        /* Clean Image Container */
        .card-image-wrapper {
            position: relative;
            padding: 2.5rem 1.5rem;
            background: #fafafa;
            min-height: 240px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #e5e5e5;
            overflow: hidden;
            cursor: pointer;
        }

        .product-image {
            max-width: 100%;
            height: 180px;
            object-fit: contain;
            transition: transform 0.4s ease;
            position: relative;
            z-index: 1;
        }

        .product-card:hover .product-image {
            transform: scale(1.15);
        }

        /* Badge Animation on Hover */
        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #d32f2f;
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .product-card:hover .product-badge {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 8px 20px rgba(211, 47, 47, 0.4);
        }

        /* Card Content */
        .card-content {
            padding: 1.75rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0a2463;
            margin-bottom: 0.5rem;
            line-height: 1.4;
            cursor: pointer;
        }

        .product-category {
            color: #666;
            font-size: 0.875rem;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        /* Two Buttons Layout */
        .card-actions {
            display: flex;
            gap: 0.75rem;
            margin-top: auto;
        }

        .btn-details {
            flex: 1;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.875rem;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
            border: 2px solid #d32f2f;
            background: white;
            color: #d32f2f;
        }

        .btn-details:hover {
            background: #d32f2f;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(211, 47, 47, 0.3);
        }

        .btn-enquiry {
            flex: 1;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.875rem;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
            border: none;
            background: #d32f2f;
            color: white;
        }

        .btn-enquiry:hover {
            background: #b71c1c;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(211, 47, 47, 0.3);
        }

        /* Section Styling */
        .section-title {
            font-size: 2rem;
            font-weight: 800;
            color: #0a2463;
            margin-bottom: 0.75rem;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            color: #666;
            font-size: 1.125rem;
            margin-bottom: 3rem;
        }

        /* Category Filter */
        .filter-btn {
            padding: 0.75rem 1.75rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.2s ease;
            background: white;
            color: #666;
            border: 2px solid #e5e5e5;
        }

        .filter-btn:hover {
            background: #f5f5f5;
            border-color: #0a2463;
            color: #0a2463;
        }

        .filter-btn.active {
            background: #0a2463;
            color: white;
            border-color: #0a2463;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .section-title {
                font-size: 1.75rem;
            }
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
<?php include 'assets/include/header.php'; ?>

<!-- Quote Form Modal - COMPACT NO SCROLL VERSION -->
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

    <!-- Hero Section -->
    <!-- Responsive Single Image Banner -->
<section class="page-banner" style="width: 100%; position: relative; overflow: hidden; margin: 0; padding: 0; background: #e5e7eb;">
    <div style="position: relative; width: 100%; height: 100%;">
        <img src="./assets/images/crousel6.jpg" 
             alt="Industrial Products and Valves" 
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

    <!-- Filter Section -->
    <section class=" py-2 sticky top-[89px] z-40 ">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap gap-4 justify-center">
                <button onclick="scrollToSection('all')" class="filter-btn active" data-category="all">All Products</button>
                <button onclick="scrollToSection('valves')" class="filter-btn" data-category="valves">Valves</button>
                <button onclick="scrollToSection('pipes')" class="filter-btn" data-category="pipes">Pipes & Fittings</button>
                <button onclick="scrollToSection('accessories')" class="filter-btn" data-category="accessories">Accessories</button>
            </div>
        </div>
    </section>

    <!-- Valves Section -->
    <section id="valves" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="section-title">Industrial Valves</h2>
                <p class="section-subtitle">High-quality valves for diverse industrial applications</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                
                <!-- Gate Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">Popular</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Gate Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Gate Valve</h3>
                        <p class="product-category">Cast Iron, Carbon Steel</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Globe Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">ISO</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Globe Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Globe Valve</h3>
                        <p class="product-category">ASTM, IBR Grade</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Ball Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">Featured</span>
                        <img src="./assets/images/Ball-Valve.png" alt="Ball Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Ball Valve</h3>
                        <p class="product-category">2-Way, 3-Way Available</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Butterfly Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">Premium</span>
                        <img src="./assets/images/Butterfly-Valve.png" alt="Butterfly Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Butterfly Valve</h3>
                        <p class="product-category">Wafer, Lug, Flanged Type</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Non Return Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">Quality</span>
                        <img src="./assets/images/Non-return-Valve-1.png" alt="Non Return Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Non Return Valve</h3>
                        <p class="product-category">Check Valve, Swing Type</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Safety Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">IBR</span>
                        <img src="./assets/images/Safety-Valves.png" alt="Safety Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Safety Valve</h3>
                        <p class="product-category">Pressure Relief, IBR Approved</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Plug Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/Plug-Valve.png" alt="Plug Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Plug Valve</h3>
                        <p class="product-category">Lubricated, Non-Lubricated</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Diaphragm Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/Diaphagram-valves.jpg" alt="Diaphragm Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Diaphragm Valve</h3>
                        <p class="product-category">Weir Type, Straight Through</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- PRV -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/PRV.png" alt="PRV" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Pressure Reducing Valve</h3>
                        <p class="product-category">Direct Acting, Pilot Type</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Air Valves -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/Air-alves.png" alt="Air Valves" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Air Valves</h3>
                        <p class="product-category">Single, Double, Triple Orifice</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pipes & Fittings Section -->
    <section id="pipes" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="section-title">Pipes & Fittings</h2>
                <p class="section-subtitle">Complete range of industrial pipes and fittings</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                
                <!-- MS Pipes -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">Industrial</span>
                        <img src="./assets/images/MS-pipes-Fittings.png" alt="MS Pipes" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">MS Pipes & Fittings</h3>
                        <p class="product-category">Mild Steel, ERW, Seamless</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- SS Pipes -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">Premium</span>
                        <img src="./assets/images/SS-Pipes-Fittings.png" alt="SS Pipes" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">SS Pipes & Fittings</h3>
                        <p class="product-category">SS304, SS316, SS321</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- GI Pipes -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">ISI Mark</span>
                        <img src="./assets/images/GI-pipes-Fittings.png" alt="GI Pipes" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">GI Pipes & Fittings</h3>
                        <p class="product-category">Galvanized Iron, ISI Certified</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- HDPE Pipes -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/HDPE-pipes-and-fittings.png" alt="HDPE Pipes" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">HDPE Pipes</h3>
                        <p class="product-category">PE80, PE100, ISI Certified</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Flanges -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/Flanges.png" alt="Flanges" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Flanges</h3>
                        <p class="product-category">Slip-On, Weld Neck, Blind</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Brass Fittings -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/Bras-Pipe-Fittings.png" alt="Brass Fittings" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Brass Fittings</h3>
                        <p class="product-category">Elbow, Tee, Union, Nipple</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Hydraulic Fittings -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/Hydraulic-Pipes-Fittings.png" alt="Hydraulic Fittings" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Hydraulic Fittings</h3>
                        <p class="product-category">Hose, Adapters, Couplings</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Dairy Fittings -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">Hygienic</span>
                        <img src="./assets/images/Dairy-Valves-Fittings.png" alt="Dairy Fittings" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Dairy Fittings</h3>
                        <p class="product-category">Food Grade, Stainless Steel</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Accessories Section -->
    <section id="accessories" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="section-title">Industrial Accessories</h2>
                <p class="section-subtitle">Essential accessories for complete industrial solutions</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                
                <!-- Strainers -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/Strainers.png" alt="Strainers" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Strainers</h3>
                        <p class="product-category">Y-Type, Basket, Duplex</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Pressure Gauges -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/Temprature-Pressure-Gaugaes.png" alt="Pressure Gauges" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Pressure Gauges</h3>
                        <p class="product-category">Analog, Digital, Diaphragm</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Boiler Mounting -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <span class="product-badge">IBR</span>
                        <img src="./assets/images/Boiler-Mounting.png" alt="Boiler Mounting" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Boiler Mounting</h3>
                        <p class="product-category">IBR Approved Components</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Fire Fighting -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.html'">
                        <img src="./assets/images/Fire-Fighting-Accsesories.png" alt="Fire Fighting" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.html'">Fire Fighting Accessories</h3>
                        <p class="product-category">Hydrant, Hose, Nozzles</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.html'" class="btn-details">View Details</button>
                            <button onclick="openQuoteForm()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative text-white py-20 overflow-hidden" style="min-height: 350px;">
        <div class="absolute inset-0 z-0">
            <img src="./assets/images/crousel2.jpg" 
                 alt="Industrial Background" 
                 style="width: 100%; height: 100%; object-fit: cover; object-position: center; filter: brightness(0.5);">
        </div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-4" style="text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.9), 1px 1px 4px rgba(0, 0, 0, 1);">
                Need a Custom Quote?
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto leading-relaxed" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.9), 1px 1px 3px rgba(0, 0, 0, 1);">
                Our expert team is ready to help you find the perfect solution for your industrial needs
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="tel:+917122345678" class="bg-secondary hover:bg-red-700 text-white font-bold px-8 py-3 rounded-lg transition transform hover:scale-105 shadow-xl">
                    📞 Call Now
                </a>
                <button onclick="openQuoteForm()" class="bg-white hover:bg-gray-100 text-primary font-bold px-8 py-3 rounded-lg transition transform hover:scale-105 shadow-xl">
                    📋 Request Quote
                </button>
            </div>
        </div>
    </section>

<?php include 'assets/include/footer.php'; ?>


    <!-- JavaScript -->
    <script>
        // Toggle mobile menu
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function scrollToSection(category) {
            ...
            if (category === 'all') {
                targetSection = document.getElementById('valves');
            } else if (category === 'valves') {
                targetSection = document.getElementById('valves');
            } else if (category === 'pipes') {
                targetSection = document.getElementById('pipes');
            } else if (category === 'accessories') {
                targetSection = document.getElementById('accessories');
            }
            ...
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

        // Smooth scroll animation for product cards
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        document.querySelectorAll('.product-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.5s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>
