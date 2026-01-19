<header class="bg-white shadow-lg sticky top-0 z-50 border-b-4 border-secondary">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-2">
            <!-- Logo - COMPACT & BIGGER -->
            <div class="flex items-center space-x-2">
                <img src="./assets/images/ITC LOGO.png" 
                     alt="Indian Traders Corp Logo" 
                     class="h-16 w-auto object-contain">
                <h1 class="text-2xl font-bold text-primary leading-tight">Indian Traders Corp</h1>
            </div>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-8 items-center">
                <li><a href="index.html" class="text-gray-700 font-semibold hover:text-primary transition">Home</a></li>
                <li><a href="about.html" class="text-primary font-bold border-b-2 border-secondary pb-1 hover:text-secondary transition">About</a></li>
                <li><a href="products.html" class="text-gray-700 font-semibold hover:text-primary transition">Products</a></li>
                <li><a href="contact.html" class="text-gray-700 font-semibold hover:text-primary transition">Contact</a></li>
                <li>
                    <button onclick="openQuoteForm()" class="bg-secondary hover:bg-red-700 text-white font-bold px-6 py-2 rounded-lg transition transform hover:scale-105 shadow-md">
                        Get Quote
                    </button>
                </li>
            </ul>

            <!-- Mobile Menu Button -->
            <button onclick="toggleMobileMenu()" class="md:hidden text-gray-700 p-2 hover:bg-gray-100 rounded-lg transition">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-gray-200 mt-2 pt-2">
            <ul class="space-y-2">
                <li><a href="index.html" class="block py-3 text-gray-700 hover:bg-gray-50 px-3 rounded-lg">Home</a></li>
                <li><a href="about.html" class="block py-3 text-primary font-bold hover:bg-gray-50 px-3 rounded-lg">About</a></li>
                <li><a href="products.html" class="block py-3 text-gray-700 hover:bg-gray-50 px-3 rounded-lg">Products</a></li>
                <li><a href="contact.html" class="block py-3 text-gray-700 hover:bg-gray-50 px-3 rounded-lg">Contact</a></li>
                <li>
                    <button onclick="openQuoteForm()" class="w-full bg-secondary hover:bg-red-700 text-white font-bold px-6 py-3 rounded-lg transition shadow-md mt-2">
                        Get Quote
                    </button>
                </li>
            </ul>
        </div>
    </div>
</header>