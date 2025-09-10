<header class="sticky top-0 z-50 bg-gradient-to-r from-orange-400 to-green-600 text-white shadow-lg">
    <!-- Main Navigation -->
    <div class="py-4">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between gap-4">
                <!-- Logo -->
                <div onclick="window.location.href = '{{ route('home') }}'" class="flex items-center cursor-pointer hover:scale-105 transition-transform">
                    <span class="text-2xl mr-2">🌿</span>
                    <span class="text-2xl font-bold">Local First</span>
                </div>

                <!-- Search Bar - Desktop -->
                <div class="hidden md:flex flex-1 max-w-xl mx-8">
                    @include('partials.search-bar')
                </div>

                <!-- Navigation Icons -->
                <div class="flex items-center gap-4">
                    <!-- Search - Mobile -->
                    <button 
                        class="md:hidden p-2 hover:bg-white/20 rounded-full transition-colors"
                        onclick="toggleMobileSearch()"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>

                    <!-- Spin Wheel -->
                    <button 
                        class="flex items-center gap-2 px-3 py-2 bg-yellow-500 hover:bg-yellow-600 rounded-full text-black font-semibold transition-colors"
                        onclick="showSpinWheel()"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                        </svg>
                        <span class="inline">Win Prize</span>
                    </button>

                    <!-- Alternatives -->
                    <a 
                        href="{{ route('alternatives') }}"
                        class="flex items-center gap-2 hover:bg-white/20 px-3 py-2 rounded-lg transition-colors"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                        <span class="inline">Alternatives</span>
                    </a>

                    <!-- Cart -->
                    <button 
                        class="relative p-2 hover:bg-white/20 rounded-full transition-colors"
                        onclick="toggleCart()"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                        </svg>
                        <span id="cart-count" class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                    </button>

                    <!-- User Account -->
                    <button 
                        class="flex items-center gap-2 hover:bg-white/20 px-3 py-2 rounded-lg transition-colors"
                        onclick="showAuthModal()"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="inline">Account</span>
                    </button>
                </div>
            </div>

            <!-- Mobile Search -->
            <div id="mobile-search" class="md:hidden mt-4 hidden">
                @include('partials.search-bar')
            </div>
        </div>
    </div>

    <!-- Categories Bar -->
    <div class="bg-white/20 py-2 overflow-x-auto">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex gap-6 whitespace-nowrap">
                <a href="{{ route('products') }}" class="px-4 py-2 rounded-full hover:bg-white/20 transition-colors text-sm">All Products</a>
                <a href="{{ route('products', ['category' => 'textiles']) }}" class="px-4 py-2 rounded-full hover:bg-white/20 transition-colors text-sm">Textiles & Fashion</a>
                <a href="{{ route('products', ['category' => 'food']) }}" class="px-4 py-2 rounded-full hover:bg-white/20 transition-colors text-sm">Food & Beverages</a>
                <a href="{{ route('products', ['category' => 'handicrafts']) }}" class="px-4 py-2 rounded-full hover:bg-white/20 transition-colors text-sm">Handicrafts</a>
                <a href="{{ route('products', ['category' => 'cosmetics']) }}" class="px-4 py-2 rounded-full hover:bg-white/20 transition-colors text-sm">Beauty & Cosmetics</a>
                <a href="{{ route('products', ['category' => 'electronics']) }}" class="px-4 py-2 rounded-full hover:bg-white/20 transition-colors text-sm">Electronics</a>
                <a href="{{ route('products', ['category' => 'home']) }}" class="px-4 py-2 rounded-full hover:bg-white/20 transition-colors text-sm">Home & Decor</a>
            </div>
        </div>
    </div>
</header>
