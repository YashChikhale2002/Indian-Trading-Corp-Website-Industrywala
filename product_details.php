<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Indian Traders Corp | Valves, Pipes & Fittings</title>
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

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e5e5;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(10, 36, 99, 0.12);
        }

        .product-image-container {
            position: relative;
            padding: 2rem;
            background: #fafafa;
            min-height: 220px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #e5e5e5;
        }

        .product-image-container img {
            max-width: 100%;
            height: 160px;
            object-fit: contain;
        }

        .ibr-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #d32f2f;
            color: white;
            padding: 4px 12px;
            border-radius: 5px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .category-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: white;
            color: #0a2463;
            padding: 4px 10px;
            border-radius: 5px;
            font-size: 10px;
            font-weight: 600;
            border: 1px solid #e5e5e5;
        }

        .product-info {
            padding: 1.25rem;
        }

        .product-title {
            font-size: 1rem;
            font-weight: 700;
            color: #0a2463;
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }

        .product-subtitle {
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 0.75rem;
        }

        .product-price {
            font-size: 1.1rem;
            font-weight: 800;
            color: #d32f2f;
            margin-bottom: 1rem;
        }

        .btn-group {
            display: flex;
            gap: 0.5rem;
        }

        .btn-details, .btn-enquiry {
            flex: 1;
            padding: 0.65rem;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.8rem;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
        }

        .btn-details {
            border: 2px solid #0a2463;
            background: white;
            color: #0a2463;
        }

        .btn-details:hover {
            background: #0a2463;
            color: white;
        }

        .btn-enquiry {
            border: none;
            background: #d32f2f;
            color: white;
        }

        .btn-enquiry:hover {
            background: #b71c1c;
        }

        .filter-btn {
            padding: 0.75rem 1.5rem;
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
            border-color: #0a2463;
            color: #0a2463;
        }

        .filter-btn.active {
            background: #0a2463;
            color: white;
            border-color: #0a2463;
        }

        html {
            scroll-behavior: smooth;
        }

        .product-section {
            display: none;
        }

        .product-section.active {
            display: block;
        }

        /* Responsive Banner Styles - Same as other pages */
        .page-banner {
            height: 220px; /* Mobile default */
            width: 100%;
            position: relative;
            overflow: hidden;
            margin: 0;
            padding: 0;
            background: #e5e7eb;
        }

        .banner-image {
            object-fit: contain; /* Shows complete image on mobile */
            object-position: center;
            width: 100%;
            height: 100%;
            display: block;
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
</head>
<body>

<?php include 'assets/include/header.php'; ?>

<!-- Include Modal -->
<?php include 'assets/include/modal.php'; ?>

    <!-- Responsive Single Image Banner -->
    <section class="page-banner">
        <div style="position: relative; width: 100%; height: 100%;">
            <img src="./assets/images/crousel6.jpg" 
                 alt="Industrial Products and Valves" 
                 class="banner-image">
        </div>
    </section>

    <!-- All Products Section -->
    <section id="all-section" class="py-12 bg-white product-section active">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary mb-8 text-center">All Industrial Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">

                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Bronze IBR Globe Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Bronze IBR Certified Globe Steam Stop Valve</h3>
                        <p class="product-subtitle">IBR Approved • High Temperature</p>
                        <p class="product-price">₹1,384 - ₹19,688</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Bronze IBR Certified Globe Steam Stop Valve', 'IBR Approved • High Temperature', 'IBR Certified steam stop valve for high-temperature applications in boiler systems', './assets/images/Globe-Valve-1.png', '₹1,384 - ₹19,688', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Cast Iron Globe Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Iron IBR Certified Globe Steam Stop Valve</h3>
                        <p class="product-subtitle">ASTM Grade • Flanged End</p>
                        <p class="product-price">₹1,892 - ₹26,975</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Iron IBR Certified Globe Steam Stop Valve', 'ASTM Grade • Flanged End', 'Heavy-duty cast iron globe valve with IBR certification for industrial steam applications', './assets/images/Globe-Valve-1.png', '₹1,892 - ₹26,975', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR Certified</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Cast Steel Gate Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Steel IBR Certified Gate Valve Class 150#</h3>
                        <p class="product-subtitle">Class 150 • Bolted Bonnet</p>
                        <p class="product-price">₹4,928 - ₹76,500</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Steel IBR Certified Gate Valve Class 150#', 'Class 150 • Bolted Bonnet', 'Cast steel gate valve with class 150 pressure rating for reliable on/off control', './assets/images/Gate-Valve-1.png', '₹4,928 - ₹76,500', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR Certified</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Cast Steel Gate Valve 300">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Steel IBR Certified Gate Valve Class 300#</h3>
                        <p class="product-subtitle">Class 300 • High Pressure</p>
                        <p class="product-price">₹13,674 - ₹2,15,009</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Steel IBR Certified Gate Valve Class 300#', 'Class 300 • High Pressure', 'High-pressure gate valve for critical industrial applications with class 300 rating', './assets/images/Gate-Valve-1.png', '₹13,674 - ₹2,15,009', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR Certified</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Cast Steel Globe Valve 150">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Steel IBR Certified Globe Valve Class 150#</h3>
                        <p class="product-subtitle">Class 150 • Steam Service</p>
                        <p class="product-price">₹3,825 - ₹88,378</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Steel IBR Certified Globe Valve Class 150#', 'Class 150 • Steam Service', 'Globe valve for steam and high-temperature service with precision flow control', './assets/images/Globe-Valve-1.png', '₹3,825 - ₹88,378', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR Certified</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Cast Steel Globe Valve 300">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Steel IBR Certified Globe Valve Class 300#</h3>
                        <p class="product-subtitle">Class 300 • Bolted Bonnet</p>
                        <p class="product-price">₹7,845 - ₹1,52,880</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Steel IBR Certified Globe Valve Class 300#', 'Class 300 • Bolted Bonnet', 'High-pressure globe valve with IBR certification for demanding applications', './assets/images/Globe-Valve-1.png', '₹7,845 - ₹1,52,880', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Forged Steel Gate Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Forged Steel A-105 IBR Certified Gate Valve</h3>
                        <p class="product-subtitle">Forged A-105 • Socket Weld</p>
                        <p class="product-price">₹2,450 - ₹18,900</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Forged Steel A-105 IBR Certified Gate Valve', 'Forged A-105 • Socket Weld', 'Forged steel gate valve for high-pressure applications with superior strength', './assets/images/Gate-Valve-1.png', '₹2,450 - ₹18,900', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Forged Steel Globe Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Forged Steel A-105 IBR Certified Globe Valve</h3>
                        <p class="product-subtitle">Forged A-105 • Threaded</p>
                        <p class="product-price">₹2,180 - ₹16,750</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Forged Steel A-105 IBR Certified Globe Valve', 'Forged A-105 • Threaded', 'Forged steel globe valve with threaded connections for easy installation', './assets/images/Globe-Valve-1.png', '₹2,180 - ₹16,750', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Ball / Check Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Ball-Valve.png" alt="Forged Steel Check Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Forged Steel F-304 IBR Certified Check Valve</h3>
                        <p class="product-subtitle">SS 304 • Swing Type</p>
                        <p class="product-price">₹3,250 - ₹24,500</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Forged Steel F-304 IBR Certified Check Valve', 'SS 304 • Swing Type', 'Stainless steel check valve with swing type design for backflow prevention', './assets/images/Ball-Valve.png', '₹3,250 - ₹24,500', 'Ball / Check Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 10 -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Forged Steel Gate Valve F-304">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Forged Steel F-304 IBR Certified Gate Valve</h3>
                        <p class="product-subtitle">SS 304 • Flanged End</p>
                        <p class="product-price">₹3,850 - ₹29,200</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Forged Steel F-304 IBR Certified Gate Valve', 'SS 304 • Flanged End', 'Stainless steel gate valve for corrosive environments with excellent durability', './assets/images/Gate-Valve-1.png', '₹3,850 - ₹29,200', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 11 - MS Pipes -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Pipes & Fittings</span>
                        <img src="./assets/images/MS-pipes-Fittings.png" alt="MS Pipes">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">MS Pipes & Fittings</h3>
                        <p class="product-subtitle">Mild Steel • ERW, Seamless</p>
                        <p class="product-price">₹850 - ₹12,500</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('MS Pipes & Fittings', 'Mild Steel • ERW, Seamless', 'High-quality mild steel pipes for industrial applications with ERW and seamless options', './assets/images/MS-pipes-Fittings.png', '₹850 - ₹12,500', 'Pipes & Fittings')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 12 - SS Pipes -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Pipes & Fittings</span>
                        <span class="ibr-badge">Premium</span>
                        <img src="./assets/images/SS-Pipes-Fittings.png" alt="SS Pipes">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">SS Pipes & Fittings</h3>
                        <p class="product-subtitle">SS304, SS316, SS321</p>
                        <p class="product-price">₹2,450 - ₹35,800</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('SS Pipes & Fittings', 'SS304, SS316, SS321', 'Premium stainless steel pipes and fittings for corrosion-resistant applications', './assets/images/SS-Pipes-Fittings.png', '₹2,450 - ₹35,800', 'Pipes & Fittings')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <!-- Product 13 - GI Pipes -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Pipes & Fittings</span>
                        <span class="ibr-badge">ISI Mark</span>
                        <img src="./assets/images/GI-pipes-Fittings.png" alt="GI Pipes">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">GI Pipes & Fittings</h3>
                        <p class="product-subtitle">Galvanized Iron, ISI Certified</p>
                        <p class="product-price">₹1,200 - ₹18,900</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('GI Pipes & Fittings', 'Galvanized Iron, ISI Certified', 'ISI certified galvanized iron pipes with superior corrosion protection', './assets/images/GI-pipes-Fittings.png', '₹1,200 - ₹18,900', 'Pipes & Fittings')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Gate/Globe Valves Section -->
    <section id="valves-section" class="py-12 bg-white product-section">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary mb-8 text-center">Gate / Globe Valves</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">

                <!-- Repeat Products 1-8 and 10 here with same structure -->
                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Bronze IBR Globe Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Bronze IBR Certified Globe Steam Stop Valve</h3>
                        <p class="product-subtitle">IBR Approved • High Temperature</p>
                        <p class="product-price">₹1,384 - ₹19,688</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Bronze IBR Certified Globe Steam Stop Valve', 'IBR Approved • High Temperature', 'IBR Certified steam stop valve for high-temperature applications in boiler systems', './assets/images/Globe-Valve-1.png', '₹1,384 - ₹19,688', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Cast Iron Globe Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Iron IBR Certified Globe Steam Stop Valve</h3>
                        <p class="product-subtitle">ASTM Grade • Flanged End</p>
                        <p class="product-price">₹1,892 - ₹26,975</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Iron IBR Certified Globe Steam Stop Valve', 'ASTM Grade • Flanged End', 'Heavy-duty cast iron globe valve with IBR certification for industrial steam applications', './assets/images/Globe-Valve-1.png', '₹1,892 - ₹26,975', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR Certified</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Cast Steel Gate Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Steel IBR Certified Gate Valve Class 150#</h3>
                        <p class="product-subtitle">Class 150 • Bolted Bonnet</p>
                        <p class="product-price">₹4,928 - ₹76,500</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Steel IBR Certified Gate Valve Class 150#', 'Class 150 • Bolted Bonnet', 'Cast steel gate valve with class 150 pressure rating for reliable on/off control', './assets/images/Gate-Valve-1.png', '₹4,928 - ₹76,500', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR Certified</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Cast Steel Gate Valve 300">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Steel IBR Certified Gate Valve Class 300#</h3>
                        <p class="product-subtitle">Class 300 • High Pressure</p>
                        <p class="product-price">₹13,674 - ₹2,15,009</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Steel IBR Certified Gate Valve Class 300#', 'Class 300 • High Pressure', 'High-pressure gate valve for critical industrial applications with class 300 rating', './assets/images/Gate-Valve-1.png', '₹13,674 - ₹2,15,009', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR Certified</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Cast Steel Globe Valve 150">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Steel IBR Certified Globe Valve Class 150#</h3>
                        <p class="product-subtitle">Class 150 • Steam Service</p>
                        <p class="product-price">₹3,825 - ₹88,378</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Steel IBR Certified Globe Valve Class 150#', 'Class 150 • Steam Service', 'Globe valve for steam and high-temperature service with precision flow control', './assets/images/Globe-Valve-1.png', '₹3,825 - ₹88,378', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR Certified</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Cast Steel Globe Valve 300">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Cast Steel IBR Certified Globe Valve Class 300#</h3>
                        <p class="product-subtitle">Class 300 • Bolted Bonnet</p>
                        <p class="product-price">₹7,845 - ₹1,52,880</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Cast Steel IBR Certified Globe Valve Class 300#', 'Class 300 • Bolted Bonnet', 'High-pressure globe valve with IBR certification for demanding applications', './assets/images/Globe-Valve-1.png', '₹7,845 - ₹1,52,880', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Forged Steel Gate Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Forged Steel A-105 IBR Certified Gate Valve</h3>
                        <p class="product-subtitle">Forged A-105 • Socket Weld</p>
                        <p class="product-price">₹2,450 - ₹18,900</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Forged Steel A-105 IBR Certified Gate Valve', 'Forged A-105 • Socket Weld', 'Forged steel gate valve for high-pressure applications with superior strength', './assets/images/Gate-Valve-1.png', '₹2,450 - ₹18,900', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Forged Steel Globe Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Forged Steel A-105 IBR Certified Globe Valve</h3>
                        <p class="product-subtitle">Forged A-105 • Threaded</p>
                        <p class="product-price">₹2,180 - ₹16,750</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Forged Steel A-105 IBR Certified Globe Valve', 'Forged A-105 • Threaded', 'Forged steel globe valve with threaded connections for easy installation', './assets/images/Globe-Valve-1.png', '₹2,180 - ₹16,750', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Gate / Globe Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Forged Steel Gate Valve F-304">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Forged Steel F-304 IBR Certified Gate Valve</h3>
                        <p class="product-subtitle">SS 304 • Flanged End</p>
                        <p class="product-price">₹3,850 - ₹29,200</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Forged Steel F-304 IBR Certified Gate Valve', 'SS 304 • Flanged End', 'Stainless steel gate valve for corrosive environments with excellent durability', './assets/images/Gate-Valve-1.png', '₹3,850 - ₹29,200', 'Gate / Globe Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Ball/Check Valves Section -->
    <section id="ball-section" class="py-12 bg-white product-section">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary mb-8 text-center">Ball / Check Valves</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Ball / Check Valves</span>
                        <span class="ibr-badge">IBR</span>
                        <img src="./assets/images/Ball-Valve.png" alt="Forged Steel Check Valve">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Forged Steel F-304 IBR Certified Check Valve</h3>
                        <p class="product-subtitle">SS 304 • Swing Type</p>
                        <p class="product-price">₹3,250 - ₹24,500</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('Forged Steel F-304 IBR Certified Check Valve', 'SS 304 • Swing Type', 'Stainless steel check valve with swing type design for backflow prevention', './assets/images/Ball-Valve.png', '₹3,250 - ₹24,500', 'Ball / Check Valves')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pipes Section -->
    <section id="pipes-section" class="py-12 bg-white product-section">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary mb-8 text-center">Pipes & Fittings</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Pipes & Fittings</span>
                        <img src="./assets/images/MS-pipes-Fittings.png" alt="MS Pipes">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">MS Pipes & Fittings</h3>
                        <p class="product-subtitle">Mild Steel • ERW, Seamless</p>
                        <p class="product-price">₹850 - ₹12,500</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('MS Pipes & Fittings', 'Mild Steel • ERW, Seamless', 'High-quality mild steel pipes for industrial applications with ERW and seamless options', './assets/images/MS-pipes-Fittings.png', '₹850 - ₹12,500', 'Pipes & Fittings')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Pipes & Fittings</span>
                        <span class="ibr-badge">Premium</span>
                        <img src="./assets/images/SS-Pipes-Fittings.png" alt="SS Pipes">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">SS Pipes & Fittings</h3>
                        <p class="product-subtitle">SS304, SS316, SS321</p>
                        <p class="product-price">₹2,450 - ₹35,800</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('SS Pipes & Fittings', 'SS304, SS316, SS321', 'Premium stainless steel pipes and fittings for corrosion-resistant applications', './assets/images/SS-Pipes-Fittings.png', '₹2,450 - ₹35,800', 'Pipes & Fittings')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <span class="category-badge">Pipes & Fittings</span>
                        <span class="ibr-badge">ISI Mark</span>
                        <img src="./assets/images/GI-pipes-Fittings.png" alt="GI Pipes">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">GI Pipes & Fittings</h3>
                        <p class="product-subtitle">Galvanized Iron, ISI Certified</p>
                        <p class="product-price">₹1,200 - ₹18,900</p>
                        <div class="btn-group">
                            <button onclick="viewProduct('GI Pipes & Fittings', 'Galvanized Iron, ISI Certified', 'ISI certified galvanized iron pipes with superior corrosion protection', './assets/images/GI-pipes-Fittings.png', '₹1,200 - ₹18,900', 'Pipes & Fittings')" class="btn-details">Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php include 'assets/include/footer.php'; ?>

    <!-- JavaScript -->
    <script>
        // ============================================================================
        // MODAL FUNCTIONS
        // ============================================================================

        /**
         * Open Quote Modal
         * Called by all "Enquiry" buttons
         */
        function openQuoteModal() {
            const modal = document.getElementById('quoteModal');
            if (modal) {
                modal.classList.remove('hidden');
                modal.classList.add('show');
                document.body.style.overflow = 'hidden';

                // Focus first input field
                setTimeout(() => {
                    const firstInput = modal.querySelector('input[name="fullName"]');
                    if (firstInput) firstInput.focus();
                }, 300);

                console.log('✓ Quote modal opened');
            } else {
                console.error('❌ Modal not found! Make sure modal.php is included.');
            }
        }

        /**
         * Close Quote Modal
         */
        function closeQuoteModal() {
            const modal = document.getElementById('quoteModal');
            if (modal) {
                modal.classList.remove('show');
                document.body.style.overflow = '';

                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);

                console.log('✓ Quote modal closed');
            }
        }

        // ============================================================================
        // FILTER FUNCTIONS
        // ============================================================================

        function filterProducts(category) {
            // Remove active class from all buttons
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => btn.classList.remove('active'));

            // Add active class to clicked button
            document.getElementById('btn-' + category).classList.add('active');

            // Hide all sections
            const sections = document.querySelectorAll('.product-section');
            sections.forEach(section => section.classList.remove('active'));

            // Show selected section
            if (category === 'all') {
                document.getElementById('all-section').classList.add('active');
            } else if (category === 'valves') {
                document.getElementById('valves-section').classList.add('active');
            } else if (category === 'ball') {
                document.getElementById('ball-section').classList.add('active');
            } else if (category === 'pipes') {
                document.getElementById('pipes-section').classList.add('active');
            }

            // Scroll to products
            window.scrollTo({ top: 450, behavior: 'smooth' });
        }

        // ============================================================================
        // VIEW PRODUCT FUNCTION
        // ============================================================================

        function viewProduct(name, subtitle, description, image, price, category) {
            const params = new URLSearchParams({
                name: name,
                subtitle: subtitle,
                description: description,
                image: image,
                price: price,
                category: category
            });
            window.location.href = 'cart.php?' + params.toString();
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

        console.log('✓ Products page scripts loaded');
    </script>
</body>
</html>
