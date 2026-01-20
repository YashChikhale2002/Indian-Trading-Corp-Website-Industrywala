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

        /* Page Banner Responsive Styles */
        .page-banner {
            height: 220px;
        }

        .banner-image {
            object-fit: contain;
            object-position: center;
        }

        @media (min-width: 640px) {
            .page-banner {
                height: 320px;
            }
            .banner-image {
                object-fit: cover;
            }
        }

        @media (min-width: 1024px) {
            .page-banner {
                height: 450px;
            }
            .banner-image {
                object-fit: cover;
            }
        }

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
<section class="page-banner" style="width: 100%; position: relative; overflow: hidden; margin: 0; padding: 0; background: #e5e7eb;">
    <div style="position: relative; width: 100%; height: 100%;">
        <img src="./assets/images/crousel6.jpg" 
             alt="Industrial Products and Valves" 
             class="banner-image"
             style="width: 100%; height: 100%; display: block;">
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
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">Popular</span>
                        <img src="./assets/images/Gate-Valve-1.png" alt="Gate Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Gate Valve</h3>
                        <p class="product-category">Cast Iron, Carbon Steel</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Globe Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">ISO</span>
                        <img src="./assets/images/Globe-Valve-1.png" alt="Globe Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Globe Valve</h3>
                        <p class="product-category">ASTM, IBR Grade</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Ball Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">Featured</span>
                        <img src="./assets/images/Ball-Valve.png" alt="Ball Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Ball Valve</h3>
                        <p class="product-category">2-Way, 3-Way Available</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Butterfly Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">Premium</span>
                        <img src="./assets/images/Butterfly-Valve.png" alt="Butterfly Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Butterfly Valve</h3>
                        <p class="product-category">Wafer, Lug, Flanged Type</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Non Return Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">Quality</span>
                        <img src="./assets/images/Non-return-Valve-1.png" alt="Non Return Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Non Return Valve</h3>
                        <p class="product-category">Check Valve, Swing Type</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Safety Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">IBR</span>
                        <img src="./assets/images/Safety-Valves.png" alt="Safety Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Safety Valve</h3>
                        <p class="product-category">Pressure Relief, IBR Approved</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Plug Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/Plug-Valve.png" alt="Plug Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Plug Valve</h3>
                        <p class="product-category">Lubricated, Non-Lubricated</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Diaphragm Valve -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/Diaphagram-valves.jpg" alt="Diaphragm Valve" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Diaphragm Valve</h3>
                        <p class="product-category">Weir Type, Straight Through</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- PRV -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/PRV.png" alt="PRV" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Pressure Reducing Valve</h3>
                        <p class="product-category">Direct Acting, Pilot Type</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Air Valves -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/Air-alves.png" alt="Air Valves" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Air Valves</h3>
                        <p class="product-category">Single, Double, Triple Orifice</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
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
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">Industrial</span>
                        <img src="./assets/images/MS-pipes-Fittings.png" alt="MS Pipes" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">MS Pipes & Fittings</h3>
                        <p class="product-category">Mild Steel, ERW, Seamless</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- SS Pipes -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">Premium</span>
                        <img src="./assets/images/SS-Pipes-Fittings.png" alt="SS Pipes" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">SS Pipes & Fittings</h3>
                        <p class="product-category">SS304, SS316, SS321</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- GI Pipes -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">ISI Mark</span>
                        <img src="./assets/images/GI-pipes-Fittings.png" alt="GI Pipes" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">GI Pipes & Fittings</h3>
                        <p class="product-category">Galvanized Iron, ISI Certified</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- HDPE Pipes -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/HDPE-pipes-and-fittings.png" alt="HDPE Pipes" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">HDPE Pipes</h3>
                        <p class="product-category">PE80, PE100, ISI Certified</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Flanges -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/Flanges.png" alt="Flanges" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Flanges</h3>
                        <p class="product-category">Slip-On, Weld Neck, Blind</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Brass Fittings -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/Bras-Pipe-Fittings.png" alt="Brass Fittings" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Brass Fittings</h3>
                        <p class="product-category">Elbow, Tee, Union, Nipple</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Hydraulic Fittings -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/Hydraulic-Pipes-Fittings.png" alt="Hydraulic Fittings" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Hydraulic Fittings</h3>
                        <p class="product-category">Hose, Adapters, Couplings</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Dairy Fittings -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">Hygienic</span>
                        <img src="./assets/images/Dairy-Valves-Fittings.png" alt="Dairy Fittings" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Dairy Fittings</h3>
                        <p class="product-category">Food Grade, Stainless Steel</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
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
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/Strainers.png" alt="Strainers" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Strainers</h3>
                        <p class="product-category">Y-Type, Basket, Duplex</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Pressure Gauges -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/Temprature-Pressure-Gaugaes.png" alt="Pressure Gauges" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Pressure Gauges</h3>
                        <p class="product-category">Analog, Digital, Diaphragm</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Boiler Mounting -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <span class="product-badge">IBR</span>
                        <img src="./assets/images/Boiler-Mounting.png" alt="Boiler Mounting" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Boiler Mounting</h3>
                        <p class="product-category">IBR Approved Components</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

                <!-- Fire Fighting -->
                <div class="product-card">
                    <div class="card-image-wrapper" onclick="window.location.href='product_details.php'">
                        <img src="./assets/images/Fire-Fighting-Accsesories.png" alt="Fire Fighting" class="product-image">
                    </div>
                    <div class="card-content">
                        <h3 class="product-title" onclick="window.location.href='product_details.php'">Fire Fighting Accessories</h3>
                        <p class="product-category">Hydrant, Hose, Nozzles</p>
                        <div class="card-actions">
                            <button onclick="window.location.href='product_details.php'" class="btn-details">View Details</button>
                            <button onclick="openQuoteModal()" class="btn-enquiry">Enquiry Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class=" bg-gradient-to-r from-primary via-blue-900 to-blue-800 relative text-white py-20 overflow-hidden" style="min-height: 350px;">
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
                <button onclick="openQuoteModal()" class="bg-white hover:bg-gray-100 text-primary font-bold px-8 py-3 rounded-lg transition transform hover:scale-105 shadow-xl">
                    📋 Request Quote
                </button>
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
     * Called by all "Enquiry Now" and "Request Quote" buttons
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

    // ============================================================================
    // PRODUCT CARD ANIMATIONS
    // ============================================================================

    /**
     * Intersection Observer for smooth product card animations
     */
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });

    /**
     * Initialize product card animations
     */
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.product-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.5s ease';
            observer.observe(card);
        });
    });

    console.log('✓ Products page scripts loaded');
</script>
</body>
</html>
