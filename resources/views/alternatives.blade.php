@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Find Local Alternatives</h1>
        <p class="text-xl text-gray-600">Discover amazing local alternatives to foreign products</p>
    </div>

    <!-- Search Section -->
    <div class="max-w-4xl mx-auto mb-12">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <div class="flex flex-col sm:flex-row gap-4">
                <input
                    type="text"
                    placeholder="e.g., Nike shoes, iPhone, Coca Cola..."
                    class="flex-1 px-6 py-4 text-gray-800 rounded-full text-lg outline-none border-2 border-gray-200 focus:border-orange-500"
                />
                <button class="px-8 py-4 bg-gradient-to-r from-orange-500 to-green-600 text-white rounded-full font-semibold text-lg hover:from-orange-600 hover:to-green-700 transition-all flex items-center justify-center gap-2 inline-flex">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Find Alternatives
                </button>
            </div>
        </div>
    </div>

    <!-- Popular Alternatives -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Nike Shoes</h3>
            <div class="space-y-4">
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                    <div class="text-2xl">👟</div>
                    <div>
                        <h4 class="font-semibold">Bata Canvas Shoes</h4>
                        <p class="text-sm text-gray-600">Made in India</p>
                        <p class="text-orange-600 font-bold">₹899</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                    <div class="text-2xl">👟</div>
                    <div>
                        <h4 class="font-semibold">Action Sports Sneakers</h4>
                        <p class="text-sm text-gray-600">Local Brand</p>
                        <p class="text-orange-600 font-bold">₹1,299</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">iPhone</h3>
            <div class="space-y-4">
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                    <div class="text-2xl">📱</div>
                    <div>
                        <h4 class="font-semibold">Micromax IN Note 2</h4>
                        <p class="text-sm text-gray-600">Made in India</p>
                        <p class="text-orange-600 font-bold">₹12,999</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                    <div class="text-2xl">📱</div>
                    <div>
                        <h4 class="font-semibold">Lava Z4</h4>
                        <p class="text-sm text-gray-600">Local Brand</p>
                        <p class="text-orange-600 font-bold">₹8,999</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Coca Cola</h3>
            <div class="space-y-4">
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                    <div class="text-2xl">🥤</div>
                    <div>
                        <h4 class="font-semibold">Thums Up</h4>
                        <p class="text-sm text-gray-600">Indian Brand</p>
                        <p class="text-orange-600 font-bold">₹20</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-lg">
                    <div class="text-2xl">🥤</div>
                    <div>
                        <h4 class="font-semibold">Limca</h4>
                        <p class="text-sm text-gray-600">Local Beverage</p>
                        <p class="text-orange-600 font-bold">₹18</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
