<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gupta Machinery Stores - Industrial Valves & Pipe Fittings Supplier in Nagpur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#0a2463',
                    dark: '#071940',
                    light: '#1e3a8a',
                },
                secondary: {
                    DEFAULT: '#d32f2f',
                    dark: '#b71c1c',
                    light: '#e53935',
                },
                accent: '#ff6b35',
            },
            boxShadow: {
                'custom': '0 10px 40px rgba(0, 0, 0, 0.15)',
            },
            animation: {
                'scroll': 'scroll 30s linear infinite',
                'fade-in': 'fadeIn 0.6s ease-out',
                'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
            },
        }
    }
}

    </script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="bg-gray-50">

<!-- ============================================================ -->
<!-- RESPONSIVE BANNER - PERFECT FOR ALL DEVICES                 -->
<!-- Mobile: Shows complete image | Desktop: Fills beautifully   -->
<!-- ============================================================ -->

<?php include 'assets/include/header.php'; ?>

<?php include 'assets/include/modal.php'; ?>

<!-- Responsive Banner Section -->
<section class="banner-section" style="width: 100%; position: relative; overflow: hidden; margin: 0; padding: 0; background: #e5e7eb;">

    <!-- Slides Container -->
    <div style="position: relative; width: 100%; height: 100%;">

        <!-- Slide 1 -->
        <div class="banner-slide active" style="position: absolute; width: 100%; height: 100%; opacity: 1; transition: opacity 1s ease;">
            <img src="assets/images/crousel1.jpg" alt="Industrial Products" class="banner-img">
        </div>

        <!-- Slide 2 -->
        <div class="banner-slide" style="position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease;">
            <img src="assets/images/crousel2.jpg" alt="Industrial Products" class="banner-img">
        </div>

        <!-- Slide 3 -->
        <div class="banner-slide" style="position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease;">
            <img src="assets/images/crousel3.jpg" alt="Industrial Products" class="banner-img">
        </div>

        <!-- Slide 4 -->
        <div class="banner-slide" style="position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease;">
            <img src="assets/images/crousel4.jpg" alt="Industrial Products" class="banner-img">
        </div>

        <!-- Slide 5 -->
        <div class="banner-slide" style="position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease;">
            <img src="assets/images/crousel5.jpg" alt="Industrial Products" class="banner-img">
        </div>

        <!-- Slide 6 -->
        <div class="banner-slide" style="position: absolute; width: 100%; height: 100%; opacity: 0; transition: opacity 1s ease;">
            <img src="assets/images/crousel6.jpg" alt="Industrial Products" class="banner-img">
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button onclick="bannerPrev()" class="banner-arrow banner-arrow-left" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.9); border: none; border-radius: 50%; cursor: pointer; z-index: 10; transition: all 0.3s; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
        <svg style="display: block;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <button onclick="bannerNext()" class="banner-arrow banner-arrow-right" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: rgba(255,255,255,0.9); border: none; border-radius: 50%; cursor: pointer; z-index: 10; transition: all 0.3s; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
        <svg style="display: block;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    <!-- Slide Indicators -->
    <div class="banner-dots" style="position: absolute; bottom: 15px; left: 50%; transform: translateX(-50%); display: flex; gap: 8px; z-index: 10;">
        <span class="banner-dot" onclick="bannerGoTo(0)" style="cursor: pointer; border-radius: 50%; background: white; transition: all 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.3); opacity: 1;"></span>
        <span class="banner-dot" onclick="bannerGoTo(1)" style="cursor: pointer; border-radius: 50%; background: white; transition: all 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.3); opacity: 0.5;"></span>
        <span class="banner-dot" onclick="bannerGoTo(2)" style="cursor: pointer; border-radius: 50%; background: white; transition: all 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.3); opacity: 0.5;"></span>
        <span class="banner-dot" onclick="bannerGoTo(3)" style="cursor: pointer; border-radius: 50%; background: white; transition: all 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.3); opacity: 0.5;"></span>
        <span class="banner-dot" onclick="bannerGoTo(4)" style="cursor: pointer; border-radius: 50%; background: white; transition: all 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.3); opacity: 0.5;"></span>
        <span class="banner-dot" onclick="bannerGoTo(5)" style="cursor: pointer; border-radius: 50%; background: white; transition: all 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.3); opacity: 0.5;"></span>
        <span class="banner-dot" onclick="bannerGoTo(6)" style="cursor: pointer; border-radius: 50%; background: white; transition: all 0.3s; box-shadow: 0 2px 5px rgba(0,0,0,0.3); opacity: 0.5;"></span>
    </div>
</section>

<!-- ============================================================ -->
<!-- RESPONSIVE BANNER CSS - ADAPTS TO ALL SCREEN SIZES          -->
<!-- ============================================================ -->
<style>
    /* Base banner styles */
    .banner-section {
        height: 220px; /* Default mobile */
    }

    .banner-slide {
        position: absolute !important;
        width: 100% !important;
        height: 100% !important;
        opacity: 0 !important;
        transition: opacity 1s ease-in-out !important;
    }

    .banner-slide.active {
        opacity: 1 !important;
        z-index: 1 !important;
    }

    /* Mobile: Show complete image with contain */
    .banner-img {
        width: 100%;
        height: 100%;
        object-fit: contain; /* Shows complete image on mobile */
        object-position: center;
        display: block;
    }

    /* Arrow buttons - mobile size */
    .banner-arrow {
        width: 35px;
        height: 35px;
        padding: 8px;
        color: #333;
    }

    .banner-arrow svg {
        width: 20px;
        height: 20px;
    }

    .banner-arrow:hover {
        background: white !important;
        transform: translateY(-50%) scale(1.1) !important;
    }

    /* Dots - mobile size */
    .banner-dot {
        width: 8px;
        height: 8px;
    }

    .banner-dot:hover {
        opacity: 1 !important;
        transform: scale(1.2);
    }

    /* ============================================ */
    /* TABLET: 640px and above                     */
    /* ============================================ */
    @media (min-width: 640px) {
        .banner-section {
            height: 320px; /* Taller on tablet */
        }

        .banner-img {
            object-fit: cover; /* Fill space on tablet */
        }

        .banner-arrow {
            width: 45px;
            height: 45px;
            padding: 10px;
        }

        .banner-arrow svg {
            width: 24px;
            height: 24px;
        }

        .banner-arrow-left {
            left: 15px;
        }

        .banner-arrow-right {
            right: 15px;
        }

        .banner-dot {
            width: 10px;
            height: 10px;
        }
    }

    /* ============================================ */
    /* DESKTOP: 1024px and above                   */
    /* ============================================ */
    @media (min-width: 1024px) {
        .banner-section {
            height: 450px; /* Full height on desktop */
        }

        .banner-img {
            object-fit: cover; /* Fill space beautifully */
        }

        .banner-arrow {
            width: 50px;
            height: 50px;
            padding: 12px;
        }

        .banner-arrow svg {
            width: 26px;
            height: 26px;
        }

        .banner-arrow-left {
            left: 20px;
        }

        .banner-arrow-right {
            right: 20px;
        }

        .banner-dot {
            width: 12px;
            height: 12px;
        }
    }

    /* ============================================ */
    /* LARGE DESKTOP: 1440px and above             */
    /* ============================================ */
    @media (min-width: 1440px) {
        .banner-section {
            height: 550px; /* Even taller for large screens */
        }
    }
</style>

<!-- ============================================================ -->
<!-- BANNER JAVASCRIPT - SELF-CONTAINED                          -->
<!-- ============================================================ -->
<script>
(function() {
    let bannerCurrentSlide = 0;
    const bannerSlides = document.querySelectorAll('.banner-slide');
    const bannerDots = document.querySelectorAll('.banner-dot');
    let bannerAutoInterval;

    function bannerShow(index) {
        // Hide all slides
        bannerSlides.forEach(slide => {
            slide.classList.remove('active');
            slide.style.opacity = '0';
        });

        // Reset all dots
        bannerDots.forEach(dot => {
            dot.style.opacity = '0.5';
        });

        // Update index
        bannerCurrentSlide = index;
        if (bannerCurrentSlide >= bannerSlides.length) bannerCurrentSlide = 0;
        if (bannerCurrentSlide < 0) bannerCurrentSlide = bannerSlides.length - 1;

        // Show current slide
        bannerSlides[bannerCurrentSlide].classList.add('active');
        bannerSlides[bannerCurrentSlide].style.opacity = '1';
        bannerDots[bannerCurrentSlide].style.opacity = '1';
    }

    window.bannerNext = function() {
        bannerShow(bannerCurrentSlide + 1);
        bannerResetAuto();
    };

    window.bannerPrev = function() {
        bannerShow(bannerCurrentSlide - 1);
        bannerResetAuto();
    };

    window.bannerGoTo = function(index) {
        bannerShow(index);
        bannerResetAuto();
    };

    function bannerStartAuto() {
        bannerAutoInterval = setInterval(() => {
            bannerShow(bannerCurrentSlide + 1);
        }, 5000);
    }

    function bannerResetAuto() {
        clearInterval(bannerAutoInterval);
        bannerStartAuto();
    }

    // Initialize
    bannerShow(0);
    bannerStartAuto();

    console.log('✓ Responsive banner initialized - ' + bannerSlides.length + ' slides');
})();
</script>



<!-- Certification Ribbon - Mobile Responsive -->
<section class="bg-white border-y-2 border-gray-200 py-6 sm:py-8 overflow-hidden">
    <div class="container mx-auto px-4 mb-3 sm:mb-4">
        <h3 class="text-center text-gray-700 font-bold text-sm sm:text-base md:text-lg">
            CERTIFIED & COMPLIANT WITH INTERNATIONAL STANDARDS
        </h3>
    </div>
    <div class="relative flex overflow-hidden">
        <div class="flex animate-scroll">
            <!-- First set of logos -->
            <div class="flex items-center space-x-8 sm:space-x-12 md:space-x-16 px-4 sm:px-8">
                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-800">ISO</div>
                            <div class="text-xs text-gray-600">9001:2008</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">ISO Certified</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-green-700">ISI</div>
                            <div class="text-xs text-gray-600">CERTIFIED</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">ISI Certified</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-red-700">ASTM</div>
                            <div class="text-xs text-gray-600">STANDARD</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">ASTM Grade</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-purple-700">IBR</div>
                            <div class="text-xs text-gray-600">APPROVED</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">IBR Approved</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-orange-700">JIS</div>
                            <div class="text-xs text-gray-600">STANDARD</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">JIS Standard</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-900">DIN</div>
                            <div class="text-xs text-gray-600">STANDARD</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">DIN Standard</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-teal-700">ASME</div>
                            <div class="text-xs text-gray-600">STANDARD</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">ASME Standard</span>
                </div>
            </div>

            <!-- Duplicate set for seamless loop -->
            <div class="flex items-center space-x-8 sm:space-x-12 md:space-x-16 px-4 sm:px-8">
                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-800">ISO</div>
                            <div class="text-xs text-gray-600">9001:2008</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">ISO Certified</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-green-700">ISI</div>
                            <div class="text-xs text-gray-600">CERTIFIED</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">ISI Certified</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-red-700">ASTM</div>
                            <div class="text-xs text-gray-600">STANDARD</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">ASTM Grade</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-purple-700">IBR</div>
                            <div class="text-xs text-gray-600">APPROVED</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">IBR Approved</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-orange-700">JIS</div>
                            <div class="text-xs text-gray-600">STANDARD</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">JIS Standard</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-900">DIN</div>
                            <div class="text-xs text-gray-600">STANDARD</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">DIN Standard</span>
                </div>

                <div class="flex flex-col items-center min-w-[100px] sm:min-w-[120px] md:min-w-[140px]">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex items-center justify-center bg-gray-50 rounded-lg p-3 sm:p-4 border-2 border-gray-200">
                        <div class="text-center">
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-teal-700">ASME</div>
                            <div class="text-xs text-gray-600">STANDARD</div>
                        </div>
                    </div>
                    <span class="text-xs text-gray-600 mt-2 font-semibold">ASME Standard</span>
                </div>
            </div>
        </div>
    </div>
</section>
       
<!-- Product Grid Section - Mobile Responsive with Navigation -->
<section class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10 sm:mb-12 md:mb-16">
            <div class="inline-block bg-red-100 text-secondary px-3 py-1 sm:px-4 rounded-full text-xs sm:text-sm font-bold mb-3 sm:mb-4">
                OUR SPECIALIZATION
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-primary mb-3 sm:mb-4 px-4">Complete Product Range</h2>
            <p class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto px-4">
                From valves to fittings, we provide everything you need for your industrial requirements
            </p>
        </div>

        <!-- Responsive Grid: 2 cols on mobile, 3 on small tablets, 5 on tablets, 10 on desktop -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-10 gap-3 sm:gap-4 max-w-full mx-auto">

            <!-- Product items with responsive styling and click navigation -->

            <!-- 1. Gate Valve -->
            <div onclick="viewProduct('gate-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Gate-Valve-1.png" alt="Gate Valve" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Gate Valve
                </div>
            </div>

            <!-- 2. Globe Valve -->
            <div onclick="viewProduct('globe-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Globe-Valve-1.png" alt="Globe Valve" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Globe Valve
                </div>
            </div>

            <!-- 3. Non Return Valve -->
            <div onclick="viewProduct('non-return-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Non-return-Valve-1.png" alt="Non Return Valve" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Non Return Valve
                </div>
            </div>

            <!-- 4. Ball Valve -->
            <div onclick="viewProduct('ball-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Ball-Valve.png" alt="Ball Valve" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Ball Valve
                </div>
            </div>

            <!-- 5. Butterfly Valve -->
            <div onclick="viewProduct('butterfly-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Butterfly-Valve.png" alt="Butterfly Valve" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Butterfly Valve
                </div>
            </div>

            <!-- 6. Knife Edge Gate Valve -->
            <div onclick="viewProduct('knife-edge-gate-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/knife-Edge-gate-valve.png" alt="Knife Edge Gate Valve" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Knife Edge Gate
                </div>
            </div>

            <!-- 7. Piston Valve -->
            <div onclick="viewProduct('piston-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/piston-valve.png" alt="Piston Valve" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Piston Valve
                </div>
            </div>

            <!-- 8. Plug Valve -->
            <div onclick="viewProduct('plug-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Plug-Valve.png" alt="Plug Valve" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Plug Valve
                </div>
            </div>

            <!-- 9. Diaphragm Valve -->
            <div onclick="viewProduct('diaphragm-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Diaphagram-valves.jpg" alt="Diaphragm Valve" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Diaphragm Valve
                </div>
            </div>

            <!-- 10. Strainer -->
            <div onclick="viewProduct('strainer')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Strainers.png" alt="Strainer" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Strainers
                </div>
            </div>

            <!-- 11. Safety Valves -->
            <div onclick="viewProduct('safety-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Safety-Valves.png" alt="Safety Valves" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Safety Valves
                </div>
            </div>

            <!-- 12. PRV -->
            <div onclick="viewProduct('prv')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/PRV.png" alt="PRV" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    PRV
                </div>
            </div>

            <!-- 13. Air Valves -->
            <div onclick="viewProduct('air-valve')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Air-alves.png" alt="Air Valves" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Air Valves
                </div>
            </div>

            <!-- 14. Flanges -->
            <div onclick="viewProduct('flanges')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Flanges.png" alt="Flanges" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Flanges
                </div>
            </div>

            <!-- 15. MS Pipes Fittings -->
            <div onclick="viewProduct('ms-pipes')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/MS-pipes-Fittings.png" alt="MS Pipes Fittings" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    MS Pipes
                </div>
            </div>

            <!-- 16. IBR Pipes Fittings -->
            <div onclick="viewProduct('ibr-pipes')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/IBR-Pipes-Fittings.png" alt="IBR Pipes Fittings" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    IBR Pipes
                </div>
            </div>

            <!-- 17. GI Pipes Fittings -->
            <div onclick="viewProduct('gi-pipes')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/GI-pipes-Fittings.png" alt="GI Pipes Fittings" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    GI Pipes
                </div>
            </div>

            <!-- 18. SS Pipes Fittings -->
            <div onclick="viewProduct('ss-pipes')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/SS-Pipes-Fittings.png" alt="SS Pipes Fittings" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    SS Pipes
                </div>
            </div>

            <!-- 19. HDPE Pipes -->
            <div onclick="viewProduct('hdpe-pipes')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/HDPE-pipes-and-fittings.png" alt="HDPE Pipes" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    HDPE Pipes
                </div>
            </div>

            <!-- 20. Seamless Pipes -->
            <div onclick="viewProduct('seamless-pipes')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/SEAMLESS-PIPES-11.png" alt="Seamless Pipes" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Seamless Pipes
                </div>
            </div>

            <!-- 21. ERW Pipes -->
            <div onclick="viewProduct('erw-pipes')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/ERW-PIPES-11-1.png" alt="ERW Pipes" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    ERW Pipes
                </div>
            </div>

            <!-- 22. Brass Fittings -->
            <div onclick="viewProduct('brass-fittings')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Bras-Pipe-Fittings.png" alt="Brass Fittings" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Brass Fittings
                </div>
            </div>

            <!-- 23. Hydraulic Fittings -->
            <div onclick="viewProduct('hydraulic-fittings')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Hydraulic-Pipes-Fittings.png" alt="Hydraulic Fittings" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Hydraulic
                </div>
            </div>

            <!-- 24. Pneumatic Fitting -->
            <div onclick="viewProduct('pneumatic-fittings')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Pneumatic-pipe-Fitting.png" alt="Pneumatic Fitting" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Pneumatic
                </div>
            </div>

            <!-- 25. Dairy Valves -->
            <div onclick="viewProduct('dairy-valves')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Dairy-Valves-Fittings.png" alt="Dairy Valves" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Dairy Valves
                </div>
            </div>

            <!-- 26. Boiler Mounting -->
            <div onclick="viewProduct('boiler-mounting')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Boiler-Mounting.png" alt="Boiler Mounting" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Boiler Mounting
                </div>
            </div>

            <!-- 27. Boiler Tubes -->
            <div onclick="viewProduct('boiler-tubes')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Boiler-Tubes.png" alt="Boiler Tubes" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Boiler Tubes
                </div>
            </div>

            <!-- 28. Pressure Gauges -->
            <div onclick="viewProduct('pressure-gauges')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Temprature-Pressure-Gaugaes.png" alt="Pressure Gauges" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Gauges
                </div>
            </div>

            <!-- 29. Fire Fighting -->
            <div onclick="viewProduct('fire-fighting')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Fire-Fighting-Accsesories.png" alt="Fire Fighting" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Fire Fighting
                </div>
            </div>

            <!-- 30. Hose Clips -->
            <div onclick="viewProduct('hose-clips')" class="group bg-gray-50 rounded-lg sm:rounded-xl overflow-hidden hover:shadow-2xl transition-all duration-300 border-2 border-red-200 hover:border-secondary cursor-pointer transform hover:scale-105">
                <div class="aspect-square bg-white flex items-center justify-center p-2 group-hover:bg-gray-50 transition">
                    <img src="./assets/images/Hose-Clips.png" alt="Hose Clips" class="w-full h-full object-contain">
                </div>
                <div class="bg-secondary text-white text-center py-1.5 sm:py-2 text-[10px] sm:text-xs font-bold">
                    Hose Clips
                </div>
            </div>

        </div>

        <!-- View All Products Button -->
        <div class="text-center mt-8 sm:mt-10 md:mt-12">
            <a href="products.php"
                class="inline-flex items-center bg-secondary hover:bg-red-700 text-white font-bold px-6 sm:px-8 md:px-10 py-3 sm:py-4 rounded-lg transition transform hover:scale-105 shadow-lg text-sm sm:text-base md:text-lg">
                View All Products
                <svg class="w-5 h-5 sm:w-6 sm:h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- JavaScript for Product Navigation -->
<script>
/**
 * Navigate to product details page
 * @param {string} productSlug - The product identifier (URL-friendly name)
 */
function viewProduct(productSlug) {
    // Navigate to product details page with product ID/slug
    window.location.href = 'product_details.php?product=' + productSlug;
}
</script>



<!-- Why Choose Us - Mobile Responsive -->
<section class="py-12 sm:py-16 md:py-20" style="background: linear-gradient(to bottom, #f9fafb 0%, #f3f4f6 100%);">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8 sm:mb-10 md:mb-12">
            <div class="inline-block bg-secondary text-white px-4 sm:px-6 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-semibold mb-3 sm:mb-4">
                WHY CHOOSE US
            </div>
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-2 sm:mb-3 px-4">Your Trusted Partner</h2>
            <p class="text-gray-600 text-sm sm:text-base md:text-lg px-4">Quality, reliability, and service excellence since 1969</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 max-w-7xl mx-auto">
            <!-- Card 1: ISO Certified -->
            <div class="bg-white rounded-xl sm:rounded-2xl p-6 sm:p-8 transition-all duration-300" 
                 style="box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15); border: 2px solid #e5e7eb;">
                
                <div class="w-16 h-16 sm:w-20 sm:h-20 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-md">
                    <svg class="w-8 h-8 sm:w-10 sm:h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                
                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3 text-center">ISO Certified</h3>
                <p class="text-gray-600 text-center text-xs sm:text-sm leading-relaxed">ISO 9001:2008 & ISI certified quality products</p>
            </div>

            <!-- Card 2: 55+ Years -->
            <div class="bg-white rounded-xl sm:rounded-2xl p-6 sm:p-8 transition-all duration-300" 
                 style="box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15); border: 2px solid #e5e7eb;">
                
                <div class="w-16 h-16 sm:w-20 sm:h-20 bg-orange-50 rounded-xl flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-md">
                    <svg class="w-8 h-8 sm:w-10 sm:h-10 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                
                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3 text-center">55+ Years</h3>
                <p class="text-gray-600 text-center text-xs sm:text-sm leading-relaxed">Established in 1969 with proven track record</p>
            </div>

            <!-- Card 3: Expert Team -->
            <div class="bg-white rounded-xl sm:rounded-2xl p-6 sm:p-8 transition-all duration-300" 
                 style="box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15); border: 2px solid #e5e7eb;">
                
                <div class="w-16 h-16 sm:w-20 sm:h-20 bg-green-50 rounded-xl flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-md">
                    <svg class="w-8 h-8 sm:w-10 sm:h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                
                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3 text-center">Expert Team</h3>
                <p class="text-gray-600 text-center text-xs sm:text-sm leading-relaxed">Experienced professionals to guide you</p>
            </div>

            <!-- Card 4: Quality Products -->
            <div class="bg-white rounded-xl sm:rounded-2xl p-6 sm:p-8 transition-all duration-300" 
                 style="box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15); border: 2px solid #e5e7eb;">
                
                <div class="w-16 h-16 sm:w-20 sm:h-20 bg-red-50 rounded-xl flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-md">
                    <svg class="w-8 h-8 sm:w-10 sm:h-10 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                        </path>
                    </svg>
                </div>
                
                <h3 class="text-lg sm:text-xl font-bold text-gray-900 mb-2 sm:mb-3 text-center">Quality Products</h3>
                <p class="text-gray-600 text-center text-xs sm:text-sm leading-relaxed">ASTM, IBR, JIS grade materials</p>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="parallax h-[300px] md:h-[450px] bg-center"
        style="background-image:url('https://guptamachinery.com/wp-content/uploads/2024/10/PBi-Since-1971-2048x767.jpg')">
    </div>

    <div class="parallax h-[300px] md:h-[450px] bg-center"
        style="background-image:url('https://guptamachinery.com/wp-content/uploads/2024/12/PIPES-BANNER-2048x767.png')">
    </div>

    <div class="parallax h-[300px] md:h-[450px] bg-center"
        style="background-image:url('https://guptamachinery.com/wp-content/uploads/2024/12/Fire-Fighting-2048x767.png')">
    </div>
        <div class="parallax h-[300px] md:h-[450px] bg-center"
        style="background-image:url('https://guptamachinery.com/wp-content/uploads/2024/10/Spac-2048x767.jpg')">
    </div>

        </div>
        <div class="parallax h-[300px] md:h-[450px] bg-center"
        style="background-image:url('https://guptamachinery.com/wp-content/uploads/2024/12/GOKUL-BANNER-2048x771.jpg')">
    </div>
</section>

<style>
.parallax {
    background-attachment: fixed;
    background-size: cover;
}
</style>

<!-- CTA Section - Mobile Responsive -->
<section class="bg-gradient-to-r from-primary via-blue-900 to-blue-800 text-white py-12 sm:py-16 md:py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\"
            height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\"
            fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.4\"%3E%3Cpath d=\"M36
            34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6
            4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 sm:mb-6 px-4">Ready to Get Started?</h2>
        <p class="text-base sm:text-lg md:text-xl mb-6 sm:mb-8 md:mb-10 text-blue-100 max-w-2xl mx-auto px-4">Contact us today for all your industrial valve and
            pipe fitting needs. Get expert consultation and competitive quotes.</p>
        <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4 px-4">
            <a href="tel:+917122345678"
                class="bg-secondary hover:bg-red-700 text-white font-bold px-6 sm:px-8 md:px-10 py-3 sm:py-4 rounded-lg transition transform hover:scale-105 shadow-2xl inline-flex items-center justify-center">
                <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                    </path>
                </svg>
                Call Now
            </a>
            <button onclick="openQuoteForm()"
                class="bg-white hover:bg-gray-100 text-primary font-bold px-6 sm:px-8 md:px-10 py-3 sm:py-4 rounded-lg transition transform hover:scale-105 shadow-2xl inline-flex items-center justify-center">
                <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
                Get Quote
            </button>
        </div>
    </div>
</section>

<?php include 'assets/include/footer.php'; ?>




<script src="./assets/js/main.js"></script>

</body>

</html>
