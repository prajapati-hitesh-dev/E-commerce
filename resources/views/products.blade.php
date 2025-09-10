@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">All Local Products</h1>
        <p class="text-xl text-gray-600">Discover authentic products from local artisans and businesses</p>
    </div>

    <!-- Filters & Controls -->
    <div class="flex flex-wrap items-center justify-between gap-4 mb-8 p-6 bg-white rounded-2xl shadow-lg">
        <div class="flex flex-wrap items-center gap-4">
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.207A1 1 0 013 6.5V4z"></path>
            </svg>
            <select
                name="category"
                class="px-4 py-2 border border-gray-300 rounded-full outline-none focus:ring-2 focus:ring-orange-500"
                onchange="filterByCategory(this.value)"
            >
                <option value="all">All Products</option>
                @foreach($categories as $category)
                <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
            <select
                name="sort"
                class="px-4 py-2 border border-gray-300 rounded-full outline-none focus:ring-2 focus:ring-orange-500"
                onchange="sortProducts(this.value)"
            >
                <option value="featured" {{ request('sort') == 'featured' ? 'selected' : '' }}>Featured</option>
                <option value="price-low" {{ request('sort') == 'price-low' ? 'selected' : '' }}>Price: Low to High</option>
                <option value="price-high" {{ request('sort') == 'price-high' ? 'selected' : '' }}>Price: High to Low</option>
                <option value="rating" {{ request('sort') == 'rating' ? 'selected' : '' }}>Highest Rated</option>
            </select>
        </div>
        <div class="flex items-center gap-2">
            <button
                onclick="setViewMode('grid')"
                class="p-2 rounded-lg transition-colors bg-orange-500 text-white"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
            </button>
            <button
                onclick="setViewMode('list')"
                class="p-2 rounded-lg transition-colors bg-gray-100 text-gray-600"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Products Grid -->
    <div id="products-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($products as $product)
        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 overflow-hidden">
            <div class="relative p-8 text-center bg-gradient-to-br from-gray-50 to-gray-100">
                <div class="text-6xl mb-4">{{ $product->image }}</div>
                <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                    {{ $product->badge }}
                </div>
                <button
                    onclick="showProductModal({{ $product->id }})"
                    class="absolute top-4 right-4 p-2 bg-white/80 hover:bg-white rounded-full transition-colors"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $product->name }}</h3>
                <p class="text-gray-600 mb-4">by {{ $product->vendor }}</p>
                <div class="flex items-center mb-4">
                    <div class="flex mr-2">
                        @for($i = 0; $i < 5; $i++)
                            @if($i < floor($product->rating))
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @else
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endif
                        @endfor
                    </div>
                    <span class="text-gray-600 text-sm">({{ $product->rating }})</span>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <span class="text-2xl font-bold text-orange-600">₹{{ number_format($product->price, 0) }}</span>
                        @if($product->original_price)
                        <span class="ml-2 text-gray-500 line-through">₹{{ number_format($product->original_price, 0) }}</span>
                        @endif
                    </div>
                </div>
                <div class="flex gap-2">
                    <button
                        onclick="addToCart({{ $product->id }})"
                        class="flex-1 py-3 bg-gradient-to-r from-orange-500 to-green-600 text-white rounded-full font-semibold hover:from-orange-600 hover:to-green-700 transition-all"
                    >
                        Add to Cart
                    </button>
                    <button class="p-3 border border-gray-300 rounded-full hover:bg-gray-50 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $products->links() }}
    </div>
</div>

<script>
function filterByCategory(category) {
    const url = new URL(window.location);
    if (category === 'all') {
        url.searchParams.delete('category');
    } else {
        url.searchParams.set('category', category);
    }
    window.location.href = url.toString();
}

function sortProducts(sort) {
    const url = new URL(window.location);
    url.searchParams.set('sort', sort);
    window.location.href = url.toString();
}

function setViewMode(mode) {
    // Implementation for view mode switching
    console.log('View mode:', mode);
}

function showProductModal(productId) {
    // Implementation for product modal
    console.log('Show product modal for:', productId);
}
</script>
@endsection
