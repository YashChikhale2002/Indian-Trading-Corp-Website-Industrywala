<?php
/**
 * Dynamic Footer
 * Location: assets/include/footer.php
 * Include this file in all pages: <?php include 'assets/include/footer.php'; ?>
 */

// Load footer configuration
$config_path = __DIR__ . '/footer_config.php';
if (file_exists($config_path)) {
    require_once $config_path;
}

// Default values if config not found
if (!defined('COMPANY_NAME')) {
    define('COMPANY_NAME', 'Indian Traders Corp');
    define('COMPANY_SHORT_NAME', 'ITC');
    define('COMPANY_TAGLINE', 'Since 1969');
    define('COMPANY_DESCRIPTION', 'Authorized dealers for industrial valves, pipes, and fittings in Central India.');
    define('COMPANY_GST', '27AABFG1298F1ZH');
    define('CONTACT_ADDRESS', 'Opposite Daga Hospital, Gandhibagh, Nagpur, Maharashtra - 440002');
    define('CONTACT_EMAIL', 'info@indiantraderscorp.com');
    define('CONTACT_PHONE', '+91 712 234 5678');
    define('CONTACT_PHONE_DISPLAY', '+91 712 234 5678');
    define('BUSINESS_HOURS_WEEKDAY', 'Monday - Saturday: 10:30 AM - 6:00 PM');
    define('BUSINESS_HOURS_WEEKEND', 'Sunday: Closed');

    $footer_quick_links = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'About Us', 'url' => 'about.php'],
        ['label' => 'Products', 'url' => 'products.php'],
        ['label' => 'Contact', 'url' => 'contact.php'],
    ];

    $footer_product_links = [
        ['label' => 'Industrial Valves', 'url' => 'products.php#valves'],
        ['label' => 'Pipes & Fittings', 'url' => 'products.php#pipes'],
        ['label' => 'Accessories', 'url' => 'products.php#accessories'],
        ['label' => 'Flanges', 'url' => 'products.php#flanges'],
    ];
}
?>

<!-- Footer - Dynamic and Mobile Responsive -->
<footer class="bg-gray-900 text-gray-300 py-8 sm:py-10 md:py-12 border-t-4 border-secondary">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 mb-6 sm:mb-8">

            <!-- Company Info -->
            <div>
                <div class="flex items-center space-x-2 mb-3 sm:mb-4">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-primary rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg sm:text-xl"><?php echo COMPANY_SHORT_NAME; ?></span>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-base sm:text-lg"><?php echo COMPANY_NAME; ?></h3>
                        <p class="text-xs text-secondary font-semibold"><?php echo COMPANY_TAGLINE; ?></p>
                    </div>
                </div>
                <p class="text-xs sm:text-sm mb-3 sm:mb-4">
                    <?php echo COMPANY_DESCRIPTION; ?>
                </p>
                <div class="text-xs sm:text-sm font-semibold text-yellow-400">
                    GST: <?php echo COMPANY_GST; ?>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-bold mb-3 sm:mb-4 text-base sm:text-lg">Quick Links</h4>
                <ul class="space-y-2 text-xs sm:text-sm">
                    <?php foreach ($footer_quick_links as $link): ?>
                    <li>
                        <a href="<?php echo htmlspecialchars($link['url']); ?>" 
                           class="hover:text-secondary transition duration-300">
                            <?php echo htmlspecialchars($link['label']); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Products -->
            <div>
                <h4 class="text-white font-bold mb-3 sm:mb-4 text-base sm:text-lg">Products</h4>
                <ul class="space-y-2 text-xs sm:text-sm">
                    <?php foreach ($footer_product_links as $link): ?>
                    <li>
                        <a href="<?php echo htmlspecialchars($link['url']); ?>" 
                           class="hover:text-secondary transition duration-300">
                            <?php echo htmlspecialchars($link['label']); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-white font-bold mb-3 sm:mb-4 text-base sm:text-lg">Contact Us</h4>
                <ul class="space-y-2 sm:space-y-3 text-xs sm:text-sm">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 mt-0.5 flex-shrink-0 text-secondary" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span><?php echo CONTACT_ADDRESS; ?></span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-secondary" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <a href="mailto:<?php echo CONTACT_EMAIL; ?>" 
                           class="hover:text-secondary transition duration-300">
                            <?php echo CONTACT_EMAIL; ?>
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-secondary" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <a href="tel:<?php echo str_replace(' ', '', CONTACT_PHONE); ?>" 
                           class="hover:text-secondary transition duration-300">
                            <?php echo CONTACT_PHONE_DISPLAY; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 pt-6 sm:pt-8">
            <div class="flex flex-col sm:flex-row justify-between items-center text-xs sm:text-sm space-y-3 sm:space-y-0">
                <p class="text-center sm:text-left">
                    &copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?>. All rights reserved.
                </p>
                <p class="text-gray-500 text-center sm:text-right">
                    <?php echo BUSINESS_HOURS_WEEKDAY; ?> | <?php echo BUSINESS_HOURS_WEEKEND; ?>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="backToTop" 
        class="fixed bottom-6 right-6 bg-secondary text-white p-3 rounded-full shadow-lg hover:bg-red-700 transition-all duration-300 opacity-0 invisible z-50"
        onclick="scrollToTop()"
        aria-label="Back to top">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
</button>

<script>
// Back to Top Button Functionality
(function() {
    const backToTopBtn = document.getElementById('backToTop');

    if (backToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.remove('opacity-0', 'invisible');
                backToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                backToTopBtn.classList.add('opacity-0', 'invisible');
                backToTopBtn.classList.remove('opacity-100', 'visible');
            }
        });
    }

    window.scrollToTop = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
})();
</script>
