<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - Indian Traders Corp</title>
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

        .product-image-large {
            max-width: 100%;
            height: 400px;
            object-fit: contain;
            background: #fafafa;
            border-radius: 12px;
            padding: 2rem;
            border: 1px solid #e5e5e5;
        }

        .spec-item {
            display: flex;
            padding: 0.75rem 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .spec-item:last-child {
            border-bottom: none;
        }

        .spec-label {
            font-weight: 600;
            color: #0a2463;
            min-width: 140px;
        }

        .spec-value {
            color: #444;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Quantity Selector Styles */
        .quantity-btn {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            user-select: none;
        }

        .quantity-btn:hover {
            transform: scale(1.1);
        }

        .quantity-btn:active {
            transform: scale(0.95);
        }

        .quantity-display {
            width: 80px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #0a2463;
        }

        /* Price Animation */
        @keyframes priceUpdate {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); color: #ff6b35; }
            100% { transform: scale(1); }
        }

        .price-animate {
            animation: priceUpdate 0.3s ease;
        }

        /* WhatsApp Button Animation */
        @keyframes whatsappPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .whatsapp-btn:hover {
            animation: whatsappPulse 0.6s ease infinite;
        }
    </style>
</head>
<body>

<?php include 'assets/include/header.php'; ?>

<!-- Include Modal -->
<?php include 'assets/include/modal.php'; ?>

    <!-- Breadcrumb -->
    <section class="bg-white border-b py-3">
        <div class="container mx-auto px-4">
            <div class="flex items-center text-sm text-gray-600">
                <a href="index.php" class="hover:text-primary">Home</a>
                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <a href="products.php" class="hover:text-primary">Products</a>
                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span id="breadcrumb-category" class="text-primary font-semibold">Product Details</span>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                <!-- Product Image -->
                <div class="flex items-center justify-center">
                    <img id="product-image" src="" alt="Product Image" class="product-image-large">
                </div>

                <!-- Product Information -->
                <div>
                    <div class="mb-2">
                        <span id="product-category" class="inline-block bg-blue-50 text-primary px-3 py-1 rounded-lg text-sm font-semibold border border-primary"></span>
                    </div>

                    <h1 id="product-name" class="text-3xl md:text-4xl font-bold text-primary mb-3"></h1>

                    <p id="product-subtitle" class="text-gray-600 mb-4 text-lg"></p>

                    <!-- Dynamic Price Display -->
                    <div class="mb-6">
                        <p class="text-sm text-gray-600 mb-2">Total Price:</p>
                        <div class="flex items-baseline gap-3">
                            <p id="product-total-price" class="text-4xl font-bold text-secondary"></p>
                            <p class="text-sm text-gray-500">
                                (<span id="unit-price"></span> × <span id="current-quantity">1</span> pcs)
                            </p>
                        </div>
                    </div>

                    <div class="bg-blue-50 border-l-4 border-primary p-4 mb-6 rounded-r-lg">
                        <p class="text-sm text-gray-700">
                            <svg class="w-5 h-5 inline mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                            <strong>Minimum Order Quantity:</strong> 1 Piece | <strong>Delivery:</strong> 3-5 Business Days
                        </p>
                    </div>

                    <p id="product-description" class="text-gray-700 mb-6 text-base leading-relaxed"></p>

                    <!-- Quantity Selector -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-3 text-lg">Select Quantity:</label>
                        <div class="flex items-center gap-4">
                            <div class="flex items-center border-2 border-primary rounded-lg overflow-hidden">
                                <button onclick="decreaseQuantity()" class="quantity-btn bg-gray-100 hover:bg-primary hover:text-white border-r-2 border-primary">
                                    −
                                </button>
                                <input type="number" id="quantity" value="1" min="1" readonly class="quantity-display border-0 outline-none">
                                <button onclick="increaseQuantity()" class="quantity-btn bg-gray-100 hover:bg-primary hover:text-white border-l-2 border-primary">
                                    +
                                </button>
                            </div>
                            <span class="text-gray-600 text-sm">pieces</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-4 mb-8">
                        <button onclick="buyNowWhatsApp()" class="whatsapp-btn flex-1 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-4 rounded-lg transition transform hover:scale-105 shadow-lg flex items-center justify-center gap-2">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Buy Now
                        </button>
                        <button onclick="openQuoteModal()" class="flex-1 bg-primary hover:bg-blue-900 text-white font-bold py-4 rounded-lg transition transform hover:scale-105 shadow-lg flex items-center justify-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                            Request Quote
                        </button>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <svg class="w-8 h-8 mx-auto mb-2 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-xs font-semibold">IBR Certified</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <svg class="w-8 h-8 mx-auto mb-2 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-xs font-semibold">Quality Assured</p>
                        </div>
                        <div class="text-center p-3 bg-gray-50 rounded-lg">
                            <svg class="w-8 h-8 mx-auto mb-2 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                            </svg>
                            <p class="text-xs font-semibold">Fast Delivery</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical Specifications -->
            <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Specifications -->
                <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                    <h3 class="text-2xl font-bold text-primary mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Technical Specifications
                    </h3>
                    <div class="space-y-1">
                        <div class="spec-item">
                            <span class="spec-label">Material:</span>
                            <span class="spec-value">Cast Steel / Stainless Steel</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Pressure Rating:</span>
                            <span class="spec-value">150# / 300# / 600#</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Size Range:</span>
                            <span class="spec-value">1/2" to 24"</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Connection:</span>
                            <span class="spec-value">Flanged / Threaded / Socket Weld</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Standards:</span>
                            <span class="spec-value">IBR / ASME / API</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Testing:</span>
                            <span class="spec-value">Hydro Test / Pneumatic Test</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Temperature:</span>
                            <span class="spec-value">-20°C to 450°C</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Operation:</span>
                            <span class="spec-value">Manual / Actuated</span>
                        </div>
                    </div>
                </div>

                <!-- Features & Applications -->
                <div>
                    <!-- Key Features -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 mb-6">
                        <h3 class="text-2xl font-bold text-primary mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Key Features
                        </h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">IBR Certified & Approved for boiler applications</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">High-Temperature Resistance up to 450°C</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Corrosion Resistant Materials for long service life</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Leak-Proof Design with robust sealing</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-2 mt-0.5 text-secondary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">Easy Maintenance and Service</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Applications -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6">
                        <h3 class="text-2xl font-bold text-primary mb-4 flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            Applications
                        </h3>
                        <div class="grid grid-cols-2 gap-3">
                            <div class="flex items-center p-2 bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Boiler Systems</span>
                            </div>
                            <div class="flex items-center p-2 bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Steam Lines</span>
                            </div>
                            <div class="flex items-center p-2 bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Chemical Processing</span>
                            </div>
                            <div class="flex items-center p-2 bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Oil & Gas</span>
                            </div>
                            <div class="flex items-center p-2 bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Power Plants</span>
                            </div>
                            <div class="flex items-center p-2 bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-semibold text-gray-700">Petrochemical</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'assets/include/footer.php'; ?>

    <!-- JavaScript -->
    <script>
        // ════════════════════════════════════════════════════════════════════════
        // ⚠️⚠️⚠️ CHANGE YOUR WHATSAPP NUMBER HERE ⚠️⚠️⚠️
        // ════════════════════════════════════════════════════════════════════════

        const WHATSAPP_NUMBER = '918468851160';  // 👈 REPLACE THIS WITH YOUR NUMBER

        // FORMAT: CountryCode + PhoneNumber (no spaces, no + sign)
        // 
        // EXAMPLES:
        //   India:     +91 98765 43210    →    '919876543210'
        //   USA:       +1 555-123-4567    →    '15551234567'
        //   UK:        +44 7911 123456    →    '447911123456'
        //   UAE:       +971 50 123 4567   →    '971501234567'
        //   Saudi:     +966 50 123 4567   →    '966501234567'
        //
        // ════════════════════════════════════════════════════════════════════════
    </script>

    <script>
        // ============================================================================
        // GLOBAL VARIABLES
        // ============================================================================
        let basePrice = 0;
        let unitPriceValue = 0;

        // ============================================================================
        // PAGE INITIALIZATION
        // ============================================================================
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);

            const productName = urlParams.get('name');
            const productSubtitle = urlParams.get('subtitle');
            const productDescription = urlParams.get('description');
            const productImage = urlParams.get('image');
            const productPrice = urlParams.get('price');
            const productCategory = urlParams.get('category');

            // Update Page Content
            if (productName) {
                document.getElementById('product-name').textContent = productName;
                document.title = productName + ' - Indian Traders Corp';
            }

            if (productSubtitle) {
                document.getElementById('product-subtitle').textContent = productSubtitle;
            }

            if (productDescription) {
                document.getElementById('product-description').textContent = productDescription;
            }

            if (productImage) {
                document.getElementById('product-image').src = productImage;
                document.getElementById('product-image').alt = productName;
            }

            if (productPrice) {
                // Extract numeric value from price (e.g., "₹2,500 - ₹5,000" -> 2500)
                const priceMatch = productPrice.match(/[\d,]+/);
                if (priceMatch) {
                    basePrice = parseInt(priceMatch[0].replace(/,/g, ''));
                    unitPriceValue = basePrice;
                }

                document.getElementById('unit-price').textContent = '₹' + formatPrice(unitPriceValue);
                updateTotalPrice();
            }

            if (productCategory) {
                document.getElementById('product-category').textContent = productCategory;
                document.getElementById('breadcrumb-category').textContent = productCategory;
            }

            console.log('✓ Product page loaded');
        };

        // ============================================================================
        // UTILITY FUNCTIONS
        // ============================================================================

        function formatPrice(price) {
            return price.toLocaleString('en-IN');
        }

        function updateTotalPrice() {
            const quantity = parseInt(document.getElementById('quantity').value);
            const totalPrice = unitPriceValue * quantity;

            const priceElement = document.getElementById('product-total-price');
            priceElement.textContent = '₹' + formatPrice(totalPrice);

            // Add animation
            priceElement.classList.add('price-animate');
            setTimeout(() => {
                priceElement.classList.remove('price-animate');
            }, 300);

            // Update current quantity display
            document.getElementById('current-quantity').textContent = quantity;
        }

        // ============================================================================
        // QUANTITY CONTROLS
        // ============================================================================

        function increaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
            updateTotalPrice();
        }

        function decreaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
                updateTotalPrice();
            }
        }

        // ============================================================================
        // MODAL FUNCTIONS
        // ============================================================================

        /**
         * Open Quote Modal
         * Called by "Request Quote" button
         */
        function openQuoteModal() {
            const modal = document.getElementById('quoteModal');
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';

                // Slide in animation
                const modalContent = document.getElementById('quoteModalContent');
                if (modalContent) {
                    setTimeout(() => {
                        modalContent.style.transform = 'translateX(0)';
                    }, 10);
                }

                console.log('✓ Quote modal opened');
            } else {
                console.error('❌ Modal not found! Make sure modal.php is included.');
                alert('Quote form is not available. Please contact us directly.');
            }
        }

        /**
         * Close Quote Modal
         */
        function closeQuoteModal() {
            const modal = document.getElementById('quoteModal');
            const modalContent = document.getElementById('quoteModalContent');

            if (modal && modalContent) {
                // Slide out animation
                modalContent.style.transform = 'translateX(100%)';

                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);

                console.log('✓ Quote modal closed');
            }
        }

        // ============================================================================
        // BUY NOW FUNCTION
        // ============================================================================

        // ════════════════════════════════════════════════════════════════
        // WHATSAPP ORDER FUNCTION
        // ════════════════════════════════════════════════════════════════

        function buyNowWhatsApp() {
            const quantity = document.getElementById('quantity').value;
            const totalPrice = document.getElementById('product-total-price').textContent;

            // Get product details
            const productName = document.getElementById('product-name').textContent || 'Product';
            const productCategory = document.getElementById('product-category').textContent || 'Category';
            const productSubtitle = document.getElementById('product-subtitle').textContent || '';
            const productDescription = document.getElementById('product-description').textContent || '';

            // Create WhatsApp message
            const message = '*NEW ORDER REQUEST*\n\n' +
                '📦 *Product Details:*\n' +
                '━━━━━━━━━━━━━━━━━━━━\n' +
                '*Product Name:* ' + productName + '\n' +
                '*Category:* ' + productCategory + '\n' +
                '*Description:* ' + productSubtitle + '\n\n' +
                '*Order Information:*\n' +
                '━━━━━━━━━━━━━━━━━━━━\n' +
                '*Quantity:* ' + quantity + ' pieces\n' +
                '*Total Amount:* ' + totalPrice + '\n\n' +
                '*Additional Details:*\n' +
                productDescription + '\n\n' +
                '━━━━━━━━━━━━━━━━━━━━\n' +
                'Please confirm availability and delivery timeline.\n\n' +
                'Thank you!';

            // Encode message for URL
            const encodedMessage = encodeURIComponent(message);

            // Create WhatsApp URL
            const whatsappURL = 'https://wa.me/' + WHATSAPP_NUMBER + '?text=' + encodedMessage;

            // Open WhatsApp in new tab
            window.open(whatsappURL, '_blank');

            console.log('✓ WhatsApp order initiated');
            console.log('Product:', productName);
            console.log('Quantity:', quantity);
            console.log('Total:', totalPrice);
        }

        // ============================================================================
        // EVENT LISTENERS
        // ============================================================================

        /**
         * Close modal when clicking outside
         */
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('quoteModal');

            if (modal) {
                modal.addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeQuoteModal();
                    }
                });
            }
        });

        /**
         * Close modal on ESC key
         */
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const modal = document.getElementById('quoteModal');
                if (modal && !modal.classList.contains('hidden')) {
                    closeQuoteModal();
                }
            }
        });

        console.log('✓ Product details page scripts loaded');
    </script>
</body>
</html>
