@extends('layouts.app')

@section('content')
<div>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r mt-20 from-orange-400 via-red-400 to-green-600 text-white">
        <div class="max-w-7xl mx-auto px-4 py-20 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Support Local,
                <br />
                <span class="text-yellow-300">Think Global</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto leading-relaxed">
                Discover amazing local products, find alternatives to foreign goods, and make a positive impact on your community and environment.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a
                    href="{{ route('products') }}"
                    class="flex items-center gap-3 px-8 py-4 bg-white text-orange-600 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                    </svg>
                    Explore Local Products
                </a>
                <a
                    href="{{ route('alternatives') }}"
                    class="flex items-center gap-3 px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold text-lg hover:bg-white hover:text-orange-600 transition-all transform hover:scale-105"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Find Alternatives
                </a>
                <a
                    href="{{ route('pledge') }}"
                    class="flex items-center gap-3 px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-semibold text-lg hover:bg-white hover:text-green-600 transition-all transform hover:scale-105"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                    Take the Pledge
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Choose Local First?</h2>
                <p class="text-xl text-gray-600">Join the movement towards economic self-reliance and environmental sustainability</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Support Local Business</h3>
                    <p class="text-gray-600 leading-relaxed">Every purchase directly supports local artisans, small businesses, and entrepreneurs in your community.</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Reduce Carbon Footprint</h3>
                    <p class="text-gray-600 leading-relaxed">Local products mean shorter transportation distances, resulting in significantly lower environmental impact.</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Find Alternatives</h3>
                    <p class="text-gray-600 leading-relaxed">Our smart recommendation engine helps you discover local alternatives to foreign products with ease.</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Digital Certificates</h3>
                    <p class="text-gray-600 leading-relaxed">Take the Swadeshi pledge and earn digital certificates showcasing your commitment to local economy.</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Community Impact</h3>
                    <p class="text-gray-600 leading-relaxed">Join thousands of conscious consumers making a difference in their local communities.</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Track Your Impact</h3>
                    <p class="text-gray-600 leading-relaxed">Monitor your personal contribution to local economy, jobs created, and carbon emissions saved.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Alternative Finder Section -->
    <section class="py-20 bg-gradient-to-r from-green-600 to-orange-500 text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-6">Find Local Alternatives</h2>
            <p class="text-xl mb-8">Enter any foreign product and discover amazing local alternatives</p>
            <div class="flex flex-col sm:flex-row gap-4 max-w-2xl mx-auto">
                <input
                    type="text"
                    placeholder="e.g., Nike shoes, iPhone, Coca Cola..."
                    class="flex-1 px-6 py-4 text-gray-800 rounded-full text-lg outline-none"
                />
                <a
                    href="{{ route('alternatives') }}"
                    class="px-8 py-4 bg-white text-green-600 rounded-full font-semibold text-lg hover:bg-gray-100 transition-colors flex items-center justify-center gap-2"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Find Alternatives
                </a>
            </div>
        </div>
    </section>

    <!-- Impact Stats -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Community Impact</h2>
                <p class="text-xl text-gray-600">Together, we're making a difference</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-bold text-orange-600 mb-2">₹45,67,890</div>
                    <div class="text-gray-600 font-medium">Money Kept Local</div>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-bold text-orange-600 mb-2">2,340</div>
                    <div class="text-gray-600 font-medium">Local Jobs Supported</div>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-bold text-orange-600 mb-2">18,560</div>
                    <div class="text-gray-600 font-medium">Kg CO2 Saved</div>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-2xl text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-gradient-to-r from-orange-400 to-green-600 rounded-2xl flex items-center justify-center text-white mx-auto mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-4xl font-bold text-orange-600 mb-2">5,678</div>
                    <div class="text-gray-600 font-medium">Happy Customers</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Featured Local Products</h2>
                <p class="text-xl text-gray-600">Discover authentic products from local artisans</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($featuredProducts as $product)
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 overflow-hidden">
                    <div class="relative p-8 text-center bg-gradient-to-br from-gray-50 to-gray-100">
                        <div class="text-6xl mb-4">{{ $product['image'] }}</div>
                        <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $product['badge'] }}
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $product['name'] }}</h3>
                        <p class="text-gray-600 mb-4">by {{ $product['vendor'] }}</p>
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <span class="text-2xl font-bold text-orange-600">₹{{ $product['price'] }}</span>
                                @if($product['originalPrice'])
                                <span class="ml-2 text-gray-500 line-through">₹{{ $product['originalPrice'] }}</span>
                                @endif
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-400 mr-1">⭐</span>
                                <span class="text-gray-600">{{ $product['rating'] }}</span>
                            </div>
                        </div>
                        <button 
                            class="w-full py-3 bg-gradient-to-r from-orange-500 to-green-600 text-white rounded-full font-semibold hover:from-orange-600 hover:to-green-700 transition-all"
                            onclick="addToCart({{ $product['id'] }})"
                        >
                            Add to Cart
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a
                    href="{{ route('products') }}"
                    class="px-8 py-4 bg-gradient-to-r from-orange-500 to-green-600 text-white rounded-full font-semibold text-lg hover:from-orange-600 hover:to-green-700 transition-all transform hover:scale-105"
                >
                    View All Products
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
