<?php
/**
 * Header Component
 * Navigation bar with logo, menu items, and Get Quote button
 */
?>

<!-- Header Section -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center space-x-3">
                <img src="./assets/images/ITC LOGO.png" alt="Indian Traders Corp Logo" class="h-12 w-12">
                <div>
                    <h1 class="text-xl font-bold text-primary">Indian Traders Corp</h1>
                    <p class="text-xs text-gray-600">Since 1969</p>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="text-gray-700 hover:text-secondary font-semibold transition">Home</a>
                <a href="about.php" class="text-gray-700 hover:text-secondary font-semibold transition">About</a>
                <a href="products.php" class="text-gray-700 hover:text-secondary font-semibold transition">Products</a>
                <a href="contact.php" class="text-gray-700 hover:text-secondary font-semibold transition">Contact</a>
                <!-- Get Quote Button - Opens Modal -->
                <button onclick="openQuoteModal()" class="bg-gradient-to-r from-secondary to-red-700 text-white px-6 py-2 rounded-lg font-bold hover:from-red-700 hover:to-secondary transition-all transform hover:scale-105 shadow-lg">
                    Get Quote
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden mt-4 space-y-4">
            <a href="index.php" class="block text-gray-700 hover:text-secondary font-semibold transition">Home</a>
            <a href="about.php" class="block text-gray-700 hover:text-secondary font-semibold transition">About</a>
            <a href="products.php" class="block text-gray-700 hover:text-secondary font-semibold transition">Products</a>
            <a href="contact.php" class="block text-gray-700 hover:text-secondary font-semibold transition">Contact</a>
            <!-- Mobile Get Quote Button - Opens Modal -->
            <button onclick="openQuoteModal()" class="w-full bg-gradient-to-r from-secondary to-red-700 text-white px-6 py-2 rounded-lg font-bold hover:from-red-700 hover:to-secondary transition-all shadow-lg">
                Get Quote
            </button>
        </div>
    </nav>
</header>

<script>
// Mobile menu toggle
document.getElementById('mobileMenuBtn')?.addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
});
</script>
