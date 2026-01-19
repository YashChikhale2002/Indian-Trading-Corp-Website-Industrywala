<?php
/**
 * Footer Configuration - FIXED NAVIGATION
 * Location: assets/include/footer_config.php
 * Update this file to change footer content across entire website
 */

// Company Information
define('COMPANY_NAME', 'Indian Traders Corp');
define('COMPANY_SHORT_NAME', 'ITC');
define('COMPANY_TAGLINE', 'Since 1969');
define('COMPANY_DESCRIPTION', 'Authorized dealers for industrial valves, pipes, and fittings in Central India.');
define('COMPANY_GST', '27AABFG1298F1ZH');

// Contact Information
define('CONTACT_ADDRESS', 'Opposite Daga Hospital, Gandhibagh, Nagpur, Maharashtra - 440002');
define('CONTACT_EMAIL', 'info@indiantraderscorp.com');
define('CONTACT_PHONE', '+917122345678');
define('CONTACT_PHONE_DISPLAY', '+91 712 234 5678');

// Business Hours
define('BUSINESS_HOURS_WEEKDAY', 'Monday - Saturday: 10:30 AM - 6:00 PM');
define('BUSINESS_HOURS_WEEKEND', 'Sunday: Closed');

// Quick Links - Simple relative paths (all pages are in root directory)
$footer_quick_links = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'About Us', 'url' => 'about.php'],
    ['label' => 'Products', 'url' => 'products.php'],
    ['label' => 'Contact', 'url' => 'contact.php'],
];

// Product Links - FIXED to match actual section IDs in products.php
$footer_product_links = [
    ['label' => 'Industrial Valves', 'url' => 'products.php#valves'],
    ['label' => 'Pipes & Fittings', 'url' => 'products.php#pipes'],
    ['label' => 'Accessories', 'url' => 'products.php#accessories'],
    ['label' => 'Flanges', 'url' => 'products.php#pipes'], // Flanges are in pipes section
];

// Social Media Links (Optional - uncomment and add URLs if needed)
$footer_social_links = [
    // ['platform' => 'Facebook', 'url' => 'https://facebook.com/yourpage', 'icon' => 'facebook'],
    // ['platform' => 'LinkedIn', 'url' => 'https://linkedin.com/company/yourcompany', 'icon' => 'linkedin'],
    // ['platform' => 'Instagram', 'url' => 'https://instagram.com/yourhandle', 'icon' => 'instagram'],
]
?>
