<!-- Bottom Navigation (visible on mobile and desktop) -->
<div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 z-40 overflow-hidden">
    <div class="flex py-2 px-2 gap-3 bottom-slider scrollbar-hide -mx-2 md:mx-0 md:overflow-visible md:whitespace-normal md:gap-0 md:justify-around">
        <a href="{{ route('home') }}" class="flex flex-col items-center py-2 px-3 text-gray-600 hover:text-orange-600 transition-colors bottom-item md:min-w-0 md:flex-shrink">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="text-xs">Home</span>
        </a>
        
        <a href="{{ route('products') }}" class="flex flex-col items-center py-2 px-3 text-gray-600 hover:text-orange-600 transition-colors bottom-item md:min-w-0 md:flex-shrink">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
            </svg>
            <span class="text-xs">Products</span>
        </a>
        
        <a href="{{ route('games') }}" class="flex flex-col items-center py-2 px-3 text-gray-600 hover:text-orange-600 transition-colors bottom-item md:min-w-0 md:flex-shrink">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2m-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
            </svg>
            <span class="text-xs">Games</span>
        </a>
        
        <a href="{{ route('alternatives') }}" class="flex flex-col items-center py-2 px-3 text-gray-600 hover:text-orange-600 transition-colors bottom-item md:min-w-0 md:flex-shrink">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
            </svg>
            <span class="text-xs">Alternatives</span>
        </a>
        
        <a href="{{ route('pledge') }}" class="flex flex-col items-center py-2 px-3 text-gray-600 hover:text-orange-600 transition-colors bottom-item md:min-w-0 md:flex-shrink">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
            </svg>
            <span class="text-xs">Pledge</span>
        </a>
        
        <a href="{{ route('stories.create') }}" class="flex flex-col items-center py-2 px-3 text-gray-600 hover:text-orange-600 transition-colors bottom-item md:min-w-0 md:flex-shrink">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span class="text-xs">Add Story</span>
        </a>
        
        <button onclick="toggleCart()" class="flex flex-col items-center py-2 px-3 text-gray-600 hover:text-orange-600 transition-colors bottom-item md:min-w-0 md:flex-shrink">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
            </svg>
            <span class="text-xs">Cart</span>
        </button>
    </div>
</div>
