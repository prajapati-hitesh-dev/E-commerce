<!-- Header -->
<header class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-r from-orange-400 to-green-600 text-white shadow-lg">
    <!-- Main Navigation -->
    <div class="py-2 md:py-4">
        <div class="max-w-7xl mx-auto px-2 md:px-4">
            <div class="flex items-center justify-between gap-2 md:gap-4">
                <!-- Logo -->
                <div onclick="window.location.href = '{{ route('home') }}'" class="flex items-center cursor-pointer hover:scale-105 transition-transform">
                    <span class="text-xl md:text-2xl mr-1 md:mr-2">🌿</span>
                    <span class="text-lg md:text-2xl font-bold">
                        <span class="hidden sm:inline">Local First</span>
                        <span class="sm:hidden">Local</span>
                    </span>
                </div>

                <!-- Search Bar - Desktop Only -->
                <div class="hidden lg:flex flex-1 max-w-xl mx-8">
                    <div class="relative w-full">
                        <input 
                            type="text" 
                            placeholder="Search products..." 
                            class="w-full px-4 py-2 pl-10 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-white/50"
                        />
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Navigation Icons - Mobile Optimized -->
                <div class="flex items-center gap-1 md:gap-4">
                    <!-- Search - Mobile/Tablet -->
                    <button 
                        class="lg:hidden p-2 hover:bg-white/20 rounded-full transition-colors"
                        onclick="toggleMobileSearch()"
                    >
                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>

                    <!-- Spin Wheel - Responsive -->
                    <button 
                        class="flex items-center gap-1 md:gap-2 px-2 md:px-3 py-1 md:py-2 bg-yellow-500 hover:bg-yellow-600 rounded-full text-black font-semibold transition-colors text-xs md:text-sm"
                        onclick="showSpinWheel()"
                    >
                        <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                        <span class="hidden sm:inline">Win</span>
                        <span class="sm:hidden">🎁</span>
                    </button>

                    <!-- Alternatives - Hide on small mobile -->
                    <a 
                        href="#alternatives"
                        class="hidden md:flex items-center gap-2 hover:bg-white/20 px-3 py-2 rounded-lg transition-colors"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                        <span>Alternatives</span>
                    </a>

                    <!-- Cart -->
                    <button 
                        class="relative p-2 hover:bg-white/20 rounded-full transition-colors"
                        onclick="toggleCart()"
                    >
                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                        </svg>
                        <span id="cart-count" class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 md:w-5 md:h-5 flex items-center justify-center">0</span>
                    </button>

                    <!-- User Account - Hide text on mobile -->
                    <button 
                        class="flex items-center gap-1 md:gap-2 hover:bg-white/20 px-2 md:px-3 py-2 rounded-lg transition-colors"
                        onclick="showAuthModal()"
                    >
                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="hidden md:inline">Account</span>
                    </button>
                </div>
            </div>

            <!-- Mobile Search -->
            <div id="mobile-search" class="lg:hidden mt-3 hidden">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Search products..." 
                        class="w-full px-4 py-2 pl-10 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-white/50"
                    />
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Categories Bar - Mobile Optimized -->
    <div class="bg-white/20 py-2 overflow-x-auto scrollbar-hide">
        <div class="max-w-7xl mx-auto px-2 md:px-4">
            <div class="flex gap-3 md:gap-6 whitespace-nowrap">
                <a href="{{ route('products') }}" class="px-3 md:px-4 py-1 md:py-2 rounded-full hover:bg-white/20 transition-colors text-xs md:text-sm flex-shrink-0">All Products</a>
                <a href="{{ route('products', ['category' => 'textiles']) }}" class="px-3 md:px-4 py-1 md:py-2 rounded-full hover:bg-white/20 transition-colors text-xs md:text-sm flex-shrink-0">
                    <span class="md:hidden">Textiles</span>
                    <span class="hidden md:inline">Textiles & Fashion</span>
                </a>
                <a href="{{ route('products', ['category' => 'food']) }}" class="px-3 md:px-4 py-1 md:py-2 rounded-full hover:bg-white/20 transition-colors text-xs md:text-sm flex-shrink-0">
                    <span class="md:hidden">Food</span>
                    <span class="hidden md:inline">Food & Beverages</span>
                </a>
                <a href="{{ route('products', ['category' => 'handicrafts']) }}" class="px-3 md:px-4 py-1 md:py-2 rounded-full hover:bg-white/20 transition-colors text-xs md:text-sm flex-shrink-0">Handicrafts</a>
                <a href="{{ route('products', ['category' => 'cosmetics']) }}" class="px-3 md:px-4 py-1 md:py-2 rounded-full hover:bg-white/20 transition-colors text-xs md:text-sm flex-shrink-0">
                    <span class="md:hidden">Beauty</span>
                    <span class="hidden md:inline">Beauty & Cosmetics</span>
                </a>
                <a href="{{ route('products', ['category' => 'electronics']) }}" class="px-3 md:px-4 py-1 md:py-2 rounded-full hover:bg-white/20 transition-colors text-xs md:text-sm flex-shrink-0">Electronics</a>
                <a href="{{ route('products', ['category' => 'home']) }}" class="px-3 md:px-4 py-1 md:py-2 rounded-full hover:bg-white/20 transition-colors text-xs md:text-sm flex-shrink-0">
                    <span class="md:hidden">Home</span>
                    <span class="hidden md:inline">Home & Decor</span>
                </a>
            </div>
        </div>
    </div>
</header>
