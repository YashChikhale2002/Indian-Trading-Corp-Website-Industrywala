<div id="quoteModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div id="quoteModalContent" class="fixed inset-0 md:right-0 md:left-auto md:top-0 md:h-full md:w-[500px] w-full h-full bg-white shadow-2xl transform translate-x-full transition-transform duration-300 overflow-y-auto">
        
        <!-- Header -->
        <div class="bg-gradient-to-r from-primary to-blue-900 text-white p-6 sticky top-0 z-10">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-2xl font-bold">Request a Quote</h3>
                    <p class="text-blue-100 text-sm mt-1">Get competitive pricing for your needs</p>
                </div>
                <button onclick="closeQuoteForm()" class="text-white hover:text-gray-200 transition p-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Form -->
        <form id="quote-form" class="p-4 md:p-6 space-y-4" onsubmit="return handleFormSubmit(event)">
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Full Name *</label>
                <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Enter your name">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Email Address *</label>
                <input type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="your@email.com">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Phone Number *</label>
                <input type="tel" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="+91 XXXXX XXXXX">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Company Name</label>
                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Your company name">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Product Category *</label>
                <select required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
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

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Quantity Required</label>
                <input type="text" placeholder="e.g., 50 units" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            </div>

            <div>
                <label class="block text-gray-700 font-semibold mb-2">Requirements / Message *</label>
                <textarea required rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Please describe your requirements..."></textarea>
            </div>

            <button type="submit" class="w-full bg-secondary hover:bg-red-700 text-white font-bold py-4 rounded-lg transition transform hover:scale-105 shadow-lg">
                Submit Quote Request
            </button>

            <p class="text-xs text-gray-500 text-center">We'll respond to your quote request within 24 hours</p>
        </form>
    </div>
</div>