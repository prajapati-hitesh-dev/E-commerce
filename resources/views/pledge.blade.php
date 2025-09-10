@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Take the Swadeshi Pledge</h1>
        <p class="text-xl text-gray-600">Commit to supporting local businesses and building a self-reliant India</p>
    </div>

    <div class="bg-white rounded-2xl shadow-lg p-8">
        <div class="text-center mb-8">
            <div class="w-24 h-24 bg-gradient-to-r from-orange-400 to-green-600 rounded-full flex items-center justify-center text-white mx-auto mb-4">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">I Pledge to Support Local</h2>
            <p class="text-gray-600">Join thousands of conscious consumers making a difference</p>
        </div>

        <form class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                <input type="text" class="input-field" placeholder="Enter your full name" required>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" class="input-field" placeholder="Enter your email" required>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                <input type="text" class="input-field" placeholder="Enter your city" required>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Pledge Commitments</h3>
                
                <div class="space-y-3">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-orange-600 focus:ring-orange-500" checked>
                        <span class="ml-3 text-gray-700">I will prioritize local products over foreign alternatives</span>
                    </label>
                    
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-orange-600 focus:ring-orange-500" checked>
                        <span class="ml-3 text-gray-700">I will support local artisans and small businesses</span>
                    </label>
                    
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-orange-600 focus:ring-orange-500" checked>
                        <span class="ml-3 text-gray-700">I will spread awareness about local products</span>
                    </label>
                    
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-orange-600 focus:ring-orange-500" checked>
                        <span class="ml-3 text-gray-700">I will reduce my carbon footprint by buying local</span>
                    </label>
                </div>
            </div>

            <button type="submit" class="w-full btn-primary">
                Take the Pledge & Get Certificate
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-gray-600">
                By taking this pledge, you'll receive a digital certificate and join our community of 
                <span class="font-bold text-orange-600">5,678+</span> conscious consumers.
            </p>
        </div>
    </div>
</div>
@endsection
